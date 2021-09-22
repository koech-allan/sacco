<?php
require_once('connect.php');
$msg=mysqli_real_escape_string($connect,$_POST['msg']);
$date=date('Y m d');
if (isset($_POST['message'])) {
    $sql="INSERT INTO `alert` (`message`,`date`) VALUES('$msg','$date')";
    $runq=$connect->query($sql);
    if ($runq) {
        echo "<script> 
    alert('message sent');
        </script>";
        echo "<script>
    window.location.assign('./addmsgForm.php');
        </script>";
    }
    
    else{
        echo "<script> 
    alert('invalid credentials please try again');
        </script>";
        echo "<script>
        window.location.assign('./addmsgForm.php');
        </script>";
    }
}if (isset($_POST['news'])) {
    $sql="INSERT INTO `news` (`news`,`date`) VALUES('$msg','$date')";
    $runq=$connect->query($sql);
    if ($runq) {
        echo "<script> 
    alert('message sent');
        </script>";
        echo "<script>
        window.location.assign('./addNewsForm.php');
        </script>";
    }
    
    else{
        echo "<script> 
    alert('invalid credentials please try again');
        </script>";
        echo "<script>
        window.location.assign('./addNewsForm.php');
        </script>";
    }
}



?>
