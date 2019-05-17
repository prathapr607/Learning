<?php
error_reporting(1);
$connection = mysqli_connect("localhost","root","","userlogin");
if( !$connection){
	echo 'connection not established';
}
?>