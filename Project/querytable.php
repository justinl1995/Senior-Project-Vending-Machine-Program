<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
$conn->select_db("project");


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
table, th, td {
    border: 1px solid black;
    padding: 5px;
}
table {
	text-align: center;
    border-spacing: 15px;
}

label {
font-size: 35;
}
.nav
{
	background-color: white;
	text-align: center;
	max-width: 210px;
}
input {
font-size: 35;
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
</style>
<body>
<h1>Smart Vending Suite</h1>
<h3>Query</h3>
<button type="button" class="back"><a href="admin_homepage.php" class="back">Back</a></button>
<button type="button" class="logout"><a href="index.php" class="logout">Logout</a></button>
<hr>
<form action = "querytable.php" method = "POST">
<div align="center">
<br>
<br>
<button type="submit" class="button">Run Query</button>
</form>
<?php
$sql = "select p.product, v.location, t.timestamp from purchase p join vendingmachine v on p.vending = v.id join timestamp t on p.record = t.id order by t.timestamp ASC";
$servername = "localhost";
$username = "root";
$password = "";
$conn = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
$conn->select_db("project");
echo "<br>";
$result = $conn->query($sql);
echo "<br>";
echo "<br>";
echo "<table width='75%' border='1'>
	    		<tr>
	    			<th>Product</th>
	    			<th>Location</th>
	    			<th>Timestamp</th>
	    		</tr>";
	    
	// Table data
	while ($row = $result->fetch_assoc())
	    	{
	    	echo "<tr>";
	    	echo "<td>" . $row['product'] . "</td>";
	    	echo "<td>" . $row['location'] . "</td>";
	    	echo "<td>" . $row['timestamp'] . "</td>";
	    	echo "</tr>";
	    	}
	    echo "</table>";
?>
<br>
<br>
</div>
<image src="SVS_logo_2.png" alt="Website Logo">
</body>
</html>