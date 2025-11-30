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
                    <li class="brtextclr">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
 </section>
 <!-- end breadcrumb section --->

<section class="bgcgrayss py-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center fontsssd">
                <h3>Contact GNI Aviation Services</h3>
                <p>We have the answers to all your queries. If you have a query or feedback for us, we will love to hear from you.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 text-center">
                <div class="conbgcclr">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
                <h3>Address</h3>
                <p>H.No.173-174, Pocket-25, Sector-24, Rohini, Delhi-110085</p>
                </div>
            </div>

            <div class="col-lg-3 text-center">
                <div class="conbgcclr">
              <i class="fa fa-phone" aria-hidden="true"></i>
                <h3>Phone</h3>
                <p>9217277714, 9217277715</p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="conbgcclr">
             <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <h3>Email </h3>
                <p>info@gniasjewar.com</p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="conbgcclr">
             <i class="fa fa-clock-o" aria-hidden="true"></i>
                <h3>Office Timing </h3>
                <p>Mon to Sat – 9:30am to 6pm </br> Sunday – Closed</p>
              
                
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="confrmbgc">
                    <div class="row">
                        <div class="col-lg-12 text-center fntssd">
                            <h3>Send us a message</h3>
                        </div>
                        <div class="col-lg-12 contsssd">
                            <p>Fields with (*) are mandatory.</p>
                        </div>
                        <div class="col-lg-12 fntsssdn">
                            <form method="POST" >
                                <div class="mb-3 mt-2">
                                    <label  class="form-label">Your Name<span>*</span></label>
                                    <input type="text" class="form-control" required  name="name">
                                </div>
                                <div class="mb-2">
                                    <label  class="form-label">Email Address <span>*</span></label>
                                    <input type="email" class="form-control" required  name="email">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Phone <span>*</span></label>
                                    <input type="text" class="form-control" name="phone" maxlength="10" pattern="[0-9]{10}" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                                </div>
                                <div class="mb-2">
                                    <label  class="form-label">Subject <span>*</span></label>
                                    <input type="text" class="form-control"   name="subject" required>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Message <span>*</span></label>
                                   <textarea class="form-control" rows="5" name="message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-btnsss  " >Send Message</button>
                            </form>
                        </div>

                    </div>
                    
                </div>
            </div>
            <div class="col-lg-7">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3498.665209545817!2d77.08787207429782!3d28.729549679670544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d06c625a9bf7d%3A0x97d2050a2c6dc2eb!2sh%2C%2025%2F173%2C%20Hanumangarh%2C%20Pocket%2025%2C%20Sector%2024%2C%20Rohini%2C%20New%20Delhi%2C%20Delhi%2C%20110085!5e0!3m2!1sen!2sin!4v1764325897237!5m2!1sen!2sin" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>
</section>






<?php 
include('include/footer.php');
?>