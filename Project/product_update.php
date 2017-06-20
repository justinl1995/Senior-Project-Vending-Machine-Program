<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
$conn->select_db("project");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();

$admin = (int)$_SESSION['user'];
$_SESSION['user'] = $admin;


if (isset($_POST['submit']) && isset($_POST['columns']) && isset($_POST['rows']) && isset($_POST['product']) && isset($_POST['vending'])) 
{ 
	$dropdown = (int)$_POST['product'];
	$vend = (int)$_POST['vending'];
	$x = $_POST['rows'];
	$y = $_POST['columns'];
	insert($admin, $x, $y, $dropdown, $vend);
}


function insert($admin, $productOut, $productIn, $quantity, $vending)
{
$servername = "localhost";
$username = "root";
$password = "";
$conn = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
$conn->select_db("project");

$sql = "INSERT INTO inventorychange (admin, productOut, productIn, Quantity, VendingMachine) VALUES ($admin, '$productOut', '$productIn', $quantity, $vending)";
$result = $conn->query($sql);
if ($result)
{
	$date = date("Y-m-d H:i:s");
	$insert = "insert into timestamp(timestamp,type) values ('$date','Product Update Success')";
	$conn->query($insert);
	$outsql = "update inventory set quantity = 0 where product = '" . $productOut . "' AND vending = " . $vending;
	$conn->query($outsql);
	$insql = "update inventory set quantity = quantity + " . $quantity . "  where product = '" . $productIn . "' AND vending = " . $vending;
	$conn->query($insql);
	header("Location: update_confirm.php");
	exit;
}
else
{
	$date = date("Y-m-d H:i:s");
	$insert = "insert into timestamp(timestamp,type) values ('$date','Product Update Failed')";
	$conn->query($insert);
	header("Location: update_error.php");
	exit;
}

}
?>
<html>
<head>
<title> Smart Vending Suite </title>
<style>
body 
{
	background: white;
	font-family: Garamond;
}

p
{
	font-size: 45;
	color: black;
	text-align:center;
}
h3 {
	text-align: center;
	color: black;
	font-size: 60;
	font-family: Helvetica;
}
h1 {
	text-align: center;
	color: black;
	font-size: 75;
	font-family: Helvetica;
}
li {
	font-size: 20;
	list-style: none;
	line-height: 30px;
	position: relative;
	left: -30px;
}

img {
	position: fixed;
	right: 0px;
	bottom: 0px;
}
button
{
	font-size: 20;
}
a {
	text-decoration: none;
	color: white;
}

a:hover {
	color:red;
	text-decoration: underline;
}
button.back {
	position: absolute;
	top: 10px;
	left: 20px;
	display: inline-block;
  padding: 15px 20px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: white;
  background-color: black;
  border: none;
  border-radius: 10px;
}
a.back {
	text-decoration: none;
	color: white;
}
a.back:hover {
	color: white;
	text-decoration: none;
}
button.logout {
	font-size: 20;
	position: absolute;
	top: 10px;
	right: 20px;
	font-family: Helvetica;
	display: inline-block;
  padding: 15px 20px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: white;
  background-color: black;
  border: none;
  border-radius: 10px;
}
a.logout:hover {
	color:white;
	text-decoration: none;
}
option {
	font-size: 20;
	font-family: Helvetica;
}
select {
	font-size: 20;
	font-family: Helvetica;
	align: center;
}
p {
	text-align: center;
}
.nav
{
	background-color: white;
	text-align: center;
	max-width: 210px;
}
.button{
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: white;
  background-color: black;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {
background-color: white;
color: black;
}
.button:active {
  background-color: black;
  color: white;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
select.option{
	text-align:center;
}
</style>
<body>
<h1>Smart Vending Suite</h1>
<h3>Product Update</h3>
<button type="button" class="back"><a href="admin_homepage.php" class="back">Back</a></button>
<button type="button" class="logout"><a href="index.php" class="logout">Logout</a></button>
<hr>
<p>Please Select a Product to be Changed</p>

<form id="form1" name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>">
<p>
<label>Product Out</label>
<select name="rows">
	<option value="Product Row"><----------Select Product----------></option>
	<option>Doritios Nacho Cheese</option>
	<option>Lay's Classic</option>
	<option>Ruffles Classic</option>
	<option>Sourdough Pretzels</option>
	<option>Hersheys Chocolate Bar</option>
	<option>Cheetos Crunchy</option>
	<option>Doritios Cool Ranch</option>
	<option>Potato Skins</option>
	<option>Cheez-It</option>
	<option>Wheat Thins Toasted Chips</option>
	<option>Reeses Pieces</option>
	<option>Welch's Fruit Snacks</option>
	<option>Fritos</option>
	<option>Smartfood White Cheddar Popcorn</option>
	<option>Lay's BBQ</option>
	<option>M&Ms</option>
</select>
<br>
<br>
<label>Product In</label>
<select name="columns">
	<option value="Product Row"><----------Select Product----------></option>
	<option>Doritios Nacho Cheese</option>
	<option>Lay's Classic</option>
	<option>Ruffles Classic</option>
	<option>Sourdough Pretzels</option>
	<option>Hersheys Chocolate Bar</option>
	<option>Cheetos Crunchy</option>
	<option>Doritios Cool Ranch</option>
	<option>Potato Skins</option>
	<option>Cheez-It</option>
	<option>Wheat Thins Toasted Chips</option>
	<option>Reeses Pieces</option>
	<option>Welch's Fruit Snacks</option>
	<option>Fritos</option>
	<option>Smartfood White Cheddar Popcorn</option>
	<option>Lay's BBQ</option>
	<option>M&Ms</option>
</select>
<br>
<br>
<label>Quantity</label>
<select name="product">
	<option value="Product Column"><--Select Quantity--></option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
	<option>8</option>
	<option>9</option>
	<option>10</option>
</select>
<br>
<br>
<label>Vending Machine Number</label>
<select name="vending">
	<option value="Blah"><--Select Vending Machine Number--></option>
	<option>1</option>
</select>
</div>
<br>
<br>
<button name="submit" type="submit"class="button">Confirm Product Changes</button>
<br>
<br>
<button type="reset" class="button">Reset</button>
<br>
</p>
</form>
<image src="SVS_logo_2.png" alt="Website Logo">
</body>
</html>