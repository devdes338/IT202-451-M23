<?php
require(__DIR__ . "/../../../partials/nav.php");
if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH/home.php"));
}
$results = [];
$db = getDB();

//Sort and Filter
$col = se($_GET, "col", "cost", false);

if (!in_array($col, ["cost", "stock", "name", "created"])) {
    $col = "cost"; //default value, prevent sql injection
}
$order = se($_GET, "order", "asc", false);

if (!in_array($order, ["asc", "desc"])) {
    $order = "asc"; //default value, prevent sql injection
}

$name = se($_GET, "name", "", false);
$category = se($_GET, "category", "", false);

$base_query = "SELECT id, name, description, category, cost, stock FROM Products ";
$total_query = "SELECT count(1) as total FROM Products ";
$query = " WHERE stock > 0 ";
$params = [];

if(!empty($name)){
    $query .= " AND name like :name";
    $params[":name"] = "%$name%";
}elseif(!empty($category)){
    $query .= " AND category like :category";
    $params[":category"] = "%$category%";
}

if (!empty($col) && !empty($order)) {
    $query .= " ORDER BY $col $order"; //be sure you trust these values, I validate via the in_array checks above
}

$stmt = $db->prepare($total_query . $query);
$total = 0;

try {
    $stmt->execute($params);
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $temp = [];
        if(isset($r)){
            $temp = $r[0];
        }
        $total = (int)se($temp, "total", 0, false);
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching items", "danger");
}

//Pagination
$page = se($_GET, "page", 1, false); //default to page 1 (human readable number)
$per_page = 3; //how many items to show per page (hint, this could also be something the user can change via a dropdown or similar)
$offset = ($page - 1) * $per_page;
$query .= " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;

$stmt = $db->prepare($base_query . $query);

foreach ($params as $key => $value) {
    $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
    $stmt->bindValue($key, $value, $type);
}
$params = null;
try {
    $stmt->execute($params); //dynamically populated params to bind
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching items", "danger");
}
if (!isset($total)) {
    flash("Note to Dev: The total variable is undefined", "danger");
}
if (!isset($per_page)) {
    flash("Note to Dev: The per_page variable is undefined", "danger");
}
$total_pages = ceil($total / $per_page);
function persistQueryString($page)
{
    //set the query param for easily building
    $_GET["page"] = $page;
    //https://www.php.net/manual/en/function.http-build-query.php
    return http_build_query($_GET);
}
function check_apply_disabled_prev($page)
{
    echo $page < 1 ? "disabled" : "";
}
function check_apply_active($page, $i)
{
    echo ($page - 1) == $i ? "active" : "";
}
function check_apply_disabled_next($page)
{
    global $total_pages;
    echo ($page) >= $total_pages ? "disabled" : "";
}
?>
<form class="row row-cols-auto g-3 align-items-center">
    <div class="col">
        <div class="input-group" data="i">
            <div class="input-group-text">Name</div>
            <input class="form-control" name="name" value="<?php se($name); ?>" />
        </div>
    </div>
    <div class="col">
        <div class="input-group" data="i">
            <div class="input-group-text">Category</div>
            <input class="form-control" name="category" value="<?php se($category); ?>" />
        </div>
    </div>
    <div class="col">
        <div class="input-group">
            <div class="input-group-text">Sort</div>
            <!-- make sure these match the in_array filter above-->
            <select class="form-control bg-info" name="col" value="<?php se($col); ?>" data="took">
                <option value="cost">Cost</option>
                <option value="stock">Stock</option>
                <option value="name">Name</option>
                <option value="created">Created</option>
            </select>
            <script>
                //quick fix to ensure proper value is selected since
                //value setting only works after the options are defined and php has the value set prior
                document.forms[0].col.value = "<?php se($col); ?>";
            </script>
            <select class="form-control" name="order" value="<?php se($order); ?>">
                <option class="bg-white" value="asc">Up</option>
                <option class="bg-white" value="desc">Down</option>
            </select>
            <script data="this">
                //quick fix to ensure proper value is selected since
                //value setting only works after the options are defined and php has the value set prior
                document.forms[0].order.value = "<?php se($order); ?>";
                if (document.forms[0].order.value === "asc") {
                    document.forms[0].order.className = "form-control bg-success";
                } else {
                    document.forms[0].order.className = "form-control bg-danger";
                }
            </script>
        </div>
    </div>
    <div class="col">
        <div class="input-group">
            <input type="submit" class="btn btn-primary" value="Apply" />
        </div>
    </div>
</form>
<div class="container-fluid">
    <h1>Shop</h1>
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <?php foreach ($results as $item) : ?>
            <div class="col">
                <div class="card bg-light">
                    <div class="card-header">
                        <?php se($item, "category"); ?>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Name: <?php se($item, "name"); ?></h5>
                        <p class="card-text">Description: <?php se($item, "description"); ?></p>
                        <p class="card-text"><a href="edit_item.php?id=<?php se($item, "id"); ?>">Edit</a></p>
                        <a href="/../Project/product_details.php?id=<?php se($item, "id"); ?>">Details</a>
                    </div>
                    <div class="card-footer">
                        Cost: $<?php $price = $item["cost"]; $price=(float)$price; $price=$price/100; echo($price);?>
                        <form method="POST" action="/../Project/cart.php">
                            <input type="hidden" name="product_id" value="<?php se($item, "id");?>"/>
                            <input type="hidden" name="action" value="add"/>
                            <input type="number" name="quantity" value="1" min="1" max="<?php se($item,"stock");?>"/>
                            <input type="submit" class="btn btn-primary" value="Add to Cart"/>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<nav aria-label="Page navigation example I hope I get changed">
    <ul class="pagination justify-content-center">
        <li class="page-item <?php check_apply_disabled_prev(($page - 1)) ?>">
            <a class="page-link" href="?<?php se(persistQueryString($page - 1)); ?>" tabindex="-1">Previous</a>
        </li>
        <?php for ($i = 0; $i < $total_pages; $i++) : ?>
            <li class="page-item <?php check_apply_active($page, $i); ?>"><a class="page-link" href="?<?php se(persistQueryString($i + 1)); ?>"><?php echo ($i + 1); ?></a></li>
        <?php endfor; ?>
        <li class="page-item <?php check_apply_disabled_next($page); ?>">
            <a class="page-link" href="?<?php se(persistQueryString($page + 1)); ?>">Next</a>
        </li>
    </ul>
</nav>
<?php
require(__DIR__ . "/../../../partials/flash.php");
?>