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
	$update = "select product, quantity from inventory where product = 'Fritos' and vending = 1"; 
	$result = $conn->query($update);
	
	if ($result)
	{
		while ($row = $result->fetch_assoc())
		{
			$product1 = $row['product'];
			$quantity1 = (int)$row['quantity'];
		}
	}
$update = "select product, quantity from inventory where product = 'Cheetos Crunchy' and vending = 1"; 
	$result = $conn->query($update);
	
	if ($result)
	{
		while ($row = $result->fetch_assoc())
		{
			$product2 = $row['product'];
			$quantity2 = (int)$row['quantity'];
		}
	}
	$update = "select product, quantity from inventory where product = 'Cheez-It' and vending = 1"; 
	$result = $conn->query($update);
	
	if ($result)
	{
		while ($row = $result->fetch_assoc())
		{
			$product3 = $row['product'];
			$quantity3 = (int)$row['quantity'];
		}
	}$update = "select product, quantity from inventory where product = 'Doritos Cool Ranch' and vending = 1"; 
	$result = $conn->query($update);
	
	if ($result)
	{
		while ($row = $result->fetch_assoc())
		{
			$product4 = $row['product'];
			$quantity4 = (int)$row['quantity'];
		}
	}$update = "select product, quantity from inventory where product = 'Doritos Nacho Cheese' and vending = 1"; 
	$result = $conn->query($update);
	
	if ($result)
	{
		while ($row = $result->fetch_assoc())
		{
			$product5 = $row['product'];
			$quantity5 = (int)$row['quantity'];
		}
	}$update = "select product, quantity from inventory where product = 'Hersheys Chocolate Bar' and vending = 1"; 
	$result = $conn->query($update);
	
	if ($result)
	{
		while ($row = $result->fetch_assoc())
		{
			$product6 = $row['product'];
			$quantity6 = (int)$row['quantity'];
		}
	}$update = "select product, quantity from inventory where product = 'Lays BBQ' and vending = 1"; 
	$result = $conn->query($update);
	
	if ($result)
	{
		while ($row = $result->fetch_assoc())
		{
			$product7 = $row['product'];
			$quantity7 = (int)$row['quantity'];
		}
	}$update = "select product, quantity from inventory where product = 'Lays Classic' and vending = 1"; 
	$result = $conn->query($update);
	
	if ($result)
	{
		while ($row = $result->fetch_assoc())
		{
			$product8 = $row['product'];
			$quantity8 = (int)$row['quantity'];
		}
	}$update = "select product, quantity from inventory where product = 'M&Ms' and vending = 1"; 
	$result = $conn->query($update);
	
	if ($result)
	{
		while ($row = $result->fetch_assoc())
		{
			$product9 = $row['product'];
			$quantity9 = (int)$row['quantity'];
		}
	}$update = "select product, quantity from inventory where product = 'Potato Skins' and vending = 1"; 
	$result = $conn->query($update);
	
	if ($result)
	{
		while ($row = $result->fetch_assoc())
		{
			$product10 = $row['product'];
			$quantity10 = (int)$row['quantity'];
		}
	}$update = "select product, quantity from inventory where product = 'Reeses Pieces' and vending = 1"; 
	$result = $conn->query($update);
	
	if ($result)
	{
		while ($row = $result->fetch_assoc())
		{
			$product11 = $row['product'];
			$quantity11 = (int)$row['quantity'];
		}
	}$update = "select product, quantity from inventory where product = 'Ruffles Classic' and vending = 1"; 
	$result = $conn->query($update);
	
	if ($result)
	{
		while ($row = $result->fetch_assoc())
		{
			$product12 = $row['product'];
			$quantity12 = (int)$row['quantity'];
		}
	}$update = "select product, quantity from inventory where product = 'Smartfood White Cheddar Popcorn' and vending = 1"; 
	$result = $conn->query($update);
	
	if ($result)
	{
		while ($row = $result->fetch_assoc())
		{
			$product13 = $row['product'];
			$quantity13 = (int)$row['quantity'];
		}
	}$update = "select product, quantity from inventory where product = 'Sourdough Pretzels' and vending = 1"; 
	$result = $conn->query($update);
	
	if ($result)
	{
		while ($row = $result->fetch_assoc())
		{
			$product14 = $row['product'];
			$quantity14 = (int)$row['quantity'];
		}
	}$update = "select product, quantity from inventory where product = 'Welchs Fruit Snack' and vending = 1"; 
	$result = $conn->query($update);
	
	if ($result)
	{
		while ($row = $result->fetch_assoc())
		{
			$product15 = $row['product'];
			$quantity15 = (int)$row['quantity'];
		}
	}$update = "select product, quantity from inventory where product = 'Wheat Thins Toasted Chips' and vending = 1"; 
	$result = $conn->query($update);
	
	if ($result)
	{
		while ($row = $result->fetch_assoc())
		{
			$product16 = $row['product'];
			$quantity16 = (int)$row['quantity'];
		}
	}
	
	
function update($product, $quantity)
{
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
if (0 != $quantity)
{
	$update = "update inventory set quantity = quantity-1 where product = '$product' and vending = 1"; 
	$result = $conn->query($update);
	if ($result)
	{
		$date = date("Y-m-d H:i:s");
		$insert = "insert into timestamp(timestamp,type) values ('$date','$product Purchase')";
		$new = $conn->query($insert);
		if ($new)
		{
			
			$record = "select id from timestamp where timestamp = '$date'";
			$get = $conn->query($record);
			if ($get)
			{
				while ($row = $get->fetch_assoc())
				{
					$id = (int)$row['id'];
				}
				$sale = "insert into purchase (product, vending, record) values ('$product', 1, $id)";
				$done = $conn->query($sale);
				
			}
		}
	}
}
else
{
echo "<h1>$product is Sold Out</h1>";
}
}


if (isset($_POST['1']))
{
	update($product1, $quantity1);
}
if (isset($_POST['2']))
{
	update($product2, $quantity2);
}
if (isset($_POST['3']))
{
	update($product3, $quantity3);
}
if (isset($_POST['4']))
{
	update($product4, $quantity4);
}
if (isset($_POST['5']))
{
	update($product5, $quantity5);
}
if (isset($_POST['6']))
{
	update($product6, $quantity6);
}
if (isset($_POST['7']))
{
	update($product7, $quantity7);
}
if (isset($_POST['8']))
{
	update($product8, $quantity8);
}
if (isset($_POST['9']))
{
	update($product9, $quantity9);
}
if (isset($_POST['10']))
{
	update($product10, $quantity10);
}
if (isset($_POST['11']))
{
	update($product11, $quantity11);
}
if (isset($_POST['12']))
{
	update($product12, $quantity12);
}
if (isset($_POST['13']))
{
	update($product13, $quantity13);
}
if (isset($_POST['14']))
{
	update($product14, $quantity14);
}
if (isset($_POST['15']))
{
	update($product15, $quantity15);
}
if (isset($_POST['16']))
{
	update($product16, $quantity16);
}
?>
<html>
<head>
<title> Vending Machine </title>
<style>

img {
width:200px;
height:200px;
}
td{
	align="center";
}
</style>
</head>
<body>

<h1> Vending Machine </h1>
<hr>
<div style="position: inline-block">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table>


  <tr>
    <th>Row</th>
    <th>Column 1</th>
	<th>Column 2</th>
	<th>Column 3</th>
	<th>Column 4</th>
  </tr>
  
  
  <tr>
    
	<td align="center">1</td>
    
	<td align="center"><img src="<?php echo $product1 ?>.png"><br>
	<button type="submit" name="1">Click Me!</button><br>
	<input type="text" value="<?php echo (int)$quantity1 ?>" disabled = "true"></input></td>
	
	<td align="center"><img src="<?php echo $product2 ?>.png"><br>
	<button type="submit" name="2">Click Me!</button><br>
	<input type="text" value="<?php echo (int)$quantity2 ?>" disabled = "true"></input></td>
	
	<td align="center"><img src="<?php echo $product3 ?>.png"><br>
	<button type="submit" name="3">Click Me!</button><br>
	<input type="text" value="<?php echo (int)$quantity3 ?>" disabled = "true"></input></td>
	
	<td align="center"><img src="<?php echo $product4 ?>.png"><br>
	<button type="submit" name="4">Click Me!</button><br>
	<input type="text" value="<?php echo (int)$quantity4 ?>" disabled = "true"></input></td>
  
  </tr>
  
  
  <tr>
    
	<td align="center">2</td>
    
	<td align="center"><img src="<?php echo $product5 ?>.png"><br>
	<button type="submit" name="5">Click Me!</button><br>
	<input type="text" value="<?php echo (int)$quantity5 ?>" disabled = "true"></input></td>
	
	<td align="center"><img src="<?php echo $product6 ?>.png"><br>
	<button type="submit" name="6">Click Me!</button><br>
	<input type="text" value="<?php echo (int)$quantity6 ?>" disabled = "true"></input></td>
	
	<td align="center"><img src="<?php echo $product7 ?>.png"><br>
	<button type="submit" name="7">Click Me!</button><br>
	<input type="text" value="<?php echo (int)$quantity7 ?>" disabled = "true"></input></td>
	
	<td align="center"><img src="<?php echo $product8 ?>.png"><br>
	<button type="submit" name="8">Click Me!</button><br>
	<input type="text" value="<?php echo (int)$quantity8 ?>" disabled = "true"></input></td>
  
  </tr>
  
  
  <tr>
    
	<td align="center">3</td>
    
	<td align="center"><img src="<?php echo $product9 ?>.png"><br>
	<button type="submit" name="9">Click Me!</button><br>
	<input type="text" value="<?php echo (int)$quantity9 ?>" disabled = "true"></input></td>
	
	<td align="center"><img src="<?php echo $product10 ?>.png"><br>
	<button type="submit" name="10">Click Me!</button><br>
	<input type="text" value="<?php echo (int)$quantity10 ?>" disabled = "true"></input></td>
	
	<td align="center"><img src="<?php echo $product11 ?>.png"><br>
	<button type="submit" name="11">Click Me!</button><br>
	<input type="text" value="<?php echo (int)$quantity11 ?>" disabled = "true"></input></td>
	
	<td align="center"><img src="<?php echo $product12 ?>.png"><br>
	<button type="submit" name="12">Click Me!</button><br>
	<input type="text" value="<?php echo (int)$quantity12 ?>" disabled = "true"></input></td>
  
  </tr>
  
  
  <tr>
    
	<td align="center">4</td>
    
	<td align="center"><img src="<?php echo $product13 ?>.png"><br>
	<button type="submit" name="13">Click Me!</button><br>
	<input type="text" value="<?php echo (int)$quantity13 ?>" disabled = "true"></input></td>
	
	<td align="center"><img src="<?php echo $product14 ?>.png"><br>
	<button type="submit" name="14">Click Me!</button><br>
	<input type="text" value="<?php echo (int)$quantity14 ?>" disabled = "true"></input></td>
	
	<td align="center"><img src="<?php echo $product15 ?>.png"><br>
	<button type="submit" name="15">Click Me!</button><br>
	<input type="text" value="<?php echo (int)$quantity15 ?>" disabled = "true"></input></td>
	
	<td align="center"><img src="<?php echo $product16 ?>.png"><br>
	<button type="submit" name="16">Click Me!</button><br>
	<input type="text" value="<?php echo (int)$quantity16 ?>" disabled = "true"></input></td>
		
  </tr>
  
</table>
</form>
</div>
</body>
</html>