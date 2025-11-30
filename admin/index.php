<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>   GNI Aviation .</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Pe-icon-7-stroke -->
        <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <body>
        <!-- Content Wrapper -->
         <div class="bgcimgloginimg" style="background-image:url('assets/dist/img/loginbg.jpg');">
        <div class="login-wrapper">
            <!-- <div class="back-link">
                <a href="index.html" class="btn btn-add">Back to Dashboard</a>
            </div> -->
            <div class="container-center">
            <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your user & password to login.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="email" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" class="form-control">
                                <!-- <span class="help-block small">Your unique username to app</span> -->
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" class="form-control">
                                <!-- <span class="help-block small">Your strong password</span> -->
                            </div>
                            <div>
                                <button class="btn btn-add" type="submit"  name="login">Login</button>
                                
                   
                            </div>
                        </form>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        </div>

<?php
if(isset($_POST['login']))
{
    // Sanitize user input to prevent SQL injection
    $admin_email_id = mysqli_real_escape_string($link, $_POST['username']);
    $admin_pass_input = $_POST['password'];

    // First, find user by username only
    $sqllog = "SELECT * FROM admin_login WHERE username='$admin_email_id'";
    $datalog = mysqli_query($link, $sqllog);

    if(mysqli_num_rows($datalog) > 0) {
        $reslt = mysqli_fetch_assoc($datalog);
        $stored_password = $reslt['admin_password'];

        // Support both: new password_hash format and legacy MD5 format
        $password_valid = false;
        if(password_verify($admin_pass_input, $stored_password)) {
            $password_valid = true;
        } elseif(md5($admin_pass_input) === $stored_password) {
            // Legacy MD5 support - consider upgrading password in database
            $password_valid = true;
        }

        if($password_valid) {
            session_start();
            $_SESSION['user_id'] = $reslt['id'];
            $_SESSION['user_name'] = $reslt['username'];
            echo "<script>window.location.href='dashboard.php';</script>";
        } else {
            echo "<script>alert('Please enter a valid email & Password!');window.location.href='';</script>";
        }
    } else {
        echo "<script>alert('Please enter a valid email & Password!');window.location.href='';</script>";
    }
}
?>





        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
    </body>
</html>
