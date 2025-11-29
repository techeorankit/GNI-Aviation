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
                <h3>Photo Gallery</h3>
                <p>Welcome to our photo gallery section</p>
            </div>
        </div>

        <div class="row mt-4  wdsssdgal img-gallery-magnific">
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/one.jpg" title="9.jpg">
					<img src="gallery/one.jpg" alt="9.jpg" />
					
				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/two.jpg" title="10.jpg">
					<img src="gallery/two.jpg" alt="10.jpg" />
					
				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/three.jpg" title="3.jpg">
					<img src="gallery/three.jpg" alt="3.jpg" />
					
				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/four.jpg" title="4.jpg">
					<img src="gallery/four.jpg" alt="4.jpg" />
					
				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/five.jpg" title="1.jpg">
					<img src="gallery/five.jpg" alt="1.jpg" />
					
				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/six.jpg" title="2.jpg">
					<img src="gallery/six.jpg" alt="2.jpg" />
					
				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/seven.jpg" title="5.jpg">
					<img src="gallery/seven.jpg" alt="5.jpg" />
					
				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/eight.jpg" title="6.jpg">
					<img src="gallery/eight.jpg" alt="6.jpg" />
					
				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/nine.jpg" title="7.jpg">
					<img src="gallery/nine.jpg" alt="7.jpg" />
					
				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/tn.jpg" title="8.jpg">
					<img src="gallery/tn.jpg" alt="8.jpg" />
					
				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/eleven.jpg" title="12.jpg">
					<img src="gallery/eleven.jpg" alt="12.jpg" />
					
				</a>
			</div>
			<div class="col-lg-3 magnific-img">
				<a class="image-popup-vertical-fit" href="gallery/twelve.jpg" title="13.jpg">
					<img src="gallery/twelve.jpg" alt="13.jpg" />
					
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