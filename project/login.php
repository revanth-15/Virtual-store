<?php
 session_start();
include("connect.php");
error_reporting(0);

    $username = $_POST['username'];
    $password = $_POST['password'];
	
	$_SESSION["username"]=$username;
    $sql = "SELECT * from user WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
    $result = $mysqli->query($sql);

    if (!$result->num_rows == 1) {

         header('Location:http://localhost/shopping/Shopping%20project/project/loginmain.php');

         print '<script type="text/JavaScript">
                alert("Error");
            </script>'.con->error;
    } else {
     
        header('Location:http://localhost/shopping/Shopping%20project/project/home.php');
        print '<script type="text/JavaScript">
                    alert("Submitted successfully");
                </script>';
    }

?>
