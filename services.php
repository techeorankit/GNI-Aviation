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
                    <li class="brtextclr">Service</li>
                </ul>
            </div>
        </div>
    </div>
 </section>
 <!-- end breadcrumb section --->

<section class="bgcgrayss py-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12 mb-4 careerfnts">
                        <h3>Training</h3>
                    </div>
                    <div class="col-lg-4 ">
                       
                     <img src="about/nine.png" class="mt-4 w-100">
                    </div>
                    <div class="col-lg-8 fnsssst">
                        <p>At Greater Noida International Aviation Services Private Limited, our training division is built on the principle that excellence in aviation begins with excellence in learning. We deliver a structured, high-performance training ecosystem designed to develop capable, confident, and industry-ready professionals who can meet the rigorous demands of aviation and airport operations.</p>
                        <p>Our programs emphasize practical competence, operational discipline, and service excellence. Candidates are trained in all essential areas—professional communication, passenger management, customer service protocols, operational procedures, and grooming—ensuring they are fully prepared for roles across Aviation, Hospitality, Travel & Tourism, and related service sectors.</p>
                        <p>We maintain a long-term approach to talent development by implementing comprehensive training pathways that address both current industry needs and emerging skill requirements. These pathways are continuously reviewed and refined to align with evolving aviation standards, technological upgrades, and regulatory frameworks.</p>
                        <p>Every training module is designed with clarity and precision. Our focus is on equipping future professionals with the knowledge, behaviour, and performance mindset required to deliver safe, efficient, and customer-centric services. Using a structured competency system, we identify the skills required for each job role and deliver targeted training that enhances both capability and readiness.</p>
                        <p>To ensure sustained quality, our training plans are supported by transparent evaluation systems, updated learning resources, and continuous monitoring. This enables us to maintain consistency, uphold industry expectations, and prepare each candidate to contribute meaningfully from day one.</p>
                        <p>With a commitment to professional excellence and industry relevance, Greater Noida International Aviation Services Pvt. Ltd. stands as a trusted platform for aviation training—empowering individuals to grow, succeed, and thrive in one of the world’s most dynamic sectors.</p>
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 mb-4 careerfnts">
                        <h3>Manpower Services</h3>
                    </div>
                    
                    <div class="col-lg-8 fnsssst">
                        <p>Greater Noida International Aviation Services Private Limited provides structured and dependable manpower services to support the operational requirements of aviation and associated service industries. With a well-established presence across Aviation, Hospitality, Travel & Tourism, Retail, and Event Management, the company has developed a strong capability to supply trained personnel for a wide range of airport and airline functions.</p>
                        <p>Our longstanding industry associations enable us to respond promptly to staffing needs from domestic and international aviation partners. Due to our consistent service delivery and industry credibility, organizations frequently engage us for workforce requirements prior to initiating public recruitment processes. This allows us to facilitate timely and efficient manpower deployment while maintaining the highest standards of proficiency and compliance.</p>
                        <p>We maintain an extensive pool of trained candidates who meet the competency expectations of airport operations, ground handling services, customer service roles, and other aviation-related functions. Our manpower allocation framework is designed to ensure organizational fit, operational readiness, and adherence to regulatory and service norms.</p>
                        <p>Candidate placement is conducted through a systematic and transparent process that evaluates individual strengths, role suitability, and long-term career alignment. Regular communication and guidance are provided to ensure candidates remain informed and well-prepared throughout the recruitment cycle.</p>
                        <p>Through our commitment to quality, consistency, and operational discipline, Greater Noida International Aviation Services Pvt. Ltd. continues to serve as a reliable manpower partner to the aviation sector, supporting organizations in maintaining efficient, customer-focused, and compliant operations.</p>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="bgcbluesss">
                            <h3>What do our Captain say?</h3>
                            <img src="career/four.jpg" class="w-100">
                            <p>GNI Aviation, proudly recommended by Captain Sunderam, is committed to providing outstanding manpower services and shaping skilled aviation professionals. With expert guidance, world-class training, and a strong reputation in the industry, we offer a trusted pathway to a stable and rewarding aviation career. Join us to gain confidence, discipline, and opportunities that help you grow, succeed, and achieve your dreams in the aviation sector.</p>
                        </div>
                    </div>      
                </div>



                
            </div>
            <div class="col-lg-3">
                <div class="bgcclrblu hedddenq">
                    <h3>Enquiry Form</h3>
                    <p><span>Fields with (*) are mandatory.</span></p>

                     <form method="POST" class="labelftnsss" >
                                <div class="mb-2 mt-2">
                                    <label  class="form-label">Your Name<span>*</span></label>
                                    <input type="text" class="form-control" required  name="name">
                                </div>
                                <div class="mb-2">
                                    <label  class="form-label">Email Address <span>*</span></label>
                                    <input type="email"  class="form-control" required  name="email">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Phone <span>*</span></label>
                                    <input type="text" name="phone" class="form-control"  required>
                                </div>
                                <div class="mb-2">
                                    <label  class="form-label">Date of Birth (DD/MM/YY) <span>*</span></label>
                                    <input type="text" class="form-control"   name="dob" required>
                                </div>
                                <div class="mb-2 slect">
                                    <label  class="form-label">Your Qualification <span>*</span></label>
                                   <select class="form-control">
                                    <option>Choose your Qualification</option>
                                    <option value="12th Pass">12th Pass</option>
                                    <option value="Graduate">Graduate</option>
                                    <option value="Post Graduate">Post Graduate</option>
                                </select>
                                </div>
                               
                                <button type="submit" class="btn btn-btnsss mt-2 " >Request A Call</button>
                            </form>

                </div>
            </div>
        </div>
    </div>
</section>


<?php 
include('include/footer.php');
?>

<script>
    $(document).ready(function(){
$('.image-popup-vertical-fit').magnificPopup({
	type: 'image',
  mainClass: 'mfp-with-zoom', 
  gallery:{
			enabled:true
		},

  zoom: {
    enabled: true, 

    duration: 300, // duration of the effect, in milliseconds
    easing: 'ease-in-out', // CSS transition easing function

    opener: function(openerElement) {

      return openerElement.is('img') ? openerElement : openerElement.find('img');
  }
}

});

});
</script>