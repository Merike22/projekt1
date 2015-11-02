<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Serveripoolsed</title>
</head>
<body>
<?php
$var = 5;
$var_is_greater_than_two = ($var > 2 ? true : false); // returns true
?>
<?php
   if(isset($_GET['page'])){
       require $_GET['page'].".php";
   }
?>

</body>
</html>