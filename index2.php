<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>iPark</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" type="image/png" href="/favicon.png"/>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</head>
	<body>
		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php"><img style="height: 100%;" src="/images/logo.png"></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li class="hl">Home</li>
					<li>Services</li>
					<li>Careers</li>
					<li class="abt">About Us</li>
					<li>Contact</li>
				</ul>
			</nav>

		<script type="text/javascript">

			$(document).ready(function(){

				$.ajax({
                            type: 'post',
                            url: 'home.php	',
                            success: function (response) {
                              $('#display').html("");
                              $('#display').html(response);
                            }
                          });
			});
		</script>
		<div id="display">
			
		</div>

	</body>
</html>