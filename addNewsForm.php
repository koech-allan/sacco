<?php
session_start();
require_once 'connect.php';
//require_once 'session.php';
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
			<li><a id="anchor" href="dashboard.php">Home</a></li>
            <li><a id="anchor" href="addNewsForm.php">Add News</a></li>
            <li><a id="anchor" href="addmsgForm.php">Send message</a></li>
			<li><a id="anchor" href="logout.php">Logout</a></li>
		</ul>
	</div>
    <center>
<div style="width: 400px; background-color:aquamarine;">
<form action="comm.php" method="POST">
    <label for="">News</label><br>
    <textarea name="msg" id="msg" cols="50" rows="10" placeholder="Write your news here"></textarea>
    <br>
    <button name="news">Send</button>
</form>
</div>
</center>
</body>
</html>