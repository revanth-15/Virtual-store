<?php

include 'connect.php';
$name=$_POST["name"];
$mysqli->query( "DELETE FROM `order` WHERE productname='$name'");
header('Location:http://localhost/shopping/Shopping%20project/project/order.php');
?>