<?php
include("connect.php");
error_reporting(0);
?>

<html>
<head>
	<title>UPLOAD DATA</title>
	<link rel="stylesheet" type="text/css" href="register.css">  
</head>
<style>
body{

	background-image: url(jjj.jpg);
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
	width: 320px;
	padding: 50px;
	height: 500px;
	
}

</style>
<body>
    <div class="container">
 <div class="form">

<form action="" method="post" enctype="multipart/form-data">

    <table align="center">
    	<caption>Welcome</caption>
    	<div class="contain">
		<tr>
            <td>CATEGORY:<br>
    		<select name="category" >
			<option value="electronics">Electronics</option>
			<option value="mobiles">Mobiles</option>
			<option value="fashion">Fashion</option>
			<option value="paintings">Paintings</option>
			</select>
			</td>
    	</tr>
        
    	<tr>
            <td>PRODUCT NAME:<br>
    		<input type="text" placeholder="productname" name="productname" required=""></td>
    	</tr>
        
    	<tr>
            <td>IMAGE:<br>
    		<input type="file" placeholder="select image" name="uploadfile" required=""></td>
    	</tr>
		
		<tr>
            <td>PRICE:<br>
    		<input type="text" placeholder="enter price" name="price" required=""></td>
    	</tr>

		<tr>
            <td>DESCRIPTION:<br>
    		<input type="text" placeholder="description" name="description" required=""></td>
    	</tr>
		
        <tr>
            <td align="center">
			<input type="submit" value="Submit" name="submit"></td>
        </tr>
		
		
    </div>
    </table>
	</form>
	<form action="admin.php" method="post" >

    <table align="center">
	<tr>
			<td align="center">
			<input type="submit" value="View Data"></td>
		</tr>
	</table>
  </form>
  
  <?php
  if($_POST['submit'])
  {
	   $category=$_POST['category'];
	   $name = $_POST['productname'];
	   
	   $price = $_POST['price'];
       $description = $_POST['description'];
	   $filename=$_FILES["uploadfile"]["name"];
       $tempname=$_FILES["uploadfile"]["tmp_name"];
       $folder="".$filename;

       move_uploaded_file($tempname,$folder);
	    
	   $mysqli->query("INSERT INTO `products`(`category`, `name`, `image`, `price`, `description`) VALUES ('$category','$name','$folder',$price,'$description')");
	  
	  
	  
  }
  ?>
</div>
</div>
</body>
</html>