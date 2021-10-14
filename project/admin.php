  <?php
include 'connect.php';
error_reporting(0);
?>
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
  
  <a href="upload.php">Upload Data</a>
  <a href="admin.php">Home</a>
  <a href="home.php" class="right">Main Page</a>
  <a href="myorder.php" class="right">Orders</a>
  <a href="userinfo.php" class="right">Users</a>
  <a href="cancelorder.php" class="right">Canceled Products</a>
  
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
    <h2><p class="w3-left"> <u>Electronics</u></p></h2>
    
  </header>

  <?php

$sql=$mysqli->query( "SELECT `category`, `name`, `image`, `price`, `description` FROM `products` WHERE category='electronics'");

while($result2=$sql->fetch_assoc()){
	
?>
<h4>
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="<?php echo $result2['image'];?>" height="400" width="400"/>
		
		  </div>
        <p><?php echo $result2['name'];?><br><b><h3>Rs:<?php echo $result2['price'];?></h3></b></p>
      </div>
	  <form action ="" method="post">
		<input type="hidden" name="name" value="<?php echo $result2['name'];?>">
		<input type="submit" name="nname"  value="DELETE">
		</form>
		<?php

		 if($_POST['nname'])
		 {
			$name=$_POST["name"];
			$mysqli->query( "DELETE FROM `products` WHERE name='$name'");
			header('Location:http://localhost/project/admin.php');
		 }
		?>
    </div>
</h4>
<?php
}
?>

<header class="w3-container w3-xlarge">
   <h2><p class="w3-left"> <u>Fashion</u></p></h2>
</header>
<hr>
  <?php
  $sql=$mysqli->query( "SELECT `category`, `name`, `image`, `price`, `description` FROM `products` WHERE category='fashion'");

while($result2=$sql->fetch_assoc()){
	
?>
<h4>
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="<?php echo $result2['image'];?>" height="400" width="400"/>
		
		  </div>
        <p><?php echo $result2['name'];?><br><b><h3>Rs:<?php echo $result2['price'];?></h3></b></p>
		<form action ="" method="post">
		<input type="hidden" name="name" value="<?php echo $result2['name'];?>">
		<input type="submit" name="nname" value="DELETE">
		</form>
		<?php

		 if($_POST['nname'])
		 {
			$name=$_POST["name"];
			$mysqli->query( "DELETE FROM `products` WHERE name='$name'");
		 }
		?>
      </div>
    </div>
</h4>
<?php
}
?>

<header class="w3-container w3-xlarge">
    <h2><p class="w3-left"> <u>Mobiles</u></p></h2>
</header>

<?php

$sql=$mysqli->query( "SELECT `category`, `name`, `image`, `price`, `description` FROM `products` WHERE category='mobiles'");

while($result2=$sql->fetch_assoc()){

	
?>
<h4>
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="<?php echo $result2['image'];?>" height="400" width="400"/>
		
		  </div>
        <p><?php echo $result2['name'];?><br><b><h3>Rs:<?php echo $result2['price'];?></h3></b></p>
      </div>
	  
	<form action ="" method="post">
		<input type="hidden" name="name" value="<?php echo $result2['name'];?>">
		<input type="submit" name="nname" value="DELETE">
	</form>
	
	<?php

	 if($_POST['nname'])
	 {
		$name=$_POST["name"];
		$mysqli->query( "DELETE FROM `products` WHERE name='$name'");
	 }
	?>
    </div>
</h4>
<?php
}
?>

<header class="w3-container w3-xlarge">
   <h2><p class="w3-left"> <u>Paintings</u></p></h2>
</header>
<hr>
  <?php

$sql=$mysqli->query( "SELECT `category`, `name`, `image`, `price`, `description` FROM `products` WHERE category='paintings'");

while($result2=$sql->fetch_assoc()){
	
?>
<h4>
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="<?php echo $result2['image'];?>" height="400" width="400"/>
		
		  </div>
        <p><?php echo $result2['name'];?><br><b><h3>Rs:<?php echo $result2['price'];?></h3></b></p>
		<form action ="" method="post">
		<input type="hidden" name="name" value="<?php echo $result2['name'];?>">
		<input type="submit" name="nname" value="DELETE">
		</form>
		<?php

		 if($_POST['nname'])
		 {
			$name=$_POST["name"];
			$mysqli->query( "DELETE FROM `products` WHERE name='$name'");
		 }
		?>
      </div>
    </div>
</h4>
<?php
}
?>
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      

      
    </div>
  </footer>




</body>
</html>
</div>
</div>

<div class="footer">
  <h2>Thankyou for visiting</h2>
</div>
</html>
