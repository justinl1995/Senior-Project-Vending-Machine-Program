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
p
{
	text-align:center;
}
table, th, td {
    border: 1px solid black;
    padding: 5px;
}
table {
	text-align: center;
    border-spacing: 15px;
}


.select {
	position:absolute;
	top: 30%;
	left:46%;
}

select {
	font-size: 20;
	font-family: Helvetica;
	align: center;
}
.nav
{
	background-color: white;
	text-align: center;
	max-width: 210px;
}
table {
align: center;
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

</style>
<body>
<h1>Smart Vending Suite</h1>
<h3>Inventory Status Request</h3>
<button type="button" class="back"><a href="employee_homepage.php" class="back">Back</a></button>
<button type="button" class="logout"><a href="index.php" class="logout">Logout</a></button>
<hr>
<p>Inventory Of Vending Machines</p>
<form action="inventory.php" method="POST">
<p>
<label>Vending Machine Number:</label>
<select name="vending">
	<option value="Blah"><--Select Vending Machine Number--></option>
	<option>1</option>
</select>
<br>
<br>
<button type = "submit" class="button" name="submit">Get Inventory</button>
</p>
</form>
<image src="SVS_logo_2.png" alt="Website Logo">
</body>
</html>