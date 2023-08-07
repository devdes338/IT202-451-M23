<?php
require(__DIR__ . "/../../partials/nav.php");

is_logged_in(true);

$action = strtolower(trim(se($_POST, "action","", false)));
if (!empty($action)) {
    $db = getDB();
    switch ($action) {
        case "add":
            $query = "INSERT INTO Cart (product_id, quantity, unit_price, user_id)
            VALUES (:pid, :q, (SELECT cost FROM Products where id = :pid), :uid) ON DUPLICATE KEY UPDATE
            quantity = quantity + :q";
            $stmt = $db->prepare($query);
            $stmt->bindValue(":pid", se($_POST, "product_id", 0, false), PDO::PARAM_INT);
            $stmt->bindValue(":q", se($_POST, "quantity", 0, false), PDO::PARAM_INT);
            $stmt->bindValue(":uid", get_user_id(), PDO::PARAM_INT);
            try {
                $stmt->execute();
                flash("Added item to cart", "success");
            } catch (PDOException $e) {
                error_log(var_export($e, true));
                flash("Error adding item to cart", "danger");
            }
            break;
        case "update":
            $query = "UPDATE Cart set quantity = :q WHERE id = :cid AND user_id = :uid";
            $stmt = $db->prepare($query);
            $stmt->bindValue(":q", se($_POST, "quantity", 0, false), PDO::PARAM_INT);
            //cart id specifies a specific cart item
            $stmt->bindValue(":cid", se($_POST, "cart_id", 0, false), PDO::PARAM_INT);
            //user id ensures we can only edit our cart
            $stmt->bindValue(":uid", get_user_id(), PDO::PARAM_INT);
            try {
                $stmt->execute();
                flash("Updated item quantity", "success");
            } catch (PDOException $e) {
                //TODO handle item removal when desired_quantity is <= 0
                //TODO handle any other update related rules per your proposal
                error_log(var_export($e, true));
                flash("Error updating item quantity", "danger");
            }
            break;
        case "delete":
            $query = "DELETE FROM Cart WHERE id = :cid AND user_id = :uid";
            $stmt = $db->prepare($query);
            $stmt->bindValue(":cid", se($_POST, "cart_id", 0, false), PDO::PARAM_INT);
            $stmt->bindValue(":uid", get_user_id(), PDO::PARAM_INT);
            try{
                $stmt->execute();
                flash("Product deleted from cart", "success");
            } catch (PDOException $e) {
                error_log(var_export($e,true));
                flash("Could not delete item", "danger");
            }

            break;
    }
}
$query = "SELECT cart.id, product.stock, product.name, cart.unit_price, (cart.unit_price * cart.quantity) as subtotal, cart.quantity
FROM Products as product JOIN Cart as cart on product.id = cart.product_id
 WHERE cart.user_id = :uid";
$db = getDB();
$stmt = $db->prepare($query);
$cart = [];
try {
    $stmt->execute([":uid" => get_user_id()]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($results) {
        $cart = $results;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching cart", "danger");
}
?>

<div class="container-fluid">
    <h1>Cart</h1>
    <table class="table table-striped">
        <?php $total = 0; ?>
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($cart as $c) : ?>
            <tr>
                <td><?php se($c, "name"); ?></td>
                <td><?php se($c, "unit_price"); ?></td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="cart_id" value="<?php se($c, "id"); ?>" />
                        <input type="hidden" name="action" value="update" />
                        <input type="number" name="quantity" value="<?php se($c, "quantity"); ?>" min="1" max="<?php se($c, "stock"); ?>" />
                        <input type="submit" class="btn btn-primary" value="Update" />
                    </form>
                </td>
                <?php $total += (int)se($c, "subtotal", 0, false); ?>
                <td><?php se($c, "subtotal"); ?></td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="cart_id" value="<?php se($c, "id"); ?>" />
                        <input type="hidden" name="action" value="delete" />
                        <input type="submit" class="btn btn-danger" value="x" />
                    </form>
                    <a href="product_details.php?id=<?php se($c, "product_id"); ?>">Details</a>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php if (count($cart) == 0) : ?>
            <tr>
                <td colspan="100%">No items in cart</td>
            </tr>
        <?php endif; ?>
        <tr>
            <td colspan="100%">Total: <?php se($total, null, 0); ?></td>
            <td>
                <form method="POST">
                    <?php $count=0; foreach($cart as $c) : ?>
                        <input type="hidden" name="cart_id" value="<?php se($c,"id");?>" />
                        <?php $count++; ?>
                    <?php endforeach; ?>
                        <input type="hidden" name="action" value="delete" />
                        <input type="submit" class="btn btn-danger" value="Clear Cart" />
                </form>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>