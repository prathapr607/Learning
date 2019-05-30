<!DOCTYPE html>
<html>
<head>
	<title>user registration login form</title>
  <style type="text/css" fontcolor="color">
    .errors{
      visibility: hidden;
    }
  </style>
</head>
<body>
	<div style="width: 100%">
		<div style="width: 50%;float: left; text-align: center ">
			
			<h3>Login</h3>
			<form action="validateuser.php" method="post" >
				Username:<input type="text"  name="uname" id="username"  />
        <p class="errors" id='user_error'> username is required </p>  
				Password:<input type="password" name="password" id="password" />
				<p class="errors" id='password_error'> password is required </p>
				 <input type="submit" value="login" onclick="validate1()" >
			</form>
		</div>
		<script type="text/javascript">
	function validate1() {

      var text1 = document.getElementById("username").value;
      var text2 = document.getElementById("password").value;
      var error = false;
      if( text1 === ''){
      	document.getElementById("user_error").style.visibility = "visible";
        document.getElementById("user_error").style.color = "blue";
      	error = true;
      } else {
        document.getElementById("user_error").style.visibility = "hidden";
      }


      if( text2 === '' ){
        document.getElementById("password_error").style.visibility = "visible";
        document.getElementById("password_error").style.color = "blue";
        error = true;
      } else {
         document.getElementById("password_error").style.visibility = "hidden";
      }

      if( error ){
        event.preventDefault();
      }else{
        window.location.href = "login.php";
      }
}

</script>

		<div style="width:50%; float: right; text-align: center;">	
		<h3>Register</h3>
			<form action="validateuser.php" method="post">
				 Username:<input type="text" name="reg_name" id="userid" />
         <p class="errors" id='username_error' > username is required </p>  
				 Email:<input type="email" name="email" id="emailid" />
         <p class="errors" id='email_error' > email is required </p>  
				 Password:<input type="password" name="password" id="pass1" />
         <p class="errors" id='pass1_error'> password is required </p>  
				 Confirm password:<input type="password" name="confirmpassword" id="pass2" />
         <p class="errors" id='pass2_error'> confirm password is required </p>  
				 <input type="submit" value="register" onclick="validate()" />
			</form>
		 </div>
	 </div>
	  <script type="text/javascript">
  	function validate(){
  		var text1=document.getElementById("userid").value;
  		var text2=document.getElementById("emailid").value;
  	  var text3=document.getElementById("pass1").value;
      var text4=document.getElementById("pass2").value;
  		var error=false;
  		if(text1 === ''){
  			document.getElementById("username_error").style.visibility="visible";
        document.getElementById("username_error").style.color = "red";
        error=true;
  		} else {
        document.getElementById("username_error").style.visibility="hidden";
      }

  		if(text2 === ''){
  			document.getElementById("email_error").style.visibility="visible";
        document.getElementById("email_error").style.color = "red";
        error=true;
      } else {
        document.getElementById("email_error").style.visibility="hidden";
      }
  		if(text3 === ''){
  			document.getElementById("pass1_error").style.visibility="visible";
        document.getElementById("pass1_error").style.color = "red";
        error=true;
      } else {
        document.getElementById("pass1_error").style.visibility="hidden";
      }
  		if(text4 === ''){
  			document.getElementById("pass2_error").style.visibility="visible";
        document.getElementById("pass2_error").style.color = "red";

         error=true;
        
     }else {!
      
        document.getElementById("pass2_error").style.visibility="hidden";

      }
      if(text3 !== text4){
          document.getElementById("pass2_error").style.visibility="visible";
          document.getElementById("pass2_error").innerHTML="password mismatch occur";
         error=true;
      }
      if( !error ){
        event.preventDefault();
      }
      else{
        window.location.href = "login.php";
      }
}

</script>
 
</body>
</html>