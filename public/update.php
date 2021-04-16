<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Table</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<div class="container">
<?php
$Sno=$_GET['shoppingcartitemid'];
$con=mysqli_connect('localhost','root','','coolblue');
$qry=mysqli_query($con,"SELECT * FROM shoppingcart_item WHERE shoppingcartitemid='$Sno'");
$row=mysqli_fetch_array($qry);
$Sno=$row["shoppingcartitemid"];
$Productname=$row["productname"];
$Quantity=$row["quantity"];
$Subtotal=$row["unitprice"];
mysqli_close($con);
?>

<form method="post" action="#">
Sno : 
<input type="text" name="Sno" value="<?php echo $row['Sno']; ?>"><br>
Productname: 
<input type="text" name="Productname" value="<?php echo $row['Productname']; ?>"><br>
Quantity: 
<input type="number_format" name="Quantity" value="<?php echo $row['Quantity']; ?>"><br>
Subtotal: 
<input type="number_format" name="Subtotal" value="<?php echo $row['Subtotal']; ?>"><br>

<input type="submit" value="UPDATE" name="update">
</form>
<?php
if(isset($_POST["update"]))
{
	$productname=$_POST["Productname"];
	$quantity=$_POST["Quantity"];
	$unitprice=$_POST["Subtotal"];
	$shoppingcartitemid=$_POST["Sno"];
	
	$con=mysqli_connect('localhost','root','','coolblue');
	$qry=mysqli_query($coolblue,"UPDATE shoppingcart_item SET Productname='$productname', Quantity='$quantity', Subtotal='$unitprice' WHERE Sno=$shoppingcartitemid");
	mysqli_query($con,$qry);
	mysqli_close($con);
	header("location:/../template/cart.tpl");
	
}
?>
</div>
</body>
</html>