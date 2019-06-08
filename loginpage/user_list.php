<?php
session_start();
?> 
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<body>
<?php
include 'connectdb.php';
$sql="SELECT * FROM user";
if( 1 !== (int) $_SESSION['id'] ){
	$sql="SELECT * FROM user where id=".$_SESSION['id'];
	}
    $query=mysqli_query($connection,$sql);
    echo "<table border=border>";
	echo "<tr><th>id</th><th>username</th><th>email</th><th>Profilepicture</th><th>edit</th></tr>";
	
	 while($result=mysqli_fetch_assoc($query)){

if($_POST['username']===$_SESSION['reg_name']){
	echo "<tr><td>".$result['id']."</td><td>".$result['username']."</td><td>".$result['email']."</td><td><img src='".$result['Profilepicture']."' ></td><td>
	<form action='user_update.php' method='post'>	
		<input type='submit' name='update_user' value='EDITprofile'>
		<input type='hidden' name='user' value='".$result['id']."'>
	</form>
	</td></tr>";
	}
	}
	
	echo "</table>";
	echo "<br><br>";
	?>

	<a href="logout.php">logout</a>


</body>
</html>