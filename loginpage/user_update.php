<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
	<title></title>
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
	 Email:<input type="email" name="email" value="<?php echo $email; ?>"><br><br>
	 Password:<input type="password" name="password" value=""><br><br>
	 Confirmpassword:<input type="password" name="confirmpassword" value=""><br><br>
	 Profilepicture:
	 <img src="http://<?php echo $_SERVER['HTTP_HOST']. $profile_photo; ?>" width="80" height="40" / ><br/>
	 <input type="file" name="profile_photo" required="" >
	 <input type="submit" name="submit" value="submit">
	 <a href="logout.php">Logout</a>
	</form>
   

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