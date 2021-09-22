<?php
require_once 'connect.php';
//require_once 'session.php';
session_start();
function data($var)
{
	$var=stripslashes($var);
	$var=trim($var);
	$var=htmlentities($var);
	$var=htmlspecialchars($var);
	return $var;
}

if (isset($_POST['lbtn'])) {

$uname=data($_POST['email']);
$pw=data($_POST['Password']);

$sql="SELECT * FROM `registration`";
$runq=$connect->query($sql);
while ($result=$runq->fetch_assoc()) {
if ($result['email']===$uname && $result['password']===$pw) {
	$_SESSION['login']=$uname;
	header("location: index.php");
}else{
	echo "<script>
alert('invalid login credentials  please try again');
	</script>";
	echo "<script>
window.location.assign('login.php');
	</script>";
}	
}
}
if (isset($_POST['adm'])) {
	$uname=data($_POST['email']);
$pw=data($_POST['Password']);

$sql="SELECT * FROM `admin`";
$runq=$connect->query($sql);

while($result=$runq->fetch_assoc())
if ($result['email']===$uname && $result['password']===$pw) {
	$_SESSION['login']=$uname;
	header("location: dashboard.php");
		//echo $_SESSION['login'];
}else{
	echo "<script>
alert('invalid login credentials  please try again');
	</script>";
	echo "<script>
window.location.assign('admin.php');
	</script>";
}}

if (isset($_POST['farm'])) {
	$email=data($_POST['email']);
$date=data($_POST['date']);
$weight=data($_POST['weight']);


$sql="INSERT INTO `farm` (`farmid`,`date`,`weight`,`email`)
VALUES (NULL,'$date','$weight','$email')";
$runq=$connect->query($sql);


if ($runq) {
echo "<script>
alert('submitted successfully');
	</script>";
	echo "<script>
window.location.assign('dashboard.php');
	</script>";
}else{
echo "<script>
alert('invalid credentials');
</script>
";
}
}
$connect->close();
?>