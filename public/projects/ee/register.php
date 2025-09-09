<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Register | S.V UNITY</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>

	<div id="wrapper">
	
	<div id="menu">
	
		<a href="register.html">Sign Up</a>
	
	</div>
	
	<div id="formDiv">
	<form method="POST" action="index.php" enctype="multipart/form-data">
	
		<label>First Name</label><br/>
		<input type="text" name="fname"/><br/><br/>
		
		<label>Last Name</label><br/>
		<input type="text" name="lname"/><br/><br/>
		
		<label>Email</label><br/>		
		<input type="text" name="email"/><br/><br/>
		
		<label>Password</label><br/>
		<input type="password" name="password"/><br/><br/>
		
		<label>Re-enter Password</label><br/>
		<input type="password" name="passwordConfirm"/><br/><br/>
		
		<input type="checkbox" name="conditions"/>
		<label>I am agree with terms and conditions</label><br/><br/>
		
		<input type="submit" name="submit" value="Submit"/><br/>	
		
	</form>
	</div>
	</div>
</body>
</html>

