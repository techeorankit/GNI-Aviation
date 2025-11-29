<?php 
include ('connection.php');
$del = $_GET['del'];
$deletenotifit = "DELETE FROM `notification` WHERE `id`='$del'";
if(mysqli_query($link,$deletenotifit))
{
    echo "<script>alert('Delete Successfully..!!');window.location.href='notification-list.php'</script>";
}else
{
    echo "<script>alert('Try Again..!!');window.location.href='notification-list.php'</script>";
}

?>