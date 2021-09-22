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
<div id="logform">
	<h3>Farm Details</h3>
	<form method="POST" action="log.php">
		<table>
			<tr>
				<td>Email</td>
			</tr>
			<tr>
				<td><input type="Email" name="email" id="email" required></td>
			</tr>
						<tr>
				<td>Weigth</td>
			</tr>
			<tr>
				<td><input type="number" name="weight" id="weight" required></td>
			</tr>
						<tr>
				<td>Date</td>
			</tr>
			<tr>
				<td><input type="date" name="date" id="date" required></td>
			</tr>
			<tr>
				<td><button name="farm">Submit</button></td>
			</tr>
		</table>
	</form>
</div>
<br>
</center>
<center>
<div id="lt">
	<table id="ltu">
		<thead id="ltu">
			<th id="ltu">Full Name</th>
			<th id="ltu">Email</th>
			<th id="ltu">Weight</th>
			<th id="ltu">Loan Amount</th>
			<th id="ltu">Approve</th>
			<th id="ltu">Disapprove</th>
		</thead>
		<tbody id="ltu">
			<?php
			$sql="SELECT * FROM `loan` INNER JOIN `farm` ON `loan`.`email`=`farm`.`email` WHERE `loan status`='pending'";
			$runq1=$connect->query($sql);
			while($result=$runq1->fetch_assoc()){
		
			?>
			<tr id="ltu">
				<td id="ltu"><?php echo($result['firstname']." ".$result['lastname']); ?></td>
				<td id="ltu"><?php  echo($result['email']); ?></td>
				<td id="ltu"><?php  echo($result['weight']); ?></td>
				<td id="ltu"><?php  echo($result['amount']); ?></td>
				<td id="ltu"><a id="anchor" href="approve.php?email=<?php  echo($result['email']); ?>"><button id="lbtn">Approve</button></a></td>
				<td id="ltu"><a id="anchor" href="disapprove.php?email=<?php  echo($result['email']); ?>"><button id="lbtn">Disapprove</button></a></td>
			</tr>

			<?php

}$connect->close(); 

			?>

		</tbody>
	</table>
</div>
</center>
</body>
</html>