<?php
session_start();
print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<p>welcome <?php echo $_SESSION['uname']; ?>! </p>
<body>

<a href="user_update.php">Edit profile<?php echo "<br><br>"; ?>
<a href="login.php">logout	
	<?php
	echo "<br><br>";
	if($_SESSION['uname']==='abcd123'){
       echo "admin login successful <a href='user_list.php'>click to see userlist</a>";
       sleep(3);
       	header("Location:user_list.php");
    }
       // } else {
       // 	header("Location:user_update.php");
       // }
?>

</body>
</html>

