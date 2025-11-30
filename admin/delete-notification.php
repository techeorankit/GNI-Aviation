<?php
session_start();
include ('connection.php');

// Check if user is logged in
$userid = $_SESSION['user_id'] ?? 0;
if($userid == 0) {
    echo "<script>window.location.href='index.php'</script>";
    exit;
}

// Sanitize user input to prevent SQL injection
$del = isset($_GET['del']) ? intval($_GET['del']) : 0;

if($del > 0) {
    $deletenotifit = "DELETE FROM `notification` WHERE `id`='$del'";
    if(mysqli_query($link,$deletenotifit))
    {
        echo "<script>alert('Delete Successfully..!!');window.location.href='notification-list.php'</script>";
    }else
    {
        echo "<script>alert('Try Again..!!');window.location.href='notification-list.php'</script>";
    }
} else {
    echo "<script>alert('Invalid Request..!!');window.location.href='notification-list.php'</script>";
}
?>