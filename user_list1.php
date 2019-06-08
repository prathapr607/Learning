<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
    error_reporting(1);
$connection = mysqli_connect("localhost","root","","userlogin");
if( !$connection){
	echo 'connection not established';
}  
$id = $_GET['id'];
 $sql="SELECT * FROM user WHERE  id = '.$id.'";
 $result = mysqli_query($connection,$sql);
 print_r($result);
 $arrayres = mysqli_fetch_assoc($result);
 print_r( $arrayres);

// echo "<table>
// <tr>
// <th>id</th>
// <th>username</th>
// <th>email</th>
// <th>password</th>
// <th>Profilepicture</th>
// </tr>";
// while($row = mysqli_fetch_assoc($result)) {
//     echo "<tr>";
//     echo "<td>"  .$result['id'].  "</td>";
//     echo "<td>"  .$result['username'].  "</td>";
//     echo "<td>" .$result['email']. "</td>";
//     echo "<td>" .$result['password']. "</td>";
//     echo "<td>" .$result['Profilepicture']. "</td>";
    
//     echo "</tr>";
// }
// echo "</table>";
// // mysqli_close($connection);
?>
</body>
</html>

