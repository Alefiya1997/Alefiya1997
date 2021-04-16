<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
$Sno=$_GET['shoppingcartitemid'];
$con=mysqli_connect('localhost','root','','coolblue');
$qry=mysqli_query($coolblue,"DELETE FROM shoppingcart_item WHERE Sno='$shoppingcartitemid'");
mysqli_query($con,$qry);
mysqli_close($con);
header('location:/../template/cart.tpl');
?>
</body>
</html>