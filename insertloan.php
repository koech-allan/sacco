<?php
require_once('connect.php');
if (isset($_POST['submit'])) {

$firstname   =$_POST['firstname'];
$lastname    =$_POST['lastname'];
$gender     =$_POST['gender'];
$email      =$_POST['email'];
$date       =$_POST['date'];
$status     =$_POST['status'];
$NID        =$_POST['NID'];
$tel       =$_POST['tel'];
$loc       =$_POST['loc'];	
$amount    =$_POST['amount'];
$period    =$_POST['period'];
$security  =$_POST['security'];

$insert="INSERT INTO loan(firstname,lastname,gender,email,date,status,NID,tel,loc,amount,period,security,`loan status`)
VALUES('$firstname','$lastname','$gender','$email',$date,'$status',$NID,$tel,'$loc','$amount','$period','$security','pending')";





if (mysqli_query($connect,$insert)) {
		echo "<script>
alert('loan applied successfull please wait for approval');
	</script>";
	echo "<script>
window.location.assign('index.php');
	</script>";

	
}

else{
	echo "failed";
}

mysqli_close($connect);




}













?>