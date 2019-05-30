<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
	<title></title>
	 <style type="text/css" fontcolor="color">
    .errors{
      visibility: hidden;
    }
  </style>
</head>
<body>
	<p>welcome <?php echo $_SESSION['uname']; ?>! </p>
	<?php
	include 'connectdb.php';
	$username = '';
	$email= '';
	$password='';
	$profile_photo = '';
	if( isset( $_POST['user'] ) && is_numeric( $_POST['user'] ) ){
		$sql = "SELECT * FROM user WHERE id=" . $_POST['user'];
		$query = mysqli_query($connection, $sql);
		$getdata=mysqli_fetch_array($query);
		if ( !$getdata ) {
			echo "user not exist";
			} else{
				$username=$getdata['username'];
				 $email = $getdata['email'];
				 $password = $getdata['password'];
				 $profile_photo = $getdata['Profilepicture'];
			}
		}
		?>
	<form action="" enctype="multipart/form-data" method="post">
	<input type="hidden" name="user_id" value="<?php echo $_POST['user']; ?> ">
	 Username:<input type="text" name="reg_name" id="userid" value="<?php echo $username; ?>"><br><br>
	 <p class="errors" id='username_error' > username is required </p>  
	 Email:<input type="email" name="email" id="emailid" value="<?php echo $email; ?>"><br><br>
	 <p class="errors" id='email_error' > email is required </p>  
	 Password:<input type="password" name="password"  id="pass1" value="<?php echo $password; ?>"><br><br>
	 <p class="errors" id='password_error' > password is required </p>  
	 Confirm password:<input type="password"  name="confirmpassword" id="pass2" value="<?php echo $confirmpassword; ?>"><br><br>
	 <p class="errors" id='confirmpassword_error' > confirm password is required </p> 
	 Profilepicture:
	 <img src="http://<?php echo $_SERVER['HTTP_HOST']. $profile_photo; ?>" width="80" height="40" / ><br/>
	 <input type="file" name="profile_photo" value=""/>
	 <input type="submit" value="submit" onclick="validate()" /> 
	 <a href="logout.php">Logout</a>
	</form>
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
  			document.getElementById("password_error").style.visibility="visible";
        document.getElementById("password_error").style.color = "red";
        error=true;
      } else {
        document.getElementById("password_error").style.visibility="hidden";
      }
  		if(text4 === ''){
  			document.getElementById("confirmpassword_error").style.visibility="visible";
        document.getElementById("confirmpassword_error").style.color = "red";

         error=true;
        
     }else {
      
        document.getElementById("confirmpassword_error").style.visibility="hidden";

      }
      if(text3 !== text4){
          document.getElementById("confirmpassword_error").style.visibility="visible";
          document.getElementById("confirmpassword_error").innerHTML="password mismatch occur";
         error=true;
      }
      if( error ){
        event.preventDefault();
      }
      else{
        window.location.href = "login.php";
      }
}

</script>
 

	 <?php 
         if(isset($_POST['submit'])){

         	include 'validation.php';
	 	 if(!$connection){
	     	echo "connection to db is failed";	 	
	     	return;
	     }
    
         move_uploaded_file($_FILES['profile_photo']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/exercise/images/".$_FILES['profile_photo']['name']);

         $profile_url = '/exercise/images/'.$_FILES['profile_photo']['name'];
	 	$update_sql="UPDATE `user` SET `username`='".$_POST['reg_name'] ."',`email`='$email',`password`='".md5($_POST['password'])."',`Profilepicture`='".$profile_url."' WHERE id=".$_POST['user_id'];

     	$update_query=mysqli_query($connection,$update_sql);

     	if($update_query){
     		echo "update done <a href='welcome.php'>click here</a>";
     		header("Location:user_list.php");
     	   } else {
     	  	echo "not update";
	     	    }
    }
	?>
	 </body>
</html> 
