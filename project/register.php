
<html>
<head>
	<title>REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="register.css">  
</head>
<style>
body{

	background-image: url(register.jpg);
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
	height: 300px;
	
}

</style>
<body>
    <div class="container">
 <div class="form">

<form action="reg.php" method="post">

    <table align="center">
    	<caption>Welcome</caption>
    	<div class="contain">
    	<tr>
            <td>NAME:<br>
    		<input type="text" placeholder="username" name="username" required=""></td>
    	</tr>
        
    	<tr>
            <td>EMAIL:<br>
    		<input type="mail" placeholder="xyz@gmail.com" name="email" required=""></td>
    	</tr>

    	<tr>
			<td>SET PASSWORD:<br><input type="password" placeholder="Password" name="password" required=""></td>
		</tr>

        <tr>
            <td align="center">
			<input type="submit" value="Register" name=""></td>
        </tr>

    </div>
    </table>
  </form>
</div>
</div>
</body>
</html>