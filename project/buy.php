<?php
session_start();
include 'connect.php';

$name=$_POST["name"];
$sql=$mysqli->query( "SELECT `category`, `name`, `image`, `price`, `description` FROM `products` WHERE name='$name'");

while($result2=$sql->fetch_assoc())
{
	 $image= $result2['image'];
	 $name= $result2['name'];
	 $price= $result2['price'];
	 
}

?>
   
<html>
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
 

 
 


<div class="container">

<img src="<?php echo $image;?>" height="400" width="400"/>
<form action="buyok.php" method="post">
<h2>
    <table align="center">
    	<caption>ENTER DETAILS</caption>
    	<div class="contain">
		<tr>
            <td>
    		<input type="hidden" name="productimage" value="<?php echo $image;?>"></td>
    	</tr>
    	<tr>
            <td><h4>PRODUCT NAME:</h4><br>
    		<input type="text" name="productname" value="<?php echo $name?>"></td>
    	</tr>
        
    	<tr>
            <td><h4>Price<h4><br>
    		<input type="text"  name="price" value="<?php echo $price;?>"></td>
    	</tr>
		<tr>
            <td><h4>Quantity<h4><br>
    		<input type="text"  name="quantity" required="" ></td>
    	</tr>
		<tr>
            <td><h4>Name<h4><br>
    		<input type="text"  name="name" value="<?php echo $_SESSION["username"]?>"></td>
    	</tr>
		<tr>
            <td><h4>Email<h4><br>
    		<input type="text"  name="email"  value=""></td>
    	</tr>
		<tr>
            <td><h4>Address<h4><br>
    		<input type="text"  name="address" required=""></td>
    	</tr>


        <tr>
            <td align="center">
			<input type="submit" value="Buy Now" ></td>
        </tr>

    </div>
    </table>
	</h2>
  </form>
</div>
</div>

</body>
</html>
