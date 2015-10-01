<!DOCTYPE html>
<head>
</head>
<body>
<?php
$x_RepCom = '<input name="RepCom" type="text" value="';
if(isset($RepCom)) { $x_RepCom .= $RepCom; }
$x_RepCom .= '>';

echo 'Bonjour ' . htmlspecialchars($_GET["name"]) . '!';
?>
</body>