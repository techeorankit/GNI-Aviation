<?php 
include ('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> GNI Aviation. </title>
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
       header("Content-Type: text/html; charset=utf-8");
mysqli_set_charset($link, "utf8mb4");
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
                  <h1>Add Notification</h1>
                  <small>Notification list</small>
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
                                 <h4>Notification</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport"> 
                                 <a href="#" class="btn btn-add" data-toggle="modal" data-target="#addjob"><i class="fa fa-plus"></i> Add Notification</a>  
                              </div>
                              
                           </div>
                           <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>S.No.</th>
                                    
                                       <th>Notification</th>
                               
                                       <th>Date</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                    $sn=0;
                                    $slectnotifications = "SELECT * FROM `notification`";
                                    $querynotifications = mysqli_query($link,$slectnotifications);
                                    while($shownotifications = mysqli_fetch_assoc($querynotifications))
                                    {
                                        $sn++;
                                    ?>
                                 <tr>
                                    <td><?= $sn;?></td>
                                    <td><?= $shownotifications['notification_cont'];?></td>
                                   
                                    <td><?= date("d-m-Y", strtotime($shownotifications['date'])); ?> </td>
                                    <td>
                                          <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update<?= $shownotifications['id'];?>"><i class="fa fa-pencil"></i></button>



<!-- start update section --->
<div class="modal fade" id="update<?= $shownotifications['id'];?>" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">

                      <?php 
                      $hlid = $shownotifications['id'];
                      $slectunoticfit = "SELECT * FROM `notification` WHERE `id`='$hlid'";
                      $queryunotifit= mysqli_query($link,$slectunoticfit);
                      $shownotific = mysqli_fetch_assoc($queryunotifit);
                      ?>

                     




                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-users m-r-5"></i> Update Notification</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                              <form class="form-horizontal" method="POST" enctype="multipart/form-data"> 
                                    <fieldset>
                                       <!-- Text input-->
                                     
                                       <div class="col-md-12 form-group">
                                          
                                          <label class="control-label">Notification</label>
                                          <input type="text" name="noticefication_cont"  value="<?= $shownotific['notification_cont'];?>" class="form-control">
                                          <input type="hidden"  name="nuid"  value="<?= $shownotific['id'];?>" class="form-control">
                                       </div>

                                  
                                     
                                       <!-- Text input-->
                                       
                                   
                                       <div class="col-md-12 form-group user-form-group " style="margin-top:10px !important;">
                                          <div class="pull-left">
                                     
                                             <button type="submit" name="notificationupdate" class="btn btn-add btn-sm">Update</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div> -->
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
 <!-- end update section --->






 <a href="delete-notification.php?del=<?=$shownotifications['id'];?>" class="btn btn-danger btn-xs" ><i class="fa fa-trash-o"></i> </a>
                                         
                                       </td>
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
               <div class="modal fade" id="addjob" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-plus m-r-5"></i> Add Notification</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" method="POST" enctype="multipart/form-data"> 
                                    <fieldset>
                                       <!-- Text input-->
                                     
                                       <div class="col-md-12 form-group">
                                          <label class="control-label">Notification</label>
                                          <input type="text" name="notification_cont" placeholder="Enter Notification" class="form-control">
                                       </div>


                                      
                                      
                                       <!-- Text input-->
                                       
                                   
                                       <div class="col-md-12 form-group user-form-group " style="margin-top:10px !important;">
                                          <div class="pull-left">
                                     
                                             <button type="submit" name="addnotifications" class="btn btn-add btn-sm">Add  </button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
               <!-- Modal --> 
                



               <!-- update Modal1 -->
             
               <!-- /.modal -->
               <!-- Modal -->    
               <!-- delete Modal2 -->
               
               <!-- /.modal -->
            </section>


<!-- start addd data seciton -->


 <!-- end add data section --->

 <!-- start update data section --->
  <?php
  if(isset($_POST['addnotifications']))
  {
    // Sanitize user input to prevent SQL injection
    $notification_cont = mysqli_real_escape_string($link, $_POST['notification_cont']);
    $updatenotification = "INSERT INTO `notification`(`notification_cont`) VALUES ('$notification_cont')";
    if(mysqli_query($link,$updatenotification))
    {
        echo "<script>alert('Data Add Successfully..!!');window.location.href=''</script>";
    }else
    {
        echo "<script>alert('Try Again...!!');window.location.href=''</script>";
    }

  }
  ?>
<!-- end update data section --->

<?php
if(isset($_POST['notificationupdate']))
{
    // Sanitize user inputs to prevent SQL injection
    $nuid  = intval($_POST['nuid']);
    $noticefication_cont = mysqli_real_escape_string($link, $_POST['noticefication_cont']);
    $updatesnotic = "UPDATE `notification` SET `notification_cont`='$noticefication_cont' WHERE `id`='$nuid'";
    if(mysqli_query($link,$updatesnotic))
    {
        echo "<script>alert('Update Successfully...!!');window.location.href=''</script>";
    }else
    {
        echo "<script>alert('Try Again..!!');window.location.href=''</script>";
    }

}
?>










          
            <!-- /.content -->
         </div>
      <?php 
      include ('include/footer.php');
      ?>



