<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	print_r($_POST);
	if( !isset( $_POST['update_user'])){
		// echo "update done";
		 header('Location: user_list.php');
	}
	 ?>
	<p>welcome <?php echo $_SESSION['uname']; ?>! </p>
	<?php
	include 'connectdb.php';
	$username = '';
	$email= '';
	$password='';
	if( isset( $_POST['user'] ) && is_numeric( $_POST['user'] ) ){
		$sql = "SELECT * FROM user WHERE id=" . $_POST['user'];
		print_r($sql);
		$query = mysqli_query($connection, $sql);
		$getdata=mysqli_fetch_array($query);
		if ( ! $getdata ) {
			echo "user not exist";
			} else{
				$username=$getdata['username'];
				 $email = $getdata['email'];
			}
		}
		?>
	<form action="user_update.php" method="post">
	<input type="hidden" name="user_id" value="<?php echo $_POST['user']; ?> ">
	 Username:<input type="text" name="reg_name" id="userid" value="<?php echo $username; ?>"><br><br>
	 Email:<input type="email" name="email" value="<?php echo $email; ?>"><br><br>
	 Password:<input type="text" name="password" value=""><br><br>
	 Confirmpassword:<input type="text" name="confirmpassword" value=""><br><br>
	 <input type="submit" name="submit" value="submit">
	 <a href="logout.php">Logout</a>
	</form>
   
	 <?php
	  include 'connectdb.php';	
	 include 'validation.php';
	 if(isset($_POST['submit'])){
	 	 $sql_1="SELECT * FROM user WHERE username='".$_POST['reg_name'] ."'" ;
	 	 print_r($sql_1);
	     $query_1=mysqli_query($connection,$sql_1);
	     print_r($query_1);
	     $result=mysqli_fetch_assoc($query_1);
	     print_r($result);
	     if( $result && $result->username !== $_SESSION['uname']){
	     	echo "You cannot change the username since it is already asigned to another user. Please find new username";
	     	return;
	     } 

	 	 if(!$connection){
	     	echo "connection to db is failed";
	     	return;
	     }

	 	$update_sql="UPDATE `user` SET `username`='".$_POST['reg_name'] ."',`email`='$email' WHERE id=".$_POST['user_id'];
            print_r($update_sql);
     	$update_query=mysqli_query($connection,$update_sql);
     	 // print_r($update_query);
     	if($update_query){
     		echo "update done <a href='welcome.php'>click here</a>";
     	   } else {
     	  	echo "not update";
     	    }
    
}
	?>
</body>
</html>
