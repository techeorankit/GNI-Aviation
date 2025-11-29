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



 <section class="py-50 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="confrmbgc">
                    <div class="row">
                        <div class="col-lg-12 text-center registesss">
                            <h3>Admit Card</h3>
                        </div>
                        
                        <div class="col-lg-12 fntsssdn">
                            <form method="POST" class="row" >
                                <div class="mb-3 mt-2 col-lg-12">
                                    <label  class="form-label">Registration Number<span>*</span></label>
                                    <input type="text" class="form-control" required  name="registration_number">
                                </div>
                               
                               
                                
                               
                                
                               <div class="col-lg-12 mb-2">
                                <button type="submit" name="admitcard" class="btn btn-btnsss  " >Submit</button>
                               </div>
                               
                            </form>
                        </div>

                        <?php 
                        if(isset($_POST['admitcard']))
                        {
                            $registration_number = $_POST['registration_number'];

                            $slectregistration = "SELECT * FROM `register` WHERE `registration_number`='$registration_number' AND `status`='Active'";
                            $queryregistration = mysqli_query($link,$slectregistration);
                            $showregist = mysqli_fetch_assoc($queryregistration);
                                $newregno = $showregist['registration_number'];
                                $uid = $showregist['id'];
                            if($registration_number==$newregno)
                            {
                                echo "<script>alert('Your Admit Card Successfull Login...!!');window.location.href='admit-card.php?uid=$uid'</script>";
                            }else
                            {
                                echo "<script>alert('Try Again..!!');window.location.href=''</script>";
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