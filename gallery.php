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
                    <li class="brtextclr">Gallery</li>
                </ul>
            </div>
        </div>
    </div>
 </section>
 <!-- end breadcrumb section --->

<section class="bgcgrayss py-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center fontsssd1">
                <h3>GNI Aviation Photo Gallery</h3>
                <p>Welcome to our photo gallery section - Explore our training sessions, events, and success stories</p>
            </div>
        </div>

        <div class="row mt-4  wdsssdgal img-gallery-magnific">
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/one.jpg" title="GNI Aviation Training Session">
					<img src="gallery/one.jpg" alt="GNI Aviation Training Session - Classroom Learning" />

				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/two.jpg" title="Aviation Industry Workshop">
					<img src="gallery/two.jpg" alt="Aviation Industry Workshop - Practical Training" />

				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/three.jpg" title="Airport Job Placement Event">
					<img src="gallery/three.jpg" alt="Airport Job Placement Event - Career Fair" />

				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/four.jpg" title="Ground Staff Training">
					<img src="gallery/four.jpg" alt="Ground Staff Training Program - GNI Aviation" />

				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/five.jpg" title="Customer Service Training">
					<img src="gallery/five.jpg" alt="Customer Service Training for Aviation Industry" />

				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/six.jpg" title="Aviation Career Guidance">
					<img src="gallery/six.jpg" alt="Aviation Career Guidance and Mentoring Session" />

				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/seven.jpg" title="Airport Operations Training">
					<img src="gallery/seven.jpg" alt="Airport Operations Training - Hands-on Learning" />

				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/eight.jpg" title="Professional Development Workshop">
					<img src="gallery/eight.jpg" alt="Professional Development Workshop at GNI Aviation" />

				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/nine.jpg" title="Interview Preparation Session">
					<img src="gallery/nine.jpg" alt="Interview Preparation Session for Airline Jobs" />

				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/tn.jpg" title="Grooming and Personality Training">
					<img src="gallery/tn.jpg" alt="Grooming and Personality Training for Aviation Candidates" />

				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/eleven.jpg" title="Certificate Distribution Ceremony">
					<img src="gallery/eleven.jpg" alt="Certificate Distribution Ceremony - Successful Trainees" />

				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/twelve.jpg" title="Aviation Industry Experts Session">
					<img src="gallery/twelve.jpg" alt="Session with Aviation Industry Experts" />

				</a>
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