<?php
require('connectdb.php');
 include 'validation.php';	
session_start();
// print_r($_SERVER);
 if(isset($_POST['reg_name'])){

 	$username=stripslashes($_REQUEST['reg_name']);
 	$username = mysqli_real_escape_string($connection,$username);
 	$email=stripslashes($_REQUEST['email']);
 	$email = mysqli_real_escape_string($connection,$email);
 	$password=stripslashes($_REQUEST['password']);
 	$password = mysqli_real_escape_string($connection,$password);
 	$confirmpassword=stripslashes($_REQUEST['confirmpassword']);
    $confirmpassword = mysqli_real_escape_string($connection,$confirmpassword);
     $sql = "SELECT * FROM user WHERE username='".$username."'";
 	 $query = mysqli_query($connection,$sql);
	 $result=mysqli_fetch_assoc($query);
 	 if($result['username']===$username){
 	 	echo "User already exists, Please login <a href='login.php'>here</a>.";
 	 	return;
 	 	}	 


    $sql_insert = "INSERT INTO user(username, email, password) VALUES ('$username', '$email', '".md5($password)."')";
    $insert_query = mysqli_query($connection,$sql_insert);
    if($insert_query) {
		echo "inserted successful";
    }
	} else {
		echo "not inserted";
	}
	$sql="SELECT * FROM user WHERE username='$username' and email='".$email."'";
    $query=mysqli_query($connection,$sql);
	$result=mysqli_fetch_assoc($query);
	$rows=mysqli_num_rows($query);
    if($rows>=1) {
       $_SESSION['uname']=$result['username'];
       $_SESSION['id']=$result['id'];
       $_SESSION['password']=$result['password'];
	    header("Location:welcome.php");
	}
	 
	?>

<?php
 include 'connectdb.php';
   // include 'validation.php';
 if(isset($_POST['uname'])){
 	 $username = $_POST['uname'];
 	 $password = $_POST['password'];	
 	 $username=stripslashes($_REQUEST['uname']);
 	 $username = mysqli_real_escape_string($connection,$username);
 	 $password = stripslashes($_REQUEST['password']);
 	 $password = mysqli_real_escape_string($connection,$password);

	 	 $query = "SELECT * FROM user  WHERE username='$username'
and password='".md5($password)."'";
	 	 $result = mysqli_query($connection,$query);
	 	 $result1=mysqli_fetch_assoc($result);
	 	 $rows=mysqli_num_rows($result);
	 	 // print_r($rows);
	 	 if($rows>=1){

	 	 	 $_SESSION['id'] = $result1['id'];
	 	 	 $_SESSION['uname'] = $result1['username'];
	 	 	 $_SESSION['password'] = $result1['password'];
	 	 	 header("Location:welcome.php");
	 	 } else {
	 	 	echo 'invalid username/password'."<br>";
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
