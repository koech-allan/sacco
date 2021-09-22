<?php
require_once 'connect.php';
$status="disapproved";
$email=$_GET['email'];
$sql="UPDATE `loan` SET `loan status`='$status' WHERE `email`='$email'";
$runq=$connect->query($sql);
if ($runq) {
		echo "<script>
alert('loan not approved');
	</script>";
	echo "<script>
window.location.assign('dashboard.php');
	</script>";
}
$connect->close();
?>