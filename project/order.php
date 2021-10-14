<html >
<head>
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="home.css">  
<link rel="stylesheet" type="text/css" href="register.css"> 
</head>
<style>
body{

	background-image: url();
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
}
.container{
	margin: auto;
	border:none;
	margin:center;
	background:rgba(128,128,128,0.1);
	border-radius: 18px;
	width: 520px;
	padding: 50px;
	height: 1500px;
	
}

table{
	width:100%;
}
table,th,td{
	border:1px solid black;
	border-collapse:collapse;
}
th,td{
	padding:15px;
	text-align:left;
}
table#t01 tr:nth-child(even){
	background-color:#eee;
}
table#t01 tr:nth-child(odd){
	background-color:#fff;
}
table#t01 th{
	background-color:black;
	color:white;
}


</style>

<body>


<div class="header">
  <h1>MyCart</h1>
  
</div>

<div class="navbar">
  <a href="home.php" class="active">Home</a>
  <a href="mobiles.php">Mobiles & Tablets</a>
  <a href="electronics.php">Electronics</a>
  <a href="fashion.php">Fashion</a>
  <a href="paintings.php">Paintings</a>
  <a href="logout.php" class="right">Logout</a>
  <a href="order.php" class="right">My Orders</a>
</div>
 





<table id="t01">
<tr>

<th>
product image</th>
<th>
product name</th>
<th>
price</th>
<th>
quantity</th>
<th>
name</th>
<th>
email</th>
<th>
address</th>
<th>
Delete</th>
</tr>
<?php
session_start();
$name=$_SESSION["username"];

include 'connect.php';
$sql=$mysqli->query("SELECT `productimage`,`productname`, `price`, `quantity`, `username`, `email`, `address` FROM `order` WHERE username='$name'");

while($result2=$sql->fetch_assoc()){
	
?>
<tr>

<td><img src=" <?php echo $result2['productimage'];?>" height="400" width="400"/></td>
<td><?php echo $result2['productname'];?></td>
<td><?php echo $result2['price'];?></td>
<td><?php echo $result2['quantity'];?></td>
<td><?php echo $result2['username'];?></td>
<td><?php echo $result2['email'];?></td>
<td><?php echo $result2['address'];?></td>

<td>
 <form action ="deleteitem.php" method="post">
		<input type="hidden" name="name" value="<?php echo $result2['productname'];?>">
		<input type="submit" name="nname"  value="Cancel Item">
 </form>
		


</td>
</tr>
<?php
}
?>

</table>

	


</body>
</html>
