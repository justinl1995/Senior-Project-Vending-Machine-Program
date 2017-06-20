<?php
function fundelete()
{
	$servername = "localhost";
$username = "root";
$password = "";
$conn = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
$conn->select_db("project");

$sql="TRUNCATE TABLE restocknotification";
$result = $conn->query($sql);
if ($result)
{
	// Confirm
	header("Location: fulldeleteconfirm.php");
	exit;
}
else
{
	// Error
	header("Location: fulldeleteerror.php");
	exit;
}

}

function deleterow($row)
{
	$servername = "localhost";
$username = "root";
$password = "";
$conn = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
$conn->select_db("project");

$sql = "delete from restocknotification where row = $row";
$result = $conn->query($sql);
if ($result)
{
	// Confirm
	header("Location: rowdeleteconfirm.php");
	exit;
}
else
{
	// Error
	header("Location: rowdeleteerror.php");
	exit;
}
}

function insert($product, $quantity, $vending){
$servername = "localhost";
$username = "root";
$password = "";
$conn = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
$conn->select_db("project");

$sql = "INSERT INTO restocknotification(product, quantity, vending) values ('$product', $quantity, $vending)";
$result = $conn->query($sql);
if ($result)
{
	// Confirm
	header("Location: restockinsertconfirm.php");
	exit;
}
else
{
	// Error
	header("Location: restockinserterror.php");
	exit;
}
}

if (isset($_POST['submit']) && isset($_POST['rows']) && isset($_POST['notify']) && isset($_POST['vending'])) 
{ 
	$dropdown = (int)$_POST['notify'];
	$vend = (int)$_POST['vending'];
	$x = $_POST['rows'];
	insert($x, $dropdown, $vend);
}

if (isset($_POST['delete']))
{
	fundelete();
}

if (isset($_POST['rowdelete']) && isset($_POST['deleteme']))
{
	$row = (int)$_POST['deleteme'];
	deleterow($row);
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
.wrap {
	text-align:center;
}
.select {
	position: absolute;
	top:55%;
	left: 46%;
}
.select2 {
	position:absolute;
	top: 60%;
	left:46%;
}
.select3 {
	position:absolute;
	top: 65%;
	left:46%;
}
.confirm {
	position:absolute;
	top: 70%;
	left:46%;
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
table, th, td {
    border: 1px solid black;
    padding: 5px;
}
table {
	text-align: center;
    border-spacing: 15px;
}

</style>
<body>
<h1>Smart Vending Suite</h1>
<h3>Restock Settings</h3>
<button type="button" class="back"><a href="employee_homepage.php" class="back">Back</a></button>
<button type="button" class="logout"><a href="index.php" class="logout">Logout</a></button>
<hr>
<p>Please Select all Information Needed for Notifications</p>
<p style="color:green">Notification Created</p>
<form id="form1" name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>">
<p>
<label>Product:</label>
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
<label>Quantity Needed:</label>
<select name="notify">
	<option value="Product Column"><--Select Quantity--></option>
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	<option>6</option>
</select>
<br>
<br>
<label>Vending Machine Number:</label>
<select name="vending">
	<option value="Blah"><--Select Vending Machine Number--></option>
	<option>1</option>
</select>
<br>
<br>
<button name = "submit" type="submit" class="button">Confirm</button>
</p>
</form>
<form id="form1" name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
$conn->select_db("project");

$select = "select * from restocknotification";
$result = $conn->query($select);
		// Table headers
	    echo "<table width='92%' border='1'>
	    		<tr>
	    			<th>Row Number</th>
	    			<th>Product</th>
	    			<th>Quantity</th>
	    			<th>Vending Machine Number</th>
	    		</tr>";
	    
	// Table data
	while ($row = $result->fetch_assoc())
	    	{
	    	echo "<tr>";
	    	echo "<td>" . $row['row'] . "</td>";
	    	echo "<td>" . $row['product'] . "</td>";
	    	echo "<td>" . $row['quantity'] . "</td>";
	    	echo "<td>" . $row['vending'] . "</td>";
	    	echo "</tr>";
	    	}
	    echo "</table>";
?>
<br>
<p>
<button name="delete" type="submit" class="button">Clear all Rows</button>
<br><br>
<?php
	echo "<label>Row to be Deleted:</label>";
	echo "<select name='deleteme'>";
	echo "<option value='Product Column'><--Select Row--></option>";
$servername = "localhost";
$username = "root";
$password = "";
$conn = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
$conn->select_db("project");

$select = "select row from restocknotification";
$result = $conn->query($select);
	while ($row = $result->fetch_assoc())
	{
		echo "<option>" . $row['row'] . "</option>";
	}
 echo "</select>";
?>
<br><br>
<button name="rowdelete" type="submit" class="button">Clear a Specific Row</button>
</p>
</form>
<image src="SVS_logo_2.png" alt="Website Logo">
</body>
</html>