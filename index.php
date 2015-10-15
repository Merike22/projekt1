<!DOCTYPE html>
<head>
</head>
<body>
<?php
var_dump($_GET['page']);
array(
    'id' => 'home.php')
  $product_id = $_GET['id'];
  $product = $products[$product_id];

  echo $product_id;
  var_dump($product);

?>

</body>