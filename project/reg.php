<?php

include 'connect.php';


$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];


$mysqli->query("insert into user(username,email,password) values ('$username','$email','$password')");


$receiver = "1nt19cs155.revanthmallol@nmit.ac.in";
$subject = "Email Test via PHP using Localhost";
$body = "Hi, there...$username email $email successfully register to virtual store.";
$sender = "From:revanthmallol2001@gmail.com";
if(mail($receiver, $subject, $body, $sender)){ 
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}


header('Location:http://localhost/shopping/Shopping%20project/project/loginmain.php');

?>
