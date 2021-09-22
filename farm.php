<?php
require_once 'connect.php';
require_once 'session.php';

function data($var)
{
	$var=stripslashes($var);
	$var=trim($var);
	$var=htmlentities($var);
	$var=htmlspecialchars($var);
	return $var;
}

$email=data($_POST['email']);
$weight=data($_POST['weight']);
$date=data($_POST['date']);

$sql="INSERT INTO `farm` (id,date,weight,email) VALUES (NULL,'$date','$weight','$email')";
$runq=$connect->query($sql);
if ($runq) {
	echo "<script>
alert('submited successful');
	</script>";
	echo "<script>
window.location.assign('dashboard.php');
	</script>";
}}else{
	echo "<script>
alert('invalid credentials  please try again');
	</script>";
	echo "<script>
window.location.assign('dashboard.php');
	</script>";
}
$connect->close();
?>