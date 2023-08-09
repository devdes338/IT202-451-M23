<?php
require(__DIR__ . "/../../partials/nav.php");
$TABLE_NAME = "Products";
$result = [];
$columns = get_columns($TABLE_NAME);
//echo "<pre>" . var_export($columns, true) . "</pre>";
$ignore = ["id", "modified", "created"];
$db = getDB();
//get the item
$id = se($_GET, "id", -1, false);
$stmt = $db->prepare("SELECT * FROM $TABLE_NAME where id =:id");
try {
    $stmt->execute([":id" => $id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $result = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error looking up record", "danger");
}
?>
<div class="container">
    <div class="row-gap-2">
      <div class="col">
        <h1><?php se($result, "name");?></h1>
        <h2><?php se($result, "category");?></h2>
      </div>
      <div class="col">
        <p><?php se($result,"description");?></p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h5>Cost</h5>
        $<?php $price = $result["cost"]; $price=(float)$price; $price=$price/100; echo($price);?>
      </div>
      <div class="col">
        <h5>Stock</h5>
        <?php se($result,"stock");?> left
      </div>
      <div class="col">
        <a href="admin/edit_item.php?id=<?php se($result, "id"); ?>">Edit</a>
      </div>
    </div>
</div>
<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../partials/flash.php");
?>