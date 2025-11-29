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
                    <li class="brtextclr">Register</li>
                </ul>
            </div>
        </div>
    </div>
 </section>
 <!-- end breadcrumb section --->



 <section class="py-50 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="confrmbgc">
                    <div class="row">
                        <div class="col-lg-12 text-center registesss">
                            <h3>Registration</h3>
                        </div>
                        <div class="col-lg-12 contsssd">
                            <p>Fields with (*) are mandatory.</p>
                        </div>
                        <div class="col-lg-12 fntsssdn">


                         <?php 
                        $random10 = random_int(1000000000, 9999999999);
                         ?>

                            <form method="POST" class="row" >
                                <div class="mb-3 mt-2 col-lg-12">
                                    <label  class="form-label">First Name<span>*</span></label>
                                    <input type="text" class="form-control" required  name="fname">
                                   <input type="hidden" name="reg_no" value="GNI<?= $random10;?>">
                                   <input type="hidden" name="status" value="InActive">
                                </div>
                                <div class="mb-3 mt-2 col-lg-12">
                                    <label  class="form-label">Last Name<span>*</span></label>
                                    <input type="text" class="form-control" required  name="lname">
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label  class="form-label">Email Address <span>*</span></label>
                                    <input type="email" class="form-control" required  name="email">
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label">Mobile Number (Whatsapp Number Only) <span>*</span></label>
                                 <input type="text" class="form-control"  name="phone" maxlength="10"  pattern="[0-9]{10}" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label  class="form-label">Date Of Birth <span>*</span></label>
                                    <input type="date" class="form-control" required  name="dob">
                                </div>
                                <div class="mb-2 selecreg col-lg-12">
                                    <label  class="form-label">Preferred Language  <span>*</span></label>
                                    <select class="form-select" name="language">
                                        <option>---Select---</option>
                                        <option value="English">English</option>
                                        <option value="Hindi">Hindi</option>
                                        <option value="Bengali">Bengali</option>
                                        <option value="Marathi">Marathi</option>
                                        <option value="Tamil">Tamil</option>
                                        <option value="Telugu">Telugu</option>
                                        <option value="Gujarati">Gujarati</option>
                                        <option value="Kannada">Kannada</option>
                                        <option value="Odia">Odia</option>
                                        <option value="Malayalam">Malayalam</option>
                                        <option value="Assamese">Assamese</option>
                                    </select>
                                </div>
                                <div class="mb-2 selecreg col-lg-12">
                                    <label  class="form-label">Apply For  <span>*</span></label>
                                    <select class="form-select " name="applyfor">
                                        <option>---Select---</option>
                                        <option value="CSA Application">CSA Application</option>
                                        <option value="Housekeeping Application">Housekeeping Application</option>
                                    </select>
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label  class="form-label">Password <span>*</span></label>
                                    <input type="password" class="form-control" required  name="password">
                                </div>
                               <div class="col-lg-12 mb-2">
                                <button type="submit" name="registration" class="btn btn-btnsss">Register</button>
                               </div>
                               <div class="col-lg-12 mb-2 abuttexts text-right">
                                <p><a href="login.php">Already have an account ?</a></p>
                               </div>
                            </form>
                        </div>

<?php 
if(isset($_POST['registration']))
{
  $fname = $_POST['fname']; 
  $reg_no = $_POST['reg_no']; 
  $status = $_POST['status'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $dob = $_POST['dob'];
  $language = $_POST['language'];
  $applyfor = $_POST['applyfor'];
  $password = $_POST['password'];
  $insrtreg = "INSERT INTO `register`(`registration_number`, `first_name`, `last_name`, `email`, `phone`, `dob`, `language`, `apply_for`, `status`, `password`) VALUES ('$reg_no','$fname','$lname','$email','$phone','$dob','$language','$applyfor','$status','$password')";
  if(mysqli_query($link,$insrtreg))
  {
    echo "<script>alert('Data Successfully..!!');window.location.href=''</script>";
  }else{
    echo "<script>alert('Try Again....!!');window.location.href=''</script>";
  }
}
?>








                    </div>
                    
                </div>
            </div>
            

        </div>
    </div>
</section>




<?php 
include('include/footer.php');
?>