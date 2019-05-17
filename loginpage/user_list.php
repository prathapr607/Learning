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
 // print_r($_SESSION['uname']);
include 'connectdb.php';
 $sql="SELECT * FROM user";
if( 'abcd123'!== $_SESSION['uname'] ) {
	$sql="SELECT * FROM user where username='".$_SESSION['uname']."'";
	  print_r($sql);
}	
$query=mysqli_query($connection,$sql);
 // print_r($query);
echo "<table border=border>";
echo "<tr><th>id</th><th>username</th><th>email</th><th>password</th></tr>";
while($result=mysqli_fetch_assoc($query)){
	if($_POST['username']===$_SESSION['reg_name']){
	echo "<tr><td>".$result['id']."</td><td>".$result['username']."</td><td>".$result['email']."</td><td>".$result['password']."</td><td>
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