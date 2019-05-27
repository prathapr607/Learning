<?php
session_start();
 // print_r($_SERVER);
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<p>welcome <?php echo $_SESSION['uname']; ?>! </p>
<body>

<?php
$route = 'user_update.php';
if(1 === (int) $_SESSION[ 'id' ]){
	$route = 'user_list.php';
} else {
	$route = 'user_list.php';
}
?>
<a href="<?php echo $route; ?>">Edit profile<?php echo "<br><br>"; ?>
<a href="login.php">logout	
	<?php
	echo "<br><br>";
?>

</body>
</html>

