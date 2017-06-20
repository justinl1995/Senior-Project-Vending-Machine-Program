<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['check'])) 
{ 
	insert($_POST['name'], $_POST['password'], $_POST['radio']);
}

function insert($name, $pass, $type)
{
$servername = "localhost";
$username = "root";
$password = "";
$conn = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
$conn->select_db("project");

	if ($type == "Employee")
		{
			$sql = "select * from employee where username = '$name' and password = '$pass'";
			$result = $conn->query($sql);
			if ($result->num_rows == 0)
			{
				$sql = "INSERT INTO employee (username, password) VALUES ('$name', '$pass')";
				$result = $conn->query($sql);
				if ($result == TRUE)
				{
					header("Location: addconfirm.php");
					exit;
				}
				else
				{
					header("Location: adderror.php");
					exit;
				}
			}
			else
			{
				header("Location: adderror.php");
				exit;
			}
		}
		else
		{
			$sql = "select * from admin where username = '$name' and password = '$pass'";
			$result = $conn->query($sql);
			if ($result->num_rows == 0)
			{
				$sql = "INSERT INTO admin (username, password) VALUES ('$name', '$pass')";
				$result = $conn->query($sql);
				if ($result == TRUE)
				{
					header("Location: addconfirm.php");
					exit;
				}
				else
				{
					header("Location: adderror.php");
					exit;
				}
			}
			else
			{
				header("Location: adderror.php");
				exit;
			}
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
	background-color: white;
	text-align: center;
	max-width: 210px;
}
label {
font-size: 40;
}

input {
font-size: 35;
}

input[type=radio]{
	border: 0px;
	width: 2%;
	height: 1em;
}
.bigger{
font-size: 55;
}

</style>
<body>
<h1>Smart Vending Suite</h1>
<h3>Add New User</h3>
<button type="button" class="back"><a href="admin_homepage.php" class="back">Back</a></button>
<button type="button" class="logout"><a href="index.php" class="logout">Logout</a></button>
<hr>
<p>Add a New User</p>
<p style="color:green">User Creation Successful</p>
<form id="form1" name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>">
    <p>
	<input type="radio" name="radio" value="Administrator">Administrator
	<input type="radio" name="radio" value="Employee">Employee
	</p>
	<p align="center">Username :
        <input type="text" name="name" id="name" />
    </p>
    <p align="center">Password :
        <input type="password" name="password" id="pass" />
    </p>
    <p align="center">
        <input class = "button" type="submit" name="check" id="submit" value="Create Account" />
    </p>
</form>

<image src="SVS_logo_2.png" alt="Website Logo">
</body>
</html>