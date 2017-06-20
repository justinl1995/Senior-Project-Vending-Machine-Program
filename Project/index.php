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
function login($name, $pass, $value)
{

$servername = "localhost";
$username = "root";
$password = "";
$conn = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
$conn->select_db("project");
	if ($value == "Employee")
	{
	$sql = "select id from employee where username = '$name' and password = '$pass'";
	$result = $conn->query($sql);
	if ($result->num_rows == 1)
		{
			while ($row = $result->fetch_assoc())
			{
				$x = $row["id"];
			}
			session_start();
			$_SESSION['user'] = $x;
			$date = date("Y-m-d H:i:s");
			$insert = "insert into timestamp(timestamp,type) values ('$date','$name Login')";
			$conn->query($insert);
			header("Location: employee_homepage.php?user=".$x);
			exit;
		}
		else
		{
			$date = date("Y-m-d H:i:s");
			$insert = "insert into timestamp(timestamp, type) values ('$date','$name Failed Login')";
			$conn->query($insert);
			header("Location: indexerror.php");
			exit;
		}
	}
	else
	{
		$sql = "select id from admin where username = '$name' and password = '$pass'";
		$result = $conn->query($sql);
		if ($result->num_rows == 1)
		{
			while ($row = $result->fetch_assoc())
			{
				$x = $row["id"];
			}
			session_start();
			$_SESSION['user'] = $x;
			$date = date("Y-m-d H:i:s");
			$insert = "INSERT INTO timestamp(timestamp,type) values ('$date','$name Login')";
			$result = $conn->query($insert);
			header("Location: admin_homepage.php?user=".$x);
			exit;
		}
		else
		{
			$date = date("Y-m-d H:i:s");
			$insert = "insert into timestamp(timestamp,type) values ('$date','$name Failed Login')";
			$conn->query($insert);
			header("Location: indexerror.php");
			exit;
		}
	}
}

if (isset($_POST['check'])) 
{ 
	login($_POST['name'], $_POST['password'], $_POST['radio']);
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
input {
	font-size: 20;
	font-family: Helvetica;
}
a {
	text-decoration: none;
	font-size: 30;
	color: white;
}
a:hover {
	color:red;
	text-decoration: underline;
}
.nav
{
	background-color: #708090;
	text-align: center;
	max-width: 300px;
	max-height: 250px;
}
input[type=radio]{
	border: 0px;
	width: 2%;
	height: 1em;
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
</head>
<body>
<h1>Welcome To Smart Vending Suite</h1>
<h3>Login</h3>
<hr>
<p style="font-family: Bookman Old Style">Please Select Either Administrator or Employee<br> and <br>Provide a Valid Username and Password</p>

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
        <input class = "button" type="submit" name="check" id="submit" value="Login" />
    </p>
</form>

<image src="SVS_logo_2.png" alt="Website Logo">
</body>
</html>