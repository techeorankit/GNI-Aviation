<?php 
include('include/header.php');
?>
<!-- start  bread crumb section --->
 <section class="bgcbread">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="brsdss">
                    <li><a href="#">Home</a></li>
                    <li>/</li>
                    <li class="brtextclr">Admit Card</li>
                </ul>
            </div>
        </div>
    </div>
 </section>
 <!-- end breadcrumb section --->


<?php
// Sanitize user input to prevent SQL injection
$uid = isset($_GET['uid']) ? intval($_GET['uid']) : 0;
$selctadmitexam = "SELECT * FROM `register` WHERE `id`='$uid'";
$queryadmitexam = mysqli_query($link,$selctadmitexam);
$showadmitexam = mysqli_fetch_assoc($queryadmitexam);

// Redirect if no valid user found
if(!$showadmitexam) {
    echo "<script>alert('Invalid User..!!');window.location.href='admit-card-login.php'</script>";
    exit;
}
?>




 <section>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
               <div class="admit-card col-lg-10 ">
                  <div class="BoxA border- padding mar-bot"> 
                     <div class="row">
                       
                        <div class="col-sm-12 logimgs text-center fnrssdadm">
                           <img src="img/logo.png" >
                           <h4><small>(APPROVED BY  OF CORPORATE AFFAIRS GOVT. OF INDIA)</small></h4>
                           <h2>ALL INDIA AVIATION ENTRANCE<br> EXAMINATION 2024-2025</h2>
                        </div>
                      
                     </div>
                  </div>
                  <hr>
                  <div class="BoxC border- padding mar-bot">
                     <div class="row">
                        <div class="col-sm-12 text-center adsms">
                           <h2>E-ADMIT CARD</h2>
                        </div>
                     </div>
                  </div>
                  <div class="BoxD border- padding mar-bot">
                     <div class="row">
                        <div class="col-sm-9">
                           <table class="table table-bordered table-striped tbabus">
                             <tbody>
                              <tr>
                                <td><b>ROLL NO.</b></td>
                                <td><b><?= $showadmitexam['registration_number'];?></b> </td>
                              </tr>
                              <tr>
                                <td><b>CANDIDATE’S NAME</b></td>
                                <td><b><?= $showadmitexam['first_name'];?> <?= $showadmitexam['last_name'];?></b> </td>
                              </tr>
                            
                              <tr>
                                <td><b>DATE OF BIRTH</b></td>
                                <td><b><?= date("d F, Y", strtotime($showadmitexam['dob'])); ?></b> </td>
                              </tr>
                              <tr>
                                <td><b>EXAM LOCATION</b></td>
                                <td><b><?= $showadmitexam['exam_location'];?></b> </td>
                              </tr>
                              <tr>
                                <td><b>DATE OF EXAM</b></td>
                                <td><b><?= date("d F, Y", strtotime($showadmitexam['doe'])); ?></b> </td>
                              </tr>
                              <tr>
                                <td><b>EXAM TIMING</b></td>
                                <td><b><?= date("h:i A", strtotime($showadmitexam['exam_time'])); ?></b> </td>
                              </tr>
                              <!-- <tr>
                                <td>NAME OF POST</td>
                                <td><b>G.P.RATING</b> </td>
                              </tr> -->
                             
                              <tr>
                                <td colspan="2" style="    height: 125px;"><b>EXAM VENUE: </b><?= $showadmitexam['exam_venue'];?></td>
                              </tr>
                             </tbody>
                           </table>
                        </div>
                         <div class="col-sm-3 txt-center">
                           <table class="table table-bordered">
                             <tbody>
                              <tr>
                                <th scope="row txt-center" style="padding: 0px;">
                                                                   <img src="images/user1.jpg" class="w-100">
                               <h6 style="margin: 0px;"><small><center>Cross Signatory</center></small></h6>
                             </th>
                                                             </tr>
                              
                              
                             
                             </tbody>
                           </table>
                           <img src="images/stam.png" width="100%">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="admintro admssuls">
                           <h4>
                              INSTRUCTIONS TO THE CANDIDATE
                           </h4>
                           <ul>
                              <li>
                                 You are requested to report Examination centre on the mentioned Date by 09:30am positively along with Admit Card.
                              </li>
                              <li>
                                 No Candidate will be allowed to appear in the examination Hall without valid Admit Card.
                              </li>
                              <li>
                                 Candidates have to use Black or Blue point pen for writing and filling up to circle of MCQ Answer Script.
                              </li>
                              <li>
                                 Mobile Phone, Calculator are prohibited in the Examination Hall.
                              </li>
                              <li>
                                 Examination will be cancelled if candidate adopts unfair means and shows any misconduct in the Examination Hall.
                              </li>
                              <li>
                                 Candidates must return their Answer script and question papers to the invigilator before leaving the Examination Hall.
                              </li>
                              <li>
                                 Candidates have to preserve this admit card to show at the time of interview, if qualify in the written test.
                              </li>
                              <li>
                                 Candidates have to bring all documents at the time of interview i.e., 10th and 12th certificates, ID proof, 2 passport size photos and counseling Fees Rs. 500/- .
                              </li>
                              <li>
                                 Please carry mask and sanitizer and Water Bottle. 
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="BoxE border- padding mar-bot txt-center">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="adfroot">
                              <h4> WZ-32, 2nd Floor Raja Garden,New Delhi – 110015</h4>
                              <p>CONTACT:9878767656</p>
                              <p>
                                 EMAIL ID- info@gniaviation.in
                              </p>
                            
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="BoxF border- padding mar-bot txt-center">
                     <div class="row">
                        <div class="col-sm-12">
                           
                        </div>
                     </div>
                  </div>
                  
                  
               </div>
               <div class="col-lg-1"></div>
               </div>
            </div>
 </section>


<?php 
include('include/footer.php');
?>