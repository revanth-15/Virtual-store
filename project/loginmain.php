

<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>


	<div class="form">

	<form action="login.php" method="post">
		
		<h3>Sign in</h3>
		<div class="field">Username</div>
		<div id="mail">
			<input type="text" placeholder="Enter username" name="username" required="*" maxlength="30">
		</div>


		<div class="field">Password</div> 
		<div id="password">
			<input type="password" placeholder="Enter password" name="password" required="" maxlength="15" minlength="3">
		</div>

		<div id="button">
		    <input type="submit" name="submit" value="Login" >
		</div>

		<div class="last">
		<a href="register.php">Create account.</div>
		

	</form>
	</div>
	
</body>
</html>


