	<?php 
 include 'connectdb.php';
	if(isset($_POST['reg_name'])){
		$username = $_POST['reg_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
	    $confirmpassword = $_POST['confirmpassword'];
	if(! preg_match('/[_A-Za-z0-9]+/', $username)){
     	echo "username is not exist";
     }

     if(! preg_match('/[_a-z0-9A-Z]+@/', $email)){
     	echo "email is not valid";
     }
     if(empty($password)){
     	echo "password is not valid";
     }
     
    if($confirmpassword!=$password){
     	echo "confirmpassword is incorrect";
     }
      
	}

	if( isset( $_POST["uname"] ) ){
	$username=$_POST["uname"]; 
	$password=$_POST["password"]; 
    
	
	if(empty($username)){
    
	}
	if(empty($password)){
	 
	}
	}
?>
</body>
</html>