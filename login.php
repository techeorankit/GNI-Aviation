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
                    <li class="brtextclr">Login</li>
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
                            <h3>Login</h3>
                        </div>
                        <div class="col-lg-12 contsssd">
                            <p>Fields with (*) are mandatory.</p>
                        </div>
                        <div class="col-lg-12 fntsssdn">
                            <form method="POST" class="row" >
                                <div class="mb-3 mt-2 col-lg-12">
                                    <label  class="form-label">Email, Phone, or Registration Number<span>*</span></label>
                                    <input type="text" class="form-control" required  name="email">
                                </div>
                               
                                <div class="mb-2 col-lg-12">
                                    <label  class="form-label">Date Of Birth <span>*</span></label>
                                    <input type="date" class="form-control" required  name="dob">
                                </div>
                                
                                <div class="mb-2 selecreg col-lg-12">
                                    <label  class="form-label">Apply For  <span>*</span></label>
                                    <select class="form-select " name="apply">
                                        <option>---Select---</option>
                                        <option>CSA Application</option>
                                        <option>Housekeeping Application</option>
                                    </select>
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label  class="form-label">Password <span>*</span></label>
                                    <input type="password" class="form-control" required  name="password">
                                </div>
                               <div class="col-lg-12 mb-2">
                                <button type="submit" name="loginsss" class="btn btn-btnsss  " >Login</button>
                               </div>
                               <div class="col-lg-12 mb-2 abuttexts text-right">
                                <p><a href="register.php">Create New Account ?</a></p>
                               </div>
                            </form>
                        </div>

                        <?php 
if(isset($_POST['loginsss']))
{
    $email  = $_POST['email'];
    $dob    = $_POST['dob'];
    $apply  = $_POST['apply'];
    $password = $_POST['password'];

    // OR + AND correct grouping
    $query = "SELECT * FROM `register` WHERE (`registration_number`='$email' OR `email`='$email' OR `phone`='$email') AND `dob`='$dob' AND `apply_for`='$apply' AND `password`='$password'
    AND `status`='Active'";
    $result = mysqli_query($link, $query);
    if(mysqli_num_rows($result) > 0)
    {
        echo "<script>alert('Login Successfully..!!');window.location.href='index.php'</script>";
    }
    else
    {
        echo "<script>alert('Invalid Details..!!');window.location.href='index.php'</script>";
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