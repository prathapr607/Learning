<?php
include 'config.php';

	$success = filter_input( INPUT_GET, 'success' );

	if($success){
		echo 'User updated.';
	}
	

 $sql_all="SELECT * FROM user";
 $query_all=mysqli_query($connection,$sql_all);
echo "<table>";
echo "<tr><th>id</th><th>username</th><th>email</th><th>password</th><th>Action</th></tr>";
while($data=mysqli_fetch_assoc($query_all)){
	echo "<tr><td>" . $data['id'] ."</td><td>" . $data['username'] ."</td><td>" . $data['email'] ."</td><td>" . $data['password'] ."</td><td><a href='register.php?user=".$data['id']."'>Edit</a></td></tr>";

}
echo "</table>";

?>
