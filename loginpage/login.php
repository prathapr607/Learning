
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
				Username:<input type="text" name="uname" id="username"  />
                <p> username is required </p>
				Password:<input type="password" name="password" id="password" />
				<p> password is required </p>
				 <input type="submit" value="login" onclick="validate1()" ><br>
			</form>
		</div>
		<script type="text/javascript">
	function validate1() {

      var text1 = document.getElementById("username").value;
     	console.log(text1);
      var text2 = document.getElementById("password").value;
      console.log(text2);
      if(text1 === ''){
      	document.getElementById("username").value="username is required";
      	// event.preventDefault();
      } else{
      	header(Location:"validateuser.php");
      }
      
      if(text2 === ''){
      	document.getElementById('password').value="password is required";
      }
}

</script>

		<div style="width:50%; float: right; text-align: center;">	
		<h3>Register</h3>
			<form action="validateuser.php" method="post">
				 Username:<input type="text" name="reg_name" id="userid" /><br><br>
				 Email:<input type="email" name="email" id="emailid" /><br><br>
				 Password:<input type="password" name="password" id="pass1" /><br><br>
				 Confirmpassword:<input type="password" name="confirmpassword" id="pass2" /><br><br>
				 <input type="submit" value="register" onclick="validate()" />
			</form>
		 </div>
	 </div>
	  <script type="text/javascript">
  	function validate(){
  		var text1=document.getElementById("userid").value;
  		console.log(text1);
  		var text2=document.getElementById("emailid").value;
  		console.log(text2);
  		var text3=document.getElementById("pass1").value;
  		console.log(text3);
  		var text4=document.getElementById("pass2").value;
  		console.log(text4);
  		if(text1 === ''){
  			document.getElementById("userid").value="username is required";
  		}
  		if(text2 === ''){
  			document.getElementById("emailid").value="email is required";
  		}
  		if(text3 === ''){
  			document.getElementById("pass1").value="password is required";
  		}
  		if(text4 === ''){
  			document.getElementById("pass2").value="confirm password is required";
  		}
}

</script>
 
</body>
</html>