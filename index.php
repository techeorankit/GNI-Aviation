<?php 
include('include/header.php');
?>
    
    <div id="carouselExampleControls" class="carousel slide brrdds" data-bs-ride="carousel">
  <div class="carousel-inner">
  
    <div class="carousel-item active">
      <img src="img/bg-1.jpg" class="d-block w-100 mblbanner" alt="GNI Aviation Services - Aviation Training at Noida International Airport Jewar">
    </div>
    <div class="carousel-item">
      <img src="img/bg-2.jpg" class="d-block w-100 mblbanner" alt="Airport Ground Staff Training and Placement - GNI Aviation">
    </div>
      <div class="carousel-item ">
      <img src="img/bg-5.jpg" class="d-block w-100 mblbanner" alt="Airline Career Opportunities - Apply for Airport Jobs">
    </div>
    <!-- <div class="carousel-item">
      <img src="img/bg-4.jpg" class="d-block w-100 mblbanner" alt="...">
    </div> -->
    <!-- <div class="carousel-item">
      <img src="img/bg-3.jpg" class="d-block w-100" alt="...">
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <!-- SEO H1 Tag - Visually hidden but accessible for SEO -->
    <h1 class="visually-hidden">GNI Aviation Services - Aviation Training & Airport Jobs at Noida International Airport Jewar</h1>
    
    <div class="box-bgs bgcclr">
        <div class="container">
            <div class="row">
                <div class="col-md-4 m-b-5  contsct">
                  <div class="text-center">
                    <h3 class="">Candidate Segment</h3>
                    </div>
                    <div class="box-sectionss">
                        <div class="box-wrapper candidate-segment">
      <div class="link-item blue-bgs apllsd">
         <a tabindex="0" data-placement="top" data-container="body" data-toggle="popover" data-trigger="focus" title="" data-content="Online Registration date is over" href="javascript:void(0);" class="popover_link" data-orGNInal-title="Important Notice">
         <span class="icon-candidate icon-apply-online"></span>
        <i class="fa fa-file-text-o" aria-hidden="true"></i>  APPLY ONLINE APPLICATION </a>
      </div>
      <div class="link-item bg-white">
         <a href="#" class="viewsssa">
         <span class="icon-candidate icon-view-advertisements"></span>
        <i class="fa fa-child" aria-hidden="true"></i>  VIEW ADVERTISEMENT - 2026 </a>
        
      </div>
       <div class="advertisements-btn-wrapper text-center">
            <a href="pdf/englishf.pdf" class="enlhhs" target="_blank"><span class="icon-view"></span><i class="fa fa-eye" aria-hidden="true"></i> English</a>
            <a href="pdf/hindi.pdf" class="enlhhs" target="_blank"><span class="icon-view"></span><i class="fa fa-eye" aria-hidden="true"></i> Hindi</a>
         </div>
      <div class="link-item margsssd bgc-lightblu">
         <a href="login.php" class="loginssgd">
         <span class="icon-candidate icon-check-status"></span>
        <i class="fa fa-file-text-o" aria-hidden="true"></i>  LOGIN &amp; CHECK APPLICATION STATUS																				 </a>
      </div>
      <div class="link-item bgc-white">
         <a href="https://GNIaviationdelhi.com/download-admit-card/" class="loginssgd">
         <span class="icon-candidate icon-admit-cards"></span>
        <i class="fa fa-address-card-o" aria-hidden="true"></i>  DOWNLOAD ADMIT CARDS 
         <span class="icon-new"></span>
         </a>
      </div>
      <div class="link-item bgc-lightblu">
         <a href="javascript:void(0);" class="loginssgd" >
         <span class="icon-candidate icon-results"></span>
        <i class="fa fa-file-text-o" aria-hidden="true"></i>  RESULTS																				 </a>
      </div>
   </div>
                    </div>
             <!-- box-wrapper ends -->
                </div>
                
                <div class="col-md-3 m-b-5 contsct">
                  <div class="">
                    <h3 class="candidate-g">Notifications</h3>
                    <div class="box-wrapper pdsssd">
                      <div class="bgcshitsss">
                      <div class="microsoft">
                        <div class="marquee">
                            
                           <?php 
$slectnotification = "SELECT * FROM `notification`";
$querynotification = mysqli_query($link, $slectnotification);

if ($querynotification && mysqli_num_rows($querynotification) > 0) {
    while ($shownotification = mysqli_fetch_assoc($querynotification)) {
        echo "<p>" . $shownotification['notification_cont'] . "</p>";
    }
} else {
    echo "<p>No notifications found.</p>";
}
?>
                     </div>
                      </div>
                      </div>
                    </div>
             <!-- box-wrapper ends -->
              </div>
                </div>
                
                <div class="col-md-5 m-b-5 contsct1">
                    <h3 class="candidate-g">Why Choose GNI ?</h3>
                    <div class="bgcwhitsss">
                  	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1"><i class="fa fa-commenting-o" aria-hidden="true"></i> Why Us?</li>
		<li class="tab-link" data-tab="tab-2"><i class="fa fa-handshake-o" aria-hidden="true"></i> Our Commitments</li>
		<li class="tab-link" data-tab="tab-3"><i class="fa fa-bullseye" aria-hidden="true"></i> Our Goals</li>
	</ul>

	<div id="tab-1" class="tab-content current contssdntab"><p><b>Government-Registered & Industry-Certified Aviation Service Provider</b></p>
<p>As a fully compliant organization registered under the Companies Act, we are recognized for delivering reliable, high-quality aviation training and manpower solutions trusted by leading airports and aviation companies.</p>
<p><b>Experienced Aviation Professionals & Certified Trainers</b></p>
<p>Our training and recruitment services are led by industry experts with years of experience in airline operations, airport management, passenger handling, cargo services, and customer service. This ensures every candidate receives real industry insights and job-ready skills.</p>
</div>
	<div id="tab-2" class="tab-content contssdntab"><p>We are committed to delivering exceptional aviation training and manpower services that consistently meet the expectations of both our candidates and our corporate partners. Our approach is rooted in professionalism, operational integrity, and a steadfast focus on service excellence.</p>
<p>We emphasize accountability at every stage—ensuring that our training processes, support systems, and recruitment solutions are aligned with the highest industry standards. By fostering a culture of trust and reliability, we aim to build long-term partnerships that reflect our dedication to quality and performance.</p>
</div>
	<div id="tab-3" class="tab-content contssdntab"><p>Our goal is to deliver high-quality aviation training and manpower services that strengthen safety, efficiency, and reliability across airport operations. We focus on providing rigorous, industry-aligned training that prepares candidates to excel in critical areas such as passenger handling, customer service, and airport operational support.</p>
<p>We are committed to maintaining uncompromised service standards, recognizing that aviation roles directly impact passenger safety, time management, and overall airport performance. By ensuring consistent, skill-focused training and adherence to established aviation protocols, we aim to create a workforce capable of supporting seamless, secure, and well-coordinated airport mechanisms.</p>
</div>
  </div>
		
		
                    
             <!-- box-wrapper ends -->
                </div>
            </div>
        </div>
    </div>


<section class="bgcclr">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="abutbgc">
          <div class="row">
            <div class="col-lg-12 contsctabut">
              <h3>About GNI Aviation</h3>
            </div>
            <div class="col-lg-8 avitsss">
              <p>Greater Noida International Aviation Services Private Limited, founded in 2025, has emerged as a prominent organization in the domain of aviation training and manpower solutions in India. Over the course of a decade, the company has demonstrated sustained excellence by delivering sophisticated, industry-compliant training programs and end-to-end manpower services tailored to the advanced operational requirements of the aviation and airport services sector.</p>
              <p>The company currently serves 17 key clients at all Indian airports, delivering comprehensive expertise in passenger handling, customer service, and cargo operations. It maintains strategic partnerships with leading domestic and international airlines, ground handling organizations, VIP lounge operators, cargo service providers, and airport retail entities, thereby solidifying its reputation as one of the most reliable and trusted service partners at Indian airports.</p>
              <a href="about.php" class="btn btn-blusssd">More Information...</a>
            </div>
            <div class="col-lg-4 hdddst">
              <h4><i class="fa fa-video-camera" aria-hidden="true"></i> Company Profile</h4>
              <iframe width="100%" height="215" src="https://www.youtube.com/embed/iDWqrbjCsb8?si=p7tFKruAtsD2NhCP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-orGNIn-when-cross-orGNIn" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="pt-50">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 text-center">
        <div class="bgcblsss">
        <h3><a href="#">Notice</a></h3>
        </div>
      </div>

      <div class="col-lg-3 text-center">
        <div class="bgcblsss">
        <h3><a href="#">How To Apply (Video)</a></h3>
        </div>
      </div>


      <div class="col-lg-3 text-center">
        <div class="bgcblsss">
        <h3><a href="#">Apply For   <span>Airport Ground Staff / CSA </span></a></h3>
        </div>
      </div>

      <div class="col-lg-3 text-center">
        <div class="bgcblsss">
        <h3><a href="#">Apply For  <span>Loader / Housekeeping </span></a></h3>
        </div>
      </div>

       <div class="col-lg-3 text-center">
        <div class="bgcblsss">
        <h3><a href="#">Download Notification Hindi</a></h3>
        </div>
      </div>


      <div class="col-lg-3 text-center">
        <div class="bgcblsss">
        <h3><a href="#">Download Notification English</a></h3>
        </div>
      </div>

      <div class="col-lg-3 text-center">
        <div class="bgcblsss">
        <h3><a href="#">Syllabus</a></h3>
        </div>
      </div>

      <div class="col-lg-3 text-center">
        <div class="bgcblsss">
        <h3><a href="#">Download Admint Card</a></h3>
        </div>
      </div>

      <div class="col-lg-3 text-center">
        <div class="bgcblsss">
        <h3><a href="#">Result</a></h3>
        </div>
      </div>
      <div class="col-lg-3 text-center">
        <div class="bgcblsss">
        <h3><a href="#">Download Your Interview Call Letter</a></h3>
        </div>
      </div>

      <div class="col-lg-3 text-center">
        <div class="bgcblsss">
        <h3><a href="#">Download Your Joining Letter</a></h3>
        </div>
      </div>





    </div>
  </div>
</section>


<section class="py-50">
  <div class="container">
    
    <div class="row">
      <!-- <div class="col-lg-6">
        <div class="row mrgsbtnrow verticleslider">
          <div class="col-lg-12">
            <div class="bgccll">
              <div class="row">
                <div class="col-lg-4 my-auto sliimg">
                  <img src="slider/one.png" alt="" style="width:100%; border-radius:5px;">
                </div>
                <div class="col-lg-8 my-auto blgsssd" >
                  <h3>Written Examination Drive &#8211;  2020</h3>
                  <p>GNI Aviation Services conducted a written examination PAN India 2020 during the tough situation of COVID-19 while following the guidelines.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="bgccll">
              <div class="row">
                <div class="col-lg-4 my-auto sliimg">
                  <img src="slider/two.jpg" alt="" style="width:100%; border-radius:5px;">
                </div>
                <div class="col-lg-8 my-auto blgsssd" >
                  <h3>Aviation Services Award</h3>
                  <p>Awarded for the best Aviation Service for Delhi GNI Airport at the event Global Business Excellency Award 2018.</p>
                </div>
              </div>
            </div>
          </div>



          <div class="col-lg-12">
            <div class="bgccll">
              <div class="row">
                <div class="col-lg-4 my-auto sliimg">
                  <img src="slider/three.jpg" alt="" style="width:100%; border-radius:5px;">
                </div>
                <div class="col-lg-8 my-auto blgsssd" >
                  <h3>Job Fair 2018</h3>
                  <p>GNI Aviation Services participated in the job fair organised by the Government of NCT of Delhi at Tyagaraj Stadium on 15 &amp; 16 February 2018.</p>
                </div>
              </div>
            </div>
          </div>




<div class="col-lg-12">
            <div class="bgccll">
              <div class="row">
                <div class="col-lg-4 my-auto sliimg">
                  <img src="slider/four.jpg" alt="" style="width:100%; border-radius:5px;">
                </div>
                <div class="col-lg-8 my-auto blgsssd" >
                  <h3>GNI Exam</h3>
                  <p>GNI Aviation Services conducted a written examination PAN India 2020 during the tough situation of COVID-19 while following the guidelines.</p>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-12">
            <div class="bgccll">
              <div class="row">
                <div class="col-lg-4 my-auto sliimg">
                  <img src="slider/five.png" alt="" style="width:100%; border-radius:5px;">
                </div>
                <div class="col-lg-8 my-auto blgsssd" >
                  <h3>Notification also released in Leading Sites &amp; Newspaper</h3>
                  <p>Notification was released by sarkariresult.com, Dailyrecruitment.in, FresherNow.com, sscadda.com, RojgarResult.com, jansatta.com, India.com, etc.</p>
                </div>
              </div>
            </div>
          </div>



          








        </div>
        
      </div> -->
      <div class="col-lg-12 mblmrsssgd">
        <div class="row">
          <div class="col-lg-12 ">
            <img src="img/adver.jpg" class="pl-50" alt="Noida International Airport Jewar Terminal - Aviation Career Opportunities">
             <div class="bgcclrs">
              <h3> Jewar Terminal</h3>
              <p>The Jewar Terminal has been designed to handle millions of passengers annually with modern amenities and future-ready systems. It reflects a blend of efficiency, sustainability, and global standards, making it one of the most anticipated terminals in India.</p>
              <h4><i class="fa fa-plane" aria-hidden="true"></i> Key Features</h4>
             <ul class="keystrr">
              <li>Ultra-modern architecture with spacious check-in halls</li>
              <li>Automated baggage handling system</li>
              <li>Smart security checkpoints powered by advanced scanning technologies</li>
              <li>Energy-efficient, eco-friendly building design</li>
              <li>Seamless passenger flow for quick arrivals & departures</li>
              <li>Dedicated retail and dining zones</li>
              <li>World-class lounges & waiting areas</li>
              <li>Differently-abled friendly terminals with complete accessibility</li>
             </ul>
            </div>
          </div>
        
        </div>
        
      </div>
    </div>
  </div>
</section>





    <!-- Service Section  -->
    <!-- <div class="service-section">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-3">
            <div class="service-card bg--dark text-center">
              <img src="img/icon-1.png" alt="" class="img-fluid">
              <h4 class="text-capitalize t-text-white heading-h">Apply for Customer Service</h4>
              
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-card bg--primary text-center">
              <img src="img/icon-2.png" alt="" class="img-fluid">
              <h4 class="text-capitalize t-text-white heading-h">Admit Card</h4>
              
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-card bg--dark text-center">
              <img src="img/icon-3.png" alt="" class="img-fluid">
              <h4 class="text-capitalize t-text-white heading-h"> Result Available</h4>
             
            </div>
          </div>
          
         <div class="col-md-3">
            <div class="service-card bg--primary text-center">
              <img src="img/icon-4.png" alt="" class="img-fluid">
              <h4 class="text-capitalize t-text-white heading-h">Check Your Call Letter
</h4>
              
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Service Section End -->

    <!-- Student Help Section  -->
    <!-- <div class="about-section">
      
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 d-none d-lg-block">
            <img src="img/about.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md-10 col-lg-6">
            <h3 class="text-capitalize heading-k">
              Welcome to GN Aviation Services Pvt. Ltd.
            </h3>
            <p>
             GN Aviation Services Pvt. Ltd. is managed by a team of highly skilled professionals with vast experience in the aviation industry. We are dedicated to preparing students for successful careers in aviation, hospitality, and tourism. GN Aviation Services Pvt. Ltd. was established with the vision of providing our clients with well-trained and efficient professionals to handle passenger, ramp, and cargo operations across India.

            </p>
            <p>
               Our focus is on delivering reliable and quality services while catering to the specific requirements of our valued clients. We strive to bridge the gap between the growing demand and supply of skilled manpower in the aviation sector.
            </p>
            
            <div class="text-start mt-4">
              <a href="contact.html" class="t-link btn btn--lg btn--primary">
                <span class="d-flex align-items-center">
                  <span class="flex-shrink-0 contact-icon-box d-inline-block">
                    <img src="assets/img/icon-telephone.png" alt="viserfly" class="contact-icon">
                  </span>
                  <span class="ms-5 d-inline-block text-start">
                    <span class="mb-0 t-text-white"> Call Us Anytime </span>
                    <br>
                    <span class="mb-2 fw-bold text-capitalize t-text-white xl-text d-inline-block">
                      +91-9876765654
                    </span>
                  </span>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Student Help Section End -->
    

    <!-- Pilot Training  -->
    <div class="section bg--light-1">
      <div class="section__head">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-xl-6">
              <div class="text-center">
                <h2 class="text-capitalize heading-k mt-0">Different Job Roles at the Airport</h2>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="service-g bg-blue">
                <img src="job-roll/one.jpg" alt="Airport Ground Staff Jobs - GNI Aviation Training">
                <h4 class="mt-0">
                  <a href="#" class="t-link t-link--primary d-block text-capitalize">
                    Airport Ground Staff
                  </a>
                </h4>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-g bg-sky">
                 <img src="job-roll/two.jpg" alt="Airport Loader Jobs at Noida International Airport">
                <h4 class="mt-0">
                  <a href="#" class="t-link t-link--primary d-block text-capitalize t-text-white">
                    Airport Loaders
                  </a>
                </h4>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="service-g bg-blue">
                  <img src="job-roll/three.jpg" alt="Airport Security Staff Training and Jobs">
                <h4 class="mt-0">
                  <a href="#" class="t-link t-link--primary d-block text-capitalize t-text-white">
                   Airport Security Staff
                  </a>
                </h4>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-g bg-sky">
                 <img src="job-roll/four.jpg" alt="Ramp Executive Career at Airport">
                <h4 class="mt-0">
                  <a href="#" class="t-link t-link--primary d-block text-capitalize t-text-white">
                    Ramp Executive
                  </a>
                </h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
             <div class="service-g bg-sky">
                  <img src="job-roll/five.jpg" alt="Airport Cargo Staff Jobs and Training">
                <h4 class="mt-0">
                  <a href="#" class="t-link t-link--primary d-block text-capitalize t-text-white">
                   Airport Cargo Staff
                  </a>
                </h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
             <div class="service-g bg-blue">
                  <img src="job-roll/six.jpg" alt="Front Desk Receptionist Jobs at Airport">
                <h4 class="mt-0">
                  <a href="#" class="t-link t-link--primary d-block text-capitalize t-text-white">
                    Front Desk Receptionist
                  </a>
                </h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
             <div class="service-g bg-sky">
                  <img src="job-roll/seven.jpg" alt="Air Ticketing Executive Career Opportunities">
                <h4 class="mt-0">
                  <a href="#" class="t-link t-link--primary d-block text-capitalize t-text-white">
                   Air Ticketing Executive
                  </a>
                </h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
             <div class="service-g bg-blue">
                  <img src="job-roll/eight.jpg" alt="Airport Housekeeping Staff Positions">

                <h4 class="mt-0">
                  <a href="#" class="t-link t-link--primary d-block text-capitalize t-text-white">
                    Housekeeping Staff
                  </a>
                </h4>
            </div>
          </div>



          <div class="col-md-6 col-lg-3">
             <div class="service-g bg-blue">
                  <img src="job-roll/nine.jpg" alt="VIP Lounge Staff Jobs at Airport">
                <h4 class="mt-0">
                  <a href="#" class="t-link t-link--primary d-block text-capitalize t-text-white">
                    VIP Lounge Staff
                  </a>
                </h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
             <div class="service-g bg-sky">
                  <img src="job-roll/ten.jpg" alt="Airport Supervisor Positions">
                <h4 class="mt-0">
                  <a href="#" class="t-link t-link--primary d-block text-capitalize t-text-white">
                     Supervisor
                  </a>
                </h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
             <div class="service-g bg-blue">
                  <img src="job-roll/eleven.jpg" alt="Retail Outlet Executive Jobs at Airport">
                <h4 class="mt-0">
                  <a href="#" class="t-link t-link--primary d-block text-capitalize t-text-white">
                     Retail Outlet Executive
                  </a>
                </h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
             <div class="service-g bg-sky">
                  <img src="job-roll/twelve.jpg" alt="Other Airport Job Opportunities">
                <h4 class="mt-0">
                  <a href="#" class="t-link t-link--primary d-block text-capitalize t-text-white">
                     Others
                  </a>
                </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pilot Training End -->

    <!-- Feedback Section  -->
    <div class="section--sm section--top">
      <div class="section__head">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-xl-6">
              <div class="text-center">
                <h2 class="text-capitalize heading-k mt-0"> Our Testimonials</h2>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="feedback-slider">
             
             
              
              
             
              
               <div class="feedback-slider__item">
                <div class="feedback-card bg--light-1">
                  <div class="feedback-card__profile mb-4">
                    <img src="testimonial/one.jpeg" alt="Sourav - GNI Aviation Success Story" class="feedback-card__profile-img flex-shrink-0">
                    <div class="feedback-card__profile-info">
                      <h6 class="feedback-card__profile-name fw-md text-capitalize mb-0">
                       Sourav
                      </h6>
                      <p class="mb-0 text-capitalize sm-text"> Delhi</p>
                    </div>
                  </div>
                  <p class="feedback-card__comment">
                   Even though Greater Noida International Aviation Services is a new company, 
                   I trusted it because the Chairperson has real aviation experience. 
                   His knowledge and guidance made the training feel completely professional. 
                   With his support, I was able to get placed in the aviation sector with confidence.
                  </p>
                  <ul class="list list--row">
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
              
              
               <div class="feedback-slider__item">
                <div class="feedback-card bg--light-1">
                  <div class="feedback-card__profile mb-4">
                    <img src="testimonial/two.jpeg" alt="Santosh Kumar - Aviation Job Placement Success" class="feedback-card__profile-img flex-shrink-0">
                    <div class="feedback-card__profile-info">
                      <h6 class="feedback-card__profile-name fw-md text-capitalize mb-0">
                       Santosh Kumar
                      </h6>
                      <p class="mb-0 text-capitalize sm-text"> Delhi</p>
                    </div>
                  </div>
                  <p class="feedback-card__comment">
                  Greater Noida International Aviation Services truly stands out because of the Chairperson’s 
                  over a decade of experience in the aviation industry. His deep knowledge of 
                  airline operations and interview skills made the entire training very practical. 
                  With his continuous support and preparation sessions, I was able to secure my placement in 
                  the aviation sector with full confidence.
                  </p>
                  <ul class="list list--row">
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
             
              <div class="feedback-slider__item">
                <div class="feedback-card bg--light-1">
                  <div class="feedback-card__profile mb-4">
                    <img src="assets/img/team-1.jpg" alt="Rajeev Kumar - GNI Aviation Trainee Testimonial" class="feedback-card__profile-img flex-shrink-0">
                    <div class="feedback-card__profile-info">
                      <h6 class="feedback-card__profile-name fw-md text-capitalize mb-0">
                       Rajeev Kumar
                      </h6>
                      <p class="mb-0 text-capitalize sm-text"> Delhi</p>
                    </div>
                  </div>
                  <p class="feedback-card__comment">
                   What gave me confidence to join this new company was the Chairperson himself.
                   With many years of aviation experience, he knows exactly how to prepare students 
                   for real airline interviews. His mentorship helped me secure my placement easily.
                  </p>
                  <ul class="list list--row">
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="feedback-slider__item">
                <div class="feedback-card bg--light-1">
                  <div class="feedback-card__profile mb-4">
                    <img src="assets/img/team-2.jpg" alt="Jatin Kumar - Airport Job Placement Testimonial" class="feedback-card__profile-img flex-shrink-0">
                    <div class="feedback-card__profile-info">
                      <h6 class="feedback-card__profile-name fw-md text-capitalize mb-0">
                        Jatin Kumar
                      </h6>
                      <p class="mb-0 text-capitalize sm-text">Delhi</p>
                    </div>
                  </div>
                  <p class="feedback-card__comment">
                    The Organization may be new, but the Chairperson’s vast experience in the field of aviation 
                    expertise make the training extremely reliable. He shares real airport examples, 
                    prepares us for interviews, and guides us personally. 
                    Thanks to his experience and placement support, I got a job in the aviation industry.
                  </p>
                  <ul class="list list--row">
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                    <li class="list--row__item-sm">
                      <span class="d-inline-block text--warning">
                        <i class="bx bxs-star"></i>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
              
              
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feedback Section End -->

    
    <!-- FAQ  -->
    <!-- <section class="faq-section">
      <div class="section__head">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12 col-xl-12">
              <div class="text-center">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="vf-custom-icon me-2 flex-shrink-0">
                    <img src="assets/img/icon-plane.png" alt="viserfly" class="img-fluid">
                  </div>
                  <p class="mb-0 text-capitalize text--primary xxl-text">FAQ</p>
                </div>
                <h2 class="text-capitalize heading-k">Frequently Asked questions</h2>
               
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center g-4">
          
          <div class="col-lg-10 col-xl-8">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="list-home">
                <div class="accordion vf-accordion" id="faqAccordion">
                  <div class="accordion-item vf-accordion__item">
                    <h2 class="accordion-header vf-accordion__header">
                      <button class="accordion-button vf-accordion__btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                        Why You should become an Investor?
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                      <div class="accordion-body vf-accordion__body">
                        tara ipsum dolor sit amet consectetur adipisicing elit.
                        Natus quos numquam atque exercitationem reprehenderit
                        voluptas dolores ad repudiandae asperiores. Excepturi error
                        dolor at veniam, modi vel quos tempora pariatur eaque.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item vf-accordion__item">
                    <h2 class="accordion-header vf-accordion__header">
                      <button class="accordion-button vf-accordion__btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                        Can I Invest Using Cryptocurrency?
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                      <div class="accordion-body vf-accordion__body">
                        she ipsum dolor sit amet consectetur adipisicing elit. Natus
                        quos numquam atque exercitationem reprehenderit voluptas
                        dolores ad repudiandae asperiores. Excepturi error dolor at
                        veniam, modi vel quos tempora pariatur eaque.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item vf-accordion__item">
                    <h2 class="accordion-header vf-accordion__header">
                      <button class="accordion-button vf-accordion__btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
                        Why You Choose Us?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                      <div class="accordion-body vf-accordion__body">
                        tumi ipsum dolor sit amet consectetur adipisicing elit.
                        Natus quos numquam atque exercitationem reprehenderit
                        voluptas dolores ad repudiandae asperiores. Excepturi error
                        dolor at veniam, modi vel quos tempora pariatur eaque.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item vf-accordion__item">
                    <h2 class="accordion-header vf-accordion__header">
                      <button class="accordion-button vf-accordion__btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false">
                        Why You should become an Investor?
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                      <div class="accordion-body vf-accordion__body">
                        ami ipsum dolor sit amet consectetur adipisicing elit. Natus
                        quos numquam atque exercitationem reprehenderit voluptas
                        dolores ad repudiandae asperiores. Excepturi error dolor at
                        veniam, modi vel quos tempora pariatur eaque.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="list-profile">
                <div class="accordion vf-accordion" id="faqAccordion2">
                  <div class="accordion-item vf-accordion__item">
                    <h2 class="accordion-header vf-accordion__header">
                      <button class="accordion-button vf-accordion__btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true">
                        Why You should become an Investor?
                      </button>
                    </h2>
                    <div id="collapseOne2" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion2">
                      <div class="accordion-body vf-accordion__body">
                        tara ipsum dolor sit amet consectetur adipisicing elit.
                        Natus quos numquam atque exercitationem reprehenderit
                        voluptas dolores ad repudiandae asperiores. Excepturi error
                        dolor at veniam, modi vel quos tempora pariatur eaque.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item vf-accordion__item">
                    <h2 class="accordion-header vf-accordion__header">
                      <button class="accordion-button vf-accordion__btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false">
                        Can I Invest Using Cryptocurrency?
                      </button>
                    </h2>
                    <div id="collapseTwo2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion2">
                      <div class="accordion-body vf-accordion__body">
                        she ipsum dolor sit amet consectetur adipisicing elit. Natus
                        quos numquam atque exercitationem reprehenderit voluptas
                        dolores ad repudiandae asperiores. Excepturi error dolor at
                        veniam, modi vel quos tempora pariatur eaque.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item vf-accordion__item">
                    <h2 class="accordion-header vf-accordion__header">
                      <button class="accordion-button vf-accordion__btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false">
                        Why You Choose Us?
                      </button>
                    </h2>
                    <div id="collapseThree2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion2">
                      <div class="accordion-body vf-accordion__body">
                        tumi ipsum dolor sit amet consectetur adipisicing elit.
                        Natus quos numquam atque exercitationem reprehenderit
                        voluptas dolores ad repudiandae asperiores. Excepturi error
                        dolor at veniam, modi vel quos tempora pariatur eaque.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item vf-accordion__item">
                    <h2 class="accordion-header vf-accordion__header">
                      <button class="accordion-button vf-accordion__btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour2" aria-expanded="false">
                        Why You should become an Investor?
                      </button>
                    </h2>
                    <div id="collapseFour2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion2">
                      <div class="accordion-body vf-accordion__body">
                        ami ipsum dolor sit amet consectetur adipisicing elit. Natus
                        quos numquam atque exercitationem reprehenderit voluptas
                        dolores ad repudiandae asperiores. Excepturi error dolor at
                        veniam, modi vel quos tempora pariatur eaque.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="list-messages">
                <div class="accordion vf-accordion" id="faqAccordion3">
                  <div class="accordion-item vf-accordion__item">
                    <h2 class="accordion-header vf-accordion__header">
                      <button class="accordion-button vf-accordion__btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="true">
                        Why You should become an Investor?
                      </button>
                    </h2>
                    <div id="collapseOne3" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion3">
                      <div class="accordion-body vf-accordion__body">
                        tara ipsum dolor sit amet consectetur adipisicing elit.
                        Natus quos numquam atque exercitationem reprehenderit
                        voluptas dolores ad repudiandae asperiores. Excepturi error
                        dolor at veniam, modi vel quos tempora pariatur eaque.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item vf-accordion__item">
                    <h2 class="accordion-header vf-accordion__header">
                      <button class="accordion-button vf-accordion__btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo3" aria-expanded="false">
                        Can I Invest Using Cryptocurrency?
                      </button>
                    </h2>
                    <div id="collapseTwo3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion3">
                      <div class="accordion-body vf-accordion__body">
                        she ipsum dolor sit amet consectetur adipisicing elit. Natus
                        quos numquam atque exercitationem reprehenderit voluptas
                        dolores ad repudiandae asperiores. Excepturi error dolor at
                        veniam, modi vel quos tempora pariatur eaque.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item vf-accordion__item">
                    <h2 class="accordion-header vf-accordion__header">
                      <button class="accordion-button vf-accordion__btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree3" aria-expanded="false">
                        Why You Choose Us?
                      </button>
                    </h2>
                    <div id="collapseThree3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion3">
                      <div class="accordion-body vf-accordion__body">
                        tumi ipsum dolor sit amet consectetur adipisicing elit.
                        Natus quos numquam atque exercitationem reprehenderit
                        voluptas dolores ad repudiandae asperiores. Excepturi error
                        dolor at veniam, modi vel quos tempora pariatur eaque.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item vf-accordion__item">
                    <h2 class="accordion-header vf-accordion__header">
                      <button class="accordion-button vf-accordion__btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour3" aria-expanded="false">
                        Why You should become an Investor?
                      </button>
                    </h2>
                    <div id="collapseFour3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion3">
                      <div class="accordion-body vf-accordion__body">
                        ami ipsum dolor sit amet consectetur adipisicing elit. Natus
                        quos numquam atque exercitationem reprehenderit voluptas
                        dolores ad repudiandae asperiores. Excepturi error dolor at
                        veniam, modi vel quos tempora pariatur eaque.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="list-test">
                <div class="accordion vf-accordion" id="faqAccordion4">
                  <div class="accordion-item vf-accordion__item">
                    <h2 class="accordion-header vf-accordion__header">
                      <button class="accordion-button vf-accordion__btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4" aria-expanded="true">
                        Why You should become an Investor?
                      </button>
                    </h2>
                    <div id="collapseOne4" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion4">
                      <div class="accordion-body vf-accordion__body">
                        tara ipsum dolor sit amet consectetur adipisicing elit.
                        Natus quos numquam atque exercitationem reprehenderit
                        voluptas dolores ad repudiandae asperiores. Excepturi error
                        dolor at veniam, modi vel quos tempora pariatur eaque.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item vf-accordion__item">
                    <h2 class="accordion-header vf-accordion__header">
                      <button class="accordion-button vf-accordion__btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo4" aria-expanded="false">
                        Can I Invest Using Cryptocurrency?
                      </button>
                    </h2>
                    <div id="collapseTwo4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion4">
                      <div class="accordion-body vf-accordion__body">
                        she ipsum dolor sit amet consectetur adipisicing elit. Natus
                        quos numquam atque exercitationem reprehenderit voluptas
                        dolores ad repudiandae asperiores. Excepturi error dolor at
                        veniam, modi vel quos tempora pariatur eaque.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item vf-accordion__item">
                    <h2 class="accordion-header vf-accordion__header">
                      <button class="accordion-button vf-accordion__btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false">
                        Why You Choose Us?
                      </button>
                    </h2>
                    <div id="collapseThree4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion4">
                      <div class="accordion-body vf-accordion__body">
                        tumi ipsum dolor sit amet consectetur adipisicing elit.
                        Natus quos numquam atque exercitationem reprehenderit
                        voluptas dolores ad repudiandae asperiores. Excepturi error
                        dolor at veniam, modi vel quos tempora pariatur eaque.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item vf-accordion__item">
                    <h2 class="accordion-header vf-accordion__header">
                      <button class="accordion-button vf-accordion__btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour4" aria-expanded="false">
                        Why You should become an Investor?
                      </button>
                    </h2>
                    <div id="collapseFour4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion4">
                      <div class="accordion-body vf-accordion__body">
                        ami ipsum dolor sit amet consectetur adipisicing elit. Natus
                        quos numquam atque exercitationem reprehenderit voluptas
                        dolores ad repudiandae asperiores. Excepturi error dolor at
                        veniam, modi vel quos tempora pariatur eaque.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- FAQ End -->
   

    <!-- Contact  -->
    <div class="section contact-section">
      <div class="container">
        <div class="row g-4 justify-content-md-between">
          <div class="col-md-6 col-xl-6">
            <h2 class="mt-0 text-center mb-5 text-md-start text-capitalize contact-section__title">
              Get In Touch With our Aviation Services
            </h2>
            <ul class="list list--column">
              <li class="list--column__item">
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-shrink-0 contact-icon-box">
                    <img src="assets/img/icon-location-pin.png" alt="viserfly" class="contact-icon">
                  </div>
                  <div class="ms-5">
                    <p class="mb-2 fw-bold text-capitalize t-text-white xxl-text">
                      Office Address
                    </p>
                    <p class="mb-0 t-text-white">
                     H.No.173-174, Pocket-25, Sector-24, Rohini, Delhi-110085
                    </p>
                   
                  </div>
                </div>
              </li>
              <li class="list--column__item">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 contact-icon-box">
                    <img src="assets/img/icon-paper-plane.png" alt="viserfly" class="contact-icon">
                  </div>
                  <div class="ms-5">
                    <p class="mb-2 fw-bold text-capitalize t-text-white xxl-text">
                      Email Address
                    </p>
                    <p class="mb-0 t-text-white"><a href="mailto:info@gniasjewar.com" style="color:#fff;" class="__cf_email__" data-cfemail="49212c252526092d2c2426672a2624"> info@gniasjewar.com</a></p>
                    
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="query bg--light-1">
              <h3 class="query__title text-center text-lg-start text-capitalize mt-0">
                join with us
              </h3>
              <form action="#" class="row g-4">
                <div class="col-12">
                  <input type="email" class="form-control form-control-custom form-control-custom--outline form-control-custom--outline-dark" placeholder="email address">
                </div>
                 <div class="col-12">
                  <input type="text" class="form-control form-control-custom form-control-custom--outline form-control-custom--outline-dark" 
                  placeholder="Enter Phone">
                </div>
                <!--<div class="col-12">-->
                <!--  <div class="custom--nice-select">-->
                <!--    <select>-->
                <!--      <option data-display="Courses">Select Courses</option>-->
                <!--      <option value="1">Airport Ground Staff</option>-->
                <!--      <option value="2">Airport Loaders</option>-->
                <!--      <option value="3">Airport Security Staff</option>-->
                <!--      <option value="3">Airport Security Staff</option>-->
                <!--      <option value="4">Airport Cargo Staff</option>-->
                <!--      <option value="5">Front Desk Receptionist</option>-->
                <!--    </select>-->
                <!--  </div>-->
                <!--</div>-->
                <div class="col-12">
                  <textarea cols="30" rows="5" class="form-control form-control-custom--outline form-control-custom--dark" placeholder="Writing Something"></textarea>
                </div>
                <div class="col-12">
                  <a href="#" class="btn btn--lg btn--primary text-capitalize">
                    Submit Now
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

   
     <!-- Client Section  -->
    <div class="section--sm section--top">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="client-slider">
              <div class="client-slider__item">
                <img src="img/client/1.png" alt="" class="img-fluid mx-auto">
              </div>
              <div class="client-slider__item">
                <img src="img/client/2.png" alt="" class="img-fluid mx-auto">
              </div>
              <div class="client-slider__item">
                <img src="img/client/3.png" alt="" class="img-fluid mx-auto">
              </div>
              <div class="client-slider__item">
                <img src="img/client/4.png" alt="" class="img-fluid mx-auto">
              </div>
              <div class="client-slider__item">
                <img src="img/client/5.png" alt="" class="img-fluid mx-auto">
              </div>
              <div class="client-slider__item">
                <img src="assets/img/client-3.png" alt="" class="img-fluid mx-auto">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Client Section End -->
    
    
    <!-- Blog Section  -->
    <!-- <section class="blog-section">
      <div class="section__head">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-xl-8">
              <div class="text-center">
                
                <h2 class="text-capitalize heading-k mt-0">Our latest blog</h2>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <div class="blog-post">
              <a href="#" class="t-link blog-post__img">
                <img
                  src="img/blog-1.jpg"
                  alt=""
                  class="blog-post__img-is"
                />
              </a>
              <div class="blog-post__body">
                
                <h4 class="text-capitalize mt-0">
                  <a href="#" class="t-link blog-post__title">
                   Here’s a List of Airport Jobs in India
                  </a>
                </h4>
                <ul class="list list--row">
                  <li class="list--row__item">
                    <div class="blog-post__meta">
                      <div class="blog-post__meta-icon me-2">
                        <i class="bx bxs-user"></i>
                      </div>
                      <div class="blog-post__meta-text text-uppercase">
                        By
                        <a href="#" class="t-link t-link--primary t-text">Robart Jons</a>
                      </div>
                    </div>
                  </li>
                  <li class="list--row__item">
                    <div class="blog-post__meta">
                      <div class="blog-post__meta-icon me-2">
                        <i class="bx bx-message-dots"></i>
                      </div>
                      <div class="blog-post__meta-text text-uppercase">
                        <a href="#" class="t-link t-link--primary t-text">25 comments</a>
                      </div>
                    </div>
                  </li>
                </ul>
                <p class="blog-post__article mt-4 mb-0">
                  Airports are bustling hubs of activity, connecting people and goods across the globe. Behind the scenes, a diverse array of…


                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="blog-post">
              <a href="#" class="t-link blog-post__img">
                <img
                  src="img/blog-2.jpg"
                  alt=""
                  class="blog-post__img-is"
                />
              </a>
              <div class="blog-post__body">
              
                <h4 class="text-capitalize mt-0">
                  <a href="#" class="t-link blog-post__title">
                   The Evolution of Airport Recruitment Strategies
                  </a>
                </h4>
               <ul class="list list--row">
                  <li class="list--row__item">
                    <div class="blog-post__meta">
                      <div class="blog-post__meta-icon me-2">
                        <i class="bx bxs-user"></i>
                      </div>
                      <div class="blog-post__meta-text text-uppercase">
                        
                        <a href="#" class="t-link t-link--primary t-text">March 27, 2024</a>
                      </div>
                    </div>
                  </li>
                  <li class="list--row__item">
                    <div class="blog-post__meta">
                      <div class="blog-post__meta-icon me-2">
                        <i class="bx bx-message-dots"></i>
                      </div>
                      <div class="blog-post__meta-text text-uppercase">
                        <a href="#" class="t-link t-link--primary t-text">24 comments</a>
                      </div>
                    </div>
                  </li>
                </ul>
                <p class="blog-post__article mt-4 mb-0">
                  Airport recruitment strategies have undergone significant transformations in recent years, driven by technological advancements, changing workforce dynamics, and evolving industry…
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="blog-post">
              <a href="#" class="t-link blog-post__img">
                <img
                  src="img/blog-3.jpg"
                  alt=""
                  class="blog-post__img-is"
                />
              </a>
              <div class="blog-post__body">
               
                <h4 class="text-capitalize mt-0">
                  <a href="#" class="t-link blog-post__title">
                   What are future trends in the Aviation Jobs Industry?
                  </a>
                </h4>
               <ul class="list list--row">
                  <li class="list--row__item">
                    <div class="blog-post__meta">
                      <div class="blog-post__meta-icon me-2">
                        <i class="bx bxs-user"></i>
                      </div>
                      <div class="blog-post__meta-text text-uppercase">
                        
                        <a href="#" class="t-link t-link--primary t-text">February 26, 2024,</a>
                      </div>
                    </div>
                  </li>
                  <li class="list--row__item">
                    <div class="blog-post__meta">
                      <div class="blog-post__meta-icon me-2">
                        <i class="bx bx-message-dots"></i>
                      </div>
                      <div class="blog-post__meta-text text-uppercase">
                        <a href="#" class="t-link t-link--primary t-text">38 comments</a>
                      </div>
                    </div>
                  </li>
                </ul>
                <p class="blog-post__article mt-4 mb-0">
                  Airports play a vital role as economic engines in various ways. Airports contribute significantly to local and regional employment. Aviation…
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Blog Section End -->
    
   <?php 
   include('include/footer.php');
   ?>


<script>
  $(".toggle").on("click", function () {
    $(".container").toggleClass("microsoft");
});
</script>

<script>
  $(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})
</script>



<script>
  $('.verticleslider').slick({
  dots: false,
  arrows:false,
  infinite: true,
  vertical: true,           
  verticalSwiping: true,      
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>