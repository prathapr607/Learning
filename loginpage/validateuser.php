<?php
require('connectdb.php');
include 'validation.php';
session_start();
 print_r($_SESSION['uname']);
 if(isset($_POST['reg_name'])){
	// $username = $_POST['reg_name'];
	// $email = $_POST['email'];
	// $password = $_POST['password'];
 // 	$confirmpassword = $_POST['confirmpassword'];
 	$username=stripslashes($_REQUEST['reg_name']);
 	$username = mysqli_real_escape_string($connection,$username);
 	$email=stripslashes($_REQUEST['email']);
 	$email = mysqli_real_escape_string($connection,$email);
 	$password=stripslashes($_REQUEST['password']);
 	$password = mysqli_real_escape_string($connection,$password);
 	$confirmpassword=stripslashes($_REQUEST['confirmpassword']);
    $confirmpassword = mysqli_real_escape_string($connection,$confirmpassword);
     $sql = "SELECT * FROM user WHERE username='".$username."'";
        // print_r($sql);
 	 $query = mysqli_query($connection,$sql);	
 	  // print_r($query);
	 $result=mysqli_fetch_assoc($query);
	 // print_r($result);
 	 if($result['username']===$username){
 	 	echo "User already exists, Please login <a href='login.php'>here</a>.";
 	 	return;
 	 	}	 


    $sql_insert = "INSERT INTO user(username, email, password) VALUES ('$username', '$email', '".md5($password)."')";
    $insert_query = mysqli_query($connection,$sql_insert);
    print_r($insert_query);
    if($insert_query){
    	echo "inserted successful";
    } else {
    	echo "not inserted";
    }
 }
?>	
<!-- <a href="welcome.php">click here</a>
 -->

<?php
 include 'connectdb.php';
 include 'validation.php';
	  // session_start();
	 print_r($_SESSION['uname']); 
	 if(isset($_POST['uname'])){
	 	 $username = $_POST['uname'];
	 	 $password = $_POST['password'];	
	 	 $username=stripslashes($_REQUEST['uname']);
	 	 $username = mysqli_real_escape_string($connection,$username);
	 	 $password = stripslashes($_REQUEST['password']);
	 	 $password = mysqli_real_escape_string($connection,$password);

	 	 $query = "SELECT * FROM user  WHERE username='$username'
and password='".md5($password)."'";
	 	    print_r($query);
	 	 $result = mysqli_query($connection,$query);
	 	  print_r($result);
	 	 $result1=mysqli_fetch_assoc($result);

	 	  	 print_r($result1);
	 echo "<br><br>";
	 	 $rows=mysqli_num_rows($result);
	 	 // print_r($rows);
	 	 if($rows>=1){

	 	 	 $_SESSION['uname'] = $username;
	 	 	
	 	 	
        $_SESSION['success']="You are now logged in";
	 	 	 header("Location:welcome.php");
	 	 } else {
	 	 	echo 'username/password incorrect'."<br>";
	 	 	?>
	 	 	<!DOCTYPE html>
	 	 	<html>
	 	 	<head>
	 	 		<title></title>
	 	 	</head>
	 	 	<body>
	 	 		<a href="login.php">login</a>
	 	 		<?php
	 	 	 	 }
	 	}

?>	 
	 	 	</body>
	 	 	</html>	
