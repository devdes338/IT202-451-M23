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
  <div class="row">
    <div class="col">
      Product 
      <?php se($result, "name");?>
    </div>
    <div class="col">
      Description
      <?php se($result,"description");?>
    </div>
  </div>
  <div class="row">
    <div class="col">
      Price
      <div>
        <?php $price = $result["cost"]; $price=(float)$price; $price=$price/100; echo($price);?>
    </div>
    </div>
    <div class="col">
      Stock
      <?php se($result,"stock");?>
    </div>
    <div class="col">
      Category
      <?php se($result,"category");?>
    </div>
  </div>
</div>
<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../partials/flash.php");
?>