<?php
require_once 'connect.php';
$status="approved";
$email=$_GET['email'];
$sql="UPDATE `loan` SET `loan status`='$status' WHERE `email`='$email'";
$runq=$connect->query($sql);
if ($runq) {
		echo "<script>
alert('loan approved');
	</script>";
	echo "<script>
window.location.assign('dashboard.php');
	</script>";
}
$connect->close();
?>