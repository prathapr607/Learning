<!DOCTYPE html>
<html>
<head>
	<title>Registration Form php with mysql</title>
</head>
<body>
	<h2>Registration</h2>
	<?php
	include 'config.php';
	$user_name = '';
	$email= '';
	$password='';
	$type= 'submit';
	if( isset( $_GET['user'] ) && is_numeric( $_GET['user'] ) ){
		$sql_edit = "SELECT * FROM user WHERE id=" . $_GET['user'];
		$query = mysqli_query($connection, $sql_edit);
		$get_data=mysqli_fetch_array($query);	
		if ( ! $get_data ) {
			echo "user not exist";
			// die;
			} else{
				$user_name=$get_data['username'];
				 $email = $get_data['email'];
				 $password = $get_data['password'];
			}
			$type = "update";
			
	}
	?>

	<?php

	$success = filter_input( INPUT_GET, 'success' );

	if($success){
		echo 'User updated.';
	}
	?>

	<form method="post" action="index.php">	
    USERNAME:<input type="text" name="reg_user" value="<?php echo $user_name; ?>" <?php if($user_name){echo 'disabled';}?>><br><br>
    EMAIL:<input type="email" name="email" value="<?php echo $email; ?>"><br><br>
    PASSWORD:<input type="password" name="password" value="" required><br><br>
    CONFIRMPASSWORD:<input type="password" name="confirmpassword" required
    ><br>
    <?php if(isset($_GET['user'])){?>
    <input type="hidden" id="custid" name="custid" value="<?php echo $_GET['user']; ?>">
<?php } ?>
    <input type="submit" name="register" value="<?php echo $type; ?>">
   <p>Already a user?<a href="loginform.php">loginform</a></p>
</body>
</html>