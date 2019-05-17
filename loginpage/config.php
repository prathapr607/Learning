<?php
error_reporting(1);//does not print the noticing errors
$connection = mysqli_connect("localhost","root","","userlogin");
if( !$connection){
	echo 'connection not established';
}
?>