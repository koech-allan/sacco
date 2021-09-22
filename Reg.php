<!DOCTYPE html>
<html>
<head>
	<title>Members Registration</title>
	<link rel="stylesheet" type="text/css" href="Reg.css">
</head>
<body>
<?php require_once 'nav.html'; ?>
	<center>
<div id="regform">
	<h3>New Members Registration</h3>
	<form method="POST" action="insert.php">
	
			<table>
				<tr>
					<td>First Name</td>
					<td>Last Name</td>
				</tr>
				<tr>
					<td><input type="text" name="firstname" id="fname" placeholder="john"></td>
					<td><input type="text" name="lastname" id="lname" placeholder="magufuli"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>Email</td>
				</tr>
				<tr>
					<td><input type="text" name="gender" id="gender" placeholder="male,female or others"></td>
					<td><input type="text" name="email" id="email" placeholder="xyz@gmail.com"></td>
				</tr>
				<tr>
					<td>Date Of Birth</td>
					<td>Marital Status</td>
				</tr>
				<tr>
					<td><input type="date" name="date" id="date" ></td>
					<td><input type="text" name="status" id="status" placeholder="single or married "></td>
				</tr>
				<tr>
					<td>ID Number</td>
					<td>Phone Number</td>
				</tr>
				<tr>
					<td><input type="number" name="NID" id="NID" ></td>
					<td><input type="number" name="tel" id="tel" ></td>
				</tr>
				<tr>
					<td>Location</td>
					<td>password</td>
					
				</tr>
				<tr>
					<td><input type="text" name="loc" placeholder="Migori"></td>
					<td><input type="text" name="password" ></td>
				</tr>
				<tr>
					<td><button id="sbtn" name="sbtn">Submit</button></td>
			</table>

	

	</form>
</div>
	</center>
</body>
</html>