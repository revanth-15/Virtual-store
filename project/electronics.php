
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="home.css">  
</head>
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
 
<div class="row">

  <div class="main">
<html>
<title>shopping</title>
<link rel="stylesheet" href="css1.css">

<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

  
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Electronics</p>
    
  </header>

  
  <div class="w3-display-container w3-container">
    <img src="deepika1.jpg"  height="800" ><img src="kohli1.jpg"   width="570"height="800" >
   
  </div>


  
  <?php
include 'connect.php';
$sql=$mysqli->query( "SELECT `category`, `name`, `image`, `price`, `description` FROM `products` WHERE category='electronics'");

while($result2=$sql->fetch_assoc()){
	
?>
<h4><form action="buy.php" method="post">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="<?php echo $result2['image'];?>" height="400" width="400"/>
		<input type="hidden" name="name" value="<?php echo $result2['name'];?>">
		<div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Book now </button>
          </div>
		  </div>
        <p><?php echo $result2['name'];?><br><b><h3>Rs:<?php echo $result2['price'];?></h3></b></p>
      </div>
    </div>
	</form>
</h4>
<?php
}
?>




</body>
</html>
</div>
</div>

<div class="footer">
  <h2>Thankyou for visiting</h2>
</div>
</html>
