<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
$conn->select_db("project");

$sql = "select product, quantity, vending from restocknotification";
$result = $conn->query($sql);
if ($result)
{
	if ($result->num_rows != 0)
	{
		while ($row = $result->fetch_assoc())
		{
			$select = "select * from inventory where product = '" . $row['product'] . "' AND quantity <= " . $row['quantity'] . " AND vending = " . $row['vending'];
			$newresults = $conn->query($select);
			if ($newresults->num_rows != 0)
			{
				$Checked = true;
			}
			else
			{
				$Checked = false;
			}
		}
	}
	else
	{
		$Checked = false;
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
	text-align: center;
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
	font-size: 30;
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
p {
	text-align: center;
}
input {
	font-size: 20;
	font-family: Helvetica;
}
a {
	text-decoration: none;
	color: white;
}

a:hover {
	color:red;
	text-decoration: underline;
}

input.logout {
	font-size: 20;
	position: absolute;
	top: 0px;
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
label {
	font-size:30;
	text-decoration: bold;
}
input.nav {
	margin: 0 auto;
}
button {
	font-size: 30;
	font-family: Helvetica;
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
.nav
{
	text-align: center;
	position: absolute;
	top: 500px;
	left: 10px;
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
input[type=radio]{
	border: 0px;
	width: 2%;
	height: 1em;
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
input[type=checkbox]{
	border: 0px;
	width: 10%;
	height: 1em;
}

</style>
</head>
<body>
<p>
<h1>Smart Vending Suite<br>Welcome, Employee!</h1>
<h3>Employee Homepage</h3>
</p>
<button type="button" class="logout"><a href="index.php" class="logout">Logout</a></button>
<hr>
<p>Please Select A Function</p>
<div class="nav">
<nav>
	<ul>
		<li>Vending Machines - Restock Needed</li>
		<li>Vending 1 <input <?php if ($Checked == True) echo "checked='checked'"; ?> id="radio" type="checkbox" name="needs_restocking" value="Needs Restocking" disabled />Needs Restocking<br></li>
	</ul>
</nav>
</div>
<p>
<a href="restock_settings.php"><input type="button" name="restock_settings" value="Restock Settings" class="button"/></a>
<br><br>
<label>Change Low Inventory Notification Settings</label>
<br><br>
<a href="inventory_status_request.php"><input type="button" name="inventory_status_request" value="Inventory Status Request" class="button"/></a>
<br><br>
<label>View Current Amount of Products In The Machine</label>
<br><br>
<a href="product_change.php"><input type="button" name="product_change" value="Product Change" class="button"/></a>
<br><br>
<label>View Product Change Report</label>
<br><br>
<button class="button"onclick="uncheck()">Restock Confirm</button>
<script>
function uncheck() {
document.getElementById("radio").checked = false;
}
</script>
<br><br>
<label>Select to Indicate That The Machine Has Been Restocked</label>
<br>
</p>


<image src="SVS_logo_2.png" alt="Website Logo">
</body>
</html>