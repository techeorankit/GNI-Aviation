<?php 
include ('connection.php');
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



<?php
   // Removed extract($_POST) as it's a security risk
   if(isset($_POST['Active']))
   {
     // Sanitize user input to prevent SQL injection
     $id = intval($_POST['id']);
     $status = mysqli_real_escape_string($link, $_POST['Active']);
     if(mysqli_query($link,"UPDATE register SET status='$status' WHERE id='$id'"))
     {
       echo "<script>alert('This Account Deactivated... !!');window.location.href=''</script>";
     }
   }
   if(isset($_POST['InActive']))
   {
     // Sanitize user input to prevent SQL injection
     $id = intval($_POST['id']);
     $status = mysqli_real_escape_string($link, $_POST['InActive']);
     if(mysqli_query($link,"UPDATE register SET status='$status' WHERE id='$id'"))
     {
       echo "<script>alert('This Account Activated... !!');window.location.href=''</script>";
     }
   }
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
                  <h1>User </h1>
                  <small>User list</small>
               </div>
            </section>
            <!-- Main content -->
             


            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4> User </h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                          
                           <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>S.No.</th>
                                       <th>Registration Number</th>
                                       <th>First Name</th>
                                       <th>Last Name</th>
                                       <th>Email</th>
                                       <th>Phone</th>
                                       <th>Date Of Birth</th>
                                       <th>Language</th>
                                       <th>Apply For</th>
                                       <th>Password</th>
                                       <th>Status</th>
                                       <th>Admit Card</th>
                                       <th>Date</th>
                                 
                                    </tr>
                                 </thead>
                                 <tbody>

                                 <?php 
                                 $sn=0;
                                 $slectuser = "SELECT * FROM `register`";
                                 $queryuser = mysqli_query($link,$slectuser);
                                 while($showuser = mysqli_fetch_assoc($queryuser))
                                 {
                                    $sn++;
                                 ?>
                                 <tr>
                                       <td><?= $sn;?></td>
                                       <td><?=$showuser['registration_number'];?></td>
                                        <td><?=$showuser['first_name'];?></td>
                                        <td><?=$showuser['last_name'];?></td>
                                        <td><?=$showuser['email'];?></td>
                                        <td><?=$showuser['phone'];?></td>
                                        <td><?= date("d F, Y", strtotime($showuser['dob'])); ?></td>
                                        <td><?=$showuser['language'];?></td>
                                        <td><?=$showuser['apply_for'];?></td>
                                        <td><?=$showuser['password'];?></td>
                                        <td>
                                            <?php if($showuser['status']=="Active"){ ?>
                                                <form method="POST">
                                                    <input type="hidden" name="id" value="<?=$showuser['id'];?>">
                                                    <button type="submit" value="InActive" name="Active" class="label-custom label label-default">Active</button>
                                                </form>
                                                <?php } else { ?>
                                                    <form method="POST">
                                                        <input type="hidden" name="id" value="<?=$showuser['id'];?>">
                                                        <button type="submit" value="Active" name="InActive" class="label-danger label label-default">DeActive</button>
                                                    </form>
                                                <?php } ?>
                                            </td>
                                            <td><a href="admit-card.php?uid=<?=$showuser['id'];?>"  class="label-success label label-default">Add Exam Sachdule </a></td>
                                            <td><?= date('d-M-y', strtotime($showuser['date']))?></td>
                                        </tr>
                                    <?php } ?>





                                    
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- add new job Modal1 -->
            
               <!-- /.modal -->
               <!-- Modal --> 
                



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
