<?php
$server='localhost';
$username='root';
$password='';
$database='silibwet';


$connect=mysqli_connect($server,$username,$password,$database);
if (!$connect) {

	echo "not connected";
	# code...
}




?>

