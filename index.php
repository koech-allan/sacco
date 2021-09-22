<?php
session_start();
//require_once 'session.php';
require_once 'connect.php';
if (isset($_SESSION['login'])) {

}else{
	header("location: Home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Reg.css">
</head>
<body>
	<div id="flexBox">
		<h2 style="color: yellow;text-align: center;">Silibwet Tea Growers Sacco Management System</h2>
		<ul id="navbar">
			<li><a id="anchor" href="Home.php">Home</a></li>
			<li><a id="anchor" href="logout.php">Logout</a></li>
		</ul>
	</div>
<div style="text-align: center; color: yellow;">
	<h2>Welcome Back Member</h2>
	<button id="sbtn" onclick="applyLoan();">Apply Loan</button>
</div>

<div id="apply">
	<?php require 'loan.html'; ?>
</div>

<center>
<div id="logform">
	<h3>Loan Status</h3>
	<?php
	$sql0="SELECT * FROM `loan` WHERE `email`='$_SESSION[login]'";
	$runq0=$connect->query($sql0);
	while(	$result0=$runq0->fetch_assoc()){
	?>
<p><?php print_r($result0['loan status']); ?>
</p>
<?php } ?>
</div>
</center>

<center>
<div id="logform">
	<h3>Messsages From Sacco</h3>
	<?php
	$sql="SELECT * FROM `alert`";
	$runq=$connect->query($sql);
	while(	$result=$runq->fetch_assoc()){
		
	?>
<p><?php print_r($result['message']); ?>
</p>
<?php }$connect->close(); ?>
</div>
</center>

<script >
	function applyLoan() {
		let btn=document.getElementById('apply');
		btn.style.display="block";
	}
</script>
</body>
</html>