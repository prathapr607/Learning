
<!DOCTYPE html>
<html>
<head>
	<title>user registration login form</title>
</head>
<body>
	<div style="width: 100%">
		<div style="width: 50%;float: left; text-align: center;">
			
			<h3>Login</h3>
			<form action="validateuser.php" method="post" >
				Username:<input type="text" name="uname" id="logerid" value="" ><br><br>
				Password:<input type="text" name="password" value="" ><br><br>
				 <input type="submit" name="submit" value="submit" ><br>
			</form>
		</div>
		<div style="width:50%; float: right; text-align: center;">
		<h3>Register</h3>
			<form action="validateuser.php" method="post">
				 Username:<input type="text" name="reg_name" id="userid" value="" required=""><br><br>
				 Email:<input type="email" name="email" value="" required=""><br><br>
				 Password:<input type="text" name="password" value="" required=""><br><br>
				 Confirmpassword:<input type="text" name="confirmpassword" value="" required=""><br><br>
				 <input type="submit" name="submit" value="submit">
			</form>
		 </div>
	 </div>
</body>
</html>