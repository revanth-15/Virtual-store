
 
 <?php

include 'connect.php';


$productimage=$_POST["productimage"];
$productname=$_POST["productname"];
$price=$_POST["price"];
$quantity=$_POST["quantity"];
$username=$_POST["name"];
$email=$_POST["email"];
$address=$_POST["address"];

$mysqli->query("INSERT INTO `order`(`productimage`,`productname`, `price`, `quantity`, `username`, `email`, `address`) VALUES ('$productimage','$productname',$price,$quantity,'$username','$email','$address')");

header('Location:http://localhost/shopping/Shopping%20project/project/order.php');
?>

