<?php
session_start();
include ('connection.php');

// Check if user is logged in
$userid = $_SESSION['user_id'] ?? 0;
if($userid == 0) {
    echo "<script>window.location.href='index.php'</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>  GNI Aviation  </title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
      <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start page Label Plugins 
         =====================================================================-->
      <!-- Emojionearea -->
      <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
      <!-- Monthly css -->
      <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
      <!-- End page Label Plugins 
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>
   <body class="hold-transition sidebar-mini">
      <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
       <?php 
       include ('include/header.php');
       ?>
         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
       <?php 
       include ('include/side-menu.php');
       ?>







         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-briefcase"></i>
               </div>
               <div class="header-title">
                  <h1>Admit Card </h1>
                  <small>Admit Card </small>
               </div>
            </section>
            <!-- Main content -->
             
<?php
// Sanitize user input to prevent SQL injection
$uid = isset($_GET['uid']) ? intval($_GET['uid']) : 0;
$slectdataexam = "SELECT * FROM `register` WHERE `id`='$uid'";
$querydataexam = mysqli_query($link,$slectdataexam);
$showdataexam = mysqli_fetch_assoc($querydataexam);

if(!$showdataexam) {
    echo "<script>alert('Invalid User..!!');window.location.href='user-list.php'</script>";
    exit;
}
?>




            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4> Admit Card </h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                            <a href="user-list.php"  class="btn btn-add btn-sm">Back  </a>
                           <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <form class="form-horizontal" method="POST" enctype="multipart/form-data"> 
                                    <fieldset>
                                       <!-- Text input-->
                                     
                                       <div class="col-md-12 form-group">
                                          <label class="control-label">EXAM LOCATION</label>
                                          <input type="text" name="exam_location" value="<?= htmlspecialchars($showdataexam['exam_location']);?>"  placeholder="Enter Exam Location" class="form-control">
                                          <input type="hidden" name="uid" value="<?= intval($uid);?>">
                                       </div>

                                       <div class="col-md-12 form-group">
                                          <label class="control-label">DATE OF EXAM</label>
                                          <input type="date" name="doe" value="<?= htmlspecialchars($showdataexam['doe']);?>" placeholder="Enter Date Of Exam" class="form-control">
                                       </div>

                                        <div class="col-md-12 form-group">
                                          <label class="control-label">EXAM TIMING</label>
                                          <input type="time" name="exam_time" value="<?= htmlspecialchars($showdataexam['exam_time']);?>"  placeholder="Enter Exam Timing" class="form-control">
                                       </div>


                                        <div class="col-md-12 form-group">
                                          <label class="control-label">EXAM Venue</label>
                                          <input type="text" name="exam_venue" value="<?= htmlspecialchars($showdataexam['exam_venue']);?>" placeholder="Enter Exam Venue" class="form-control">
                                       </div>
                                      
                                       <!-- Text input-->
                                       
                                   
                                       <div class="col-md-12 form-group user-form-group " style="margin-top:10px !important;">
                                          <div class="pull-left">
                                     
                                             <button type="submit" name="updateadmit" class="btn btn-add btn-sm">Update  </button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- add new job Modal1 -->
            
               <!-- /.modal -->
               <!-- Modal --> 
<?php
if(isset($_POST['updateadmit']))
{
    // Sanitize all user inputs to prevent SQL injection
    $uid = intval($_POST['uid']);
    $exam_location = mysqli_real_escape_string($link, $_POST['exam_location']);
    $doe = mysqli_real_escape_string($link, $_POST['doe']);
    $exam_time = mysqli_real_escape_string($link, $_POST['exam_time']);
    $exam_venue = mysqli_real_escape_string($link, $_POST['exam_venue']);

    $updatexam = "UPDATE `register` SET `exam_location`='$exam_location',`doe`='$doe',`exam_time`='$exam_time',`exam_venue`='$exam_venue' WHERE `id`='$uid'";
    if(mysqli_query($link,$updatexam))
    {
        echo "<script>alert('Admit Card Updated Successfully..!!');window.location.href=''</script>";
    }else
    {
        echo "<script>alert('Try Again...!!');window.location.href=''</script>";
    }
}
?>




                



               <!-- update Modal1 -->
             
               <!-- /.modal -->
               <!-- Modal -->    
               <!-- delete Modal2 -->
               
               <!-- /.modal -->
            </section>


<!-- end update date section --->













          
            <!-- /.content -->
         </div>
      <?php 
      include ('include/footer.php');
      ?>
