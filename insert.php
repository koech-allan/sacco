<?php
require_once('connect.php');
if (isset($_POST['sbtn'])) {

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$date=$_POST['date'];
$status=$_POST['status'];
$NID=$_POST['NID'];
$tel=$_POST['tel'];
$loc=$_POST['loc'];	
$password=$_POST['password'];
//echo $firstname.$lastname.$email;

$insert="INSERT INTO registration(firstname,lastname,gender,email,date,status,NID,tel,loc,password)
VALUES('$firstname','$lastname','$gender','$email',$date,'$status',$NID,$tel,'$loc','$password')";

if (mysqli_query($connect,$insert)) {
	echo "<script> 
alert('saved credentials');
	</script>";
	echo "<script>
window.location.assign('./Reg.php');
	</script>";
}

else{
	echo "<script> 
alert('invalid credentials please try again');
	</script>";
	echo "<script>
window.location.assign('./Reg.php');
	</script>";
}

mysqli_close($connect);



}











?>