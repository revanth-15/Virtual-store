



  <?php
include 'connect.php';
error_reporting(0);
?>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="home.css">  
</head>
<style>
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
  
  <a href="upload.php">Upload Data</a>
  <a href="admin.php">Home</a>
  <a href="home.php" class="right">Main Page</a>
  <a href="myorder.php" class="right">Orders</a>
  <a href="userinfo.php" class="right">Users</a>
  <a href="cancelorder.php" class="right">Canceled Products</a>
  
</div>
 
 <center>
<table id="t01">
<tr>
<th>
image</th>
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
</tr>
<?php
include 'connect.php';
$sql=$mysqli->query("SELECT * FROM `order`");

while($result2=$sql->fetch_assoc()){
	
?>
<tr>
<td><img src=" <?php echo $result2['productimage'];?> "height="400" width="400"/></td>
<td><?php echo $result2['productname'];?></td>
<td><?php echo $result2['price'];?></td>
<td><?php echo $result2['quantity'];?></td>
<td><?php echo $result2['username'];?></td>
<td><?php echo $result2['email'];?></td>
<td><?php echo $result2['address'];?></td>



</tr>
<?php
}
?>



</table>
 </center>
</body>
</html>

	