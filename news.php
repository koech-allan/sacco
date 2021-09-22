<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Reg.css">
</head>
<body>
<?php  require_once 'nav.html';  ?>
<div style="display: flex;justify-content:space-between;">
<?php

require_once 'connect.php';
$query="SELECT * FROM `news` ORDER BY `date` DESC";
$runq=$connect->query($query);
while ($results=$runq->fetch_assoc()){
?>

<div style="background-color: rgba(0,0,0,0.5);color:white; width:300px;font-size:medium;">
	<?php echo $results['date']." : ".$results['news']; ?>
</div>
<?php } ?>
</div>
<?php $connect->close(); ?>
</body>
</html>