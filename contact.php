<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

</div>

<div id="service-content" class="">
<?php
		include "head.php";
	?>

<body>

	<?php
		include "header.php";
	?>

<!-- inner page banner-->
<div class="inner-banner">
	
</div>
<!-- //inner page banner-->

<!-- Contact page -->
<section class="contact py-5 my-lg-5">
	<div class="container">
		<h3 class="heading text-center text-capitalize mb-5">Contact Us</h3>
		<div class="row contact_information">
			<div class="col-md-6 contact_left p-lg-5 p-4">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.2218329941516!2d121.16018071543579!3d14.586431689811542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b8a9c40a6701%3A0x966115376a70369c!2sEvergreen+Executive+Village!5e0!3m2!1sen!2sph!4v1527146118638" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-md-6 mt-md-0 mt-4">
				<div class="contact_right p-lg-5 p-4">
					<form action="connect.php" method="post">
						<div class="w3_agileits_contact_left" style="padding: 10px;">
							<h3 class="mb-3">Contact form</h3>
							<input type="text" name="name" placeholder="Your Name" required=""><br>
							<input type="email" name="email" placeholder="Your Email" required=""><br>
							<input type="text" name="phone" placeholder="Phone Number" required=""><br>
							<textarea placeholder="Your Description Here..." name="message" required=""></textarea><br>
						</div>
						<div class="w3_agileits_contact_right">
							<input type="submit" value="Submit">
						</div>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="mt-5 information">
					<div class="row">
						<div class="col-sm-2 mb-sm-0 mb-3">
							<i class="fas fa-comments"></i>
						</div>
						<div class="col-sm-10">
							<h4 class="text-uppercase mb-4">General Communication</h4>
							<p class="mb-3 text-capitalize">for general queries, including partnership opportunities, please email us at <a href="mailto:info@example.com">info@example.com</a></p>
						</div>
					</div>
			</div>
				</div>
				<div class="col-md-6 mt-md-5 mt-2 information">
					<div class="row">
						<div class="col-sm-2 mb-sm-0 mb-3">
							<i class="fas fa-life-ring"></i>
						</div>
						<div class="col-sm-10">
							<h4 class="text-uppercase mb-4">Technical Support</h4>
							<p class="mb-3 text-capitalize">we are here to help! if you have technical issues, contact support <span>+12 388 455 6789</span>.</p>
						</div>
					</div>
				</div>
		</div>
	</div>
</section>
<!-- //Contact page -->

<!-- footer -->	
<?php

include "footer.php";

?>
<!-- footer -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->

</body>
</div>
</html>