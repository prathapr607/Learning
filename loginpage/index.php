<?php

include 'config.php';
if( isset( $_POST["submit"] ) ){
	$username=$_POST["name"]; 
	$password=$_POST["password"]; 

	$datavalid='true';
	if(empty($username)){
		$datavalid='false';
		echo "username is not valid";
	}
	if(empty($password)){
		$datavalid='false';
		echo "invalid password";
	}

	$sql_select="SELECT * FROM user WHERE username='".$_POST['name']."'";
	$sql_query=mysqli_query($connection,$sql_select);
	$result=mysqli_fetch_array($sql_query);
	
	if($_POST["password"] === $result["password"]){
		echo "user does exist";
	} else {
		header("Location:loginform.php");
	}
}
	

if( isset( $_POST["register"] ) && 'submit' === $_POST['register'] ){
	$username=$_POST["reg_user"];	
	$email=$_POST["email"];
	$password=$_POST["password"];
	$confirmpassword=$_POST["confirmpassword"];
     
     if(empty($username)){
     	echo "username is not exist";
     }

     if(! preg_match('/[_a-z0-9A-Z]+@/', $email)){
     	echo "email is not valid";
     }
     if(empty($password)){
     	echo "password is not valid";
     }
     if($confirmpassword!==$password){
     	echo "confirmpassword is incorrect";
     }
      
     if(!$connection){
     	echo "connection to db is failed";
     	return;
     }
     $sql="SELECT * FROM user WHERE username='".$_POST['reg_user']."'";
	$query=mysqli_query($connection,$sql);
     $user_exists = mysqli_fetch_array($query);
     // print_r($user_exists);die;
     if( $user_exists ){
     	echo 'User already exists';
     	return;
     }


     $insert_query="INSERT INTO user(username, email, password) VALUES('$username', '$email', '$password')";
     $query=mysqli_query($connection,$insert_query);
     // print_r($query);
     if($query){
     	echo "inserted";

     }
     else {
     	echo "not inserted"; 
     }
}

if( isset( $_POST["register"] ) && 'update' === $_POST['register'] ){
	//$username=$_POST["reg_user"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$confirmpassword=$_POST["confirmpassword"];
     
     //if(empty($username)){
     //	echo "username is not exist";
     //}
     $sql_1="SELECT * FROM user WHERE id=".$_POST['custid'];
     $query_1=mysqli_query($connection,$sql_1);
     if( $query_1->username !== $_POST["reg_user"] ){
     	echo "Cannot update User";
     	return;
     } 

     if(! preg_match('/[_a-z0-9A-Z]+@/', $email)){
     	echo "email is not valid";
     }
     if(empty($password)){
     	echo "password is not valid";
     }
     if($confirmpassword!==$password){
     	echo "confirmpassword is incorrect";
     }		
      
     if(!$connection){
     	echo "connection to db is failed";
     	return;
     }

     	$update_sql="UPDATE `user` SET `email`='$email',`password`='$password' WHERE id=".$_POST['custid'];
     	$update_query=mysqli_query($connection,$update_sql);
     	// print_r($update_query);
     	// die;
     	if($update_query){
     		echo "update done";
     		header("Location:alluser.php?success=1");
     		
     	  } else{
     	  	echo "not update";
     	  	
     	  }
}















// echo "<table border=border>";
//  echo "<tr><th>id</th><th>username</th><th>password</th></tr>";
// while($result=mysqli_fetch_array($sql_query)){
// if($username===$_POST['name']){
// 	// echo "here";
// echo "<tr><td>" . $result['id'] . "</td><td>" . $result['username'] . "</td><td>" . $result['password'] . "</td></tr>";

// }

// }

//  $sql="SELECT * FROM user";
//  $result=mysqli_query($connection,$sql);
//  	// print_r($result);
//  echo "<table border=border>";
//  echo "<tr><th>id</th><th>username</th><th>password</th></tr>";
//  while($data=mysqli_fetch_array($result)) {
// // 	if(isset($_POST['name']) && $_POST['name'] === $data['username'] && isset($_POST['password']) && $_POST['password'] === $password){
//  		echo "<tr><td>" . $data['id'] . "</td><td>" . $data['username'] . "</td><td>" . $data['password'] . "</td></tr>";
 		 
//  //}
// }
// echo "</table>";
 
