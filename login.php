<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Reg.css">
</head>
<body>
<?php require_once 'nav.html'; ?>
<center>
<div id="logform">
	<h2>LogIn To Request Loan</h2>
	<form action="log.php" method="POST">
		<table>
			<tr>
				<td>Username</td>
			</tr>
			<tr>
				<td><input type="email" name="email" required></td>
			</tr>
			<tr>
				<td>Password</td>
			</tr>
			<tr>
				<td><input type="Password" name="Password" required></td>
			</tr>
			<tr>
				<td><button id="sbtn" name="lbtn">Login</button></td>
			</tr>
		</table>
	</form>	
</div>
</center>

</body>
</html>