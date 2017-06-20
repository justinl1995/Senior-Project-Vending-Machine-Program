<?php
session_start();
$x = $_SESSION['user'];
$_SESSION['user'] = $x;
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
	color: white;
}

a:hover {
	color:red;
	text-decoration: underline;
}

input.logout {
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
label {
	font-size:20;
	text-decoration: bold;
}
input.nav {
	margin: 0 auto;
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
label{
font-size: 45;
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
<p>
<h1>Smart Vending Suite <br>Welcome, Admin!</h1>
<h3>Admin Homepage</h3>
</p>
<button type="button" class="logout"><a href="index.php" class="logout">Logout</a></button>
<hr>
<p>Please Select A Function</p>
<p>
<a href="add_new_user.php"><input type="button" name="add_new_user" value="Add New User" class="button"/></a>
<br><br>
<label>Add a new user</label>
<br><br>
<a href="product_update.php"><input type="button" name="product_update" value="Product Update" class="button"/></a>
<br><br>
<label>Change Product Inventory</label>
<br><br>
<a href="query.php"><input type="button" name="query" value="Query System" class="button"/></a>
<br><br>
<label>View Sales Statistics</label>

</p>


<image src="SVS_logo_2.png" alt="Website Logo">
</body>
</html>