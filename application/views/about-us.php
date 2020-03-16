<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.png">
	<title>Digital Creative</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/linericon/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
</head>

<body class="about_page">
	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
			<div class="container">
				<div class="banner_content text-center">
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="about-us.html">About</a>
					</div>
					<h2>About Us</h2>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Start About Us Area =================-->
	<?php foreach ($tentang as $value) : ?>
		<section class="about_us_area section_gap_top">
			<div class="container">
				<div class="row about_content align-items-center">
					<div class="col-lg-6">
						<div class="section_content">
							<h6><?= $value['jabatan'] ?></h6>
							<h1><?= $value['nama'] ?></h1>
							<p style="font-size: 22px;"><?= $value['quote'] ?></p>
							<div class="right-divider hidden-sm hidden-xs">
								<?php if ($value['path_ig'] != null) : ?>
									<h5 style="color: white; padding-bottom: 2px; padding-top: 2px; font-size: 13px;">INSTAGRAM</h5>
									<h6><a href="<?= 'http://www.instagram.com/' . $value['path_ig'] ?>" target="_blank" style="text-decoration: none"><?= $value['path_ig'] ?></a></h6>
									<br>
								<?php endif; ?>
								<?php if ($value['path_fb'] != null) : ?>
									<h5 style="color: white; padding-bottom: 2px; padding-top: 2px; font-size: 13px;">FACEBOOK</h5>
									<h6><a href=" <?= 'http://www.facebook.com/' . $value['path_fb'] ?>" target="_blank" style="text-decoration: none"><?= $value['path_fb'] ?></a></h6>
									<br>
								<?php endif; ?>
								<?php if ($value['path_twit'] != null) : ?>
									<h5 style="color: white; padding-bottom: 2px; padding-top: 2px; font-size: 13px;">TWITTER</h5>
									<h6><a href="<?= 'http://www.twitter.com/' . $value['path_twit'] ?>" target="_blank" style="text-decoration: none"><?= $value['path_twit'] ?></a></h6>
									<br>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about_us_image_box justify-content-center">
							<img class="img-fluid w-100" src="<?php echo base_url(); ?>images/<?= $value['path_gambar'] ?>" alt="">
						</div>
					</div>
				</div>
			</div>
		<?php endforeach ?>

		</section>
		<!--================End About Us Area =================-->

		<!--========== Start Testimonials Area ==================-->
		<section class="testimonials_area section_gap">
			<div class="container">
				<div class="testi_slider owl-carousel">
					<div class="testi_item">
						<img src="<?php echo base_url(); ?>assets/img/quote.png" alt="">
						<h4>Fanny Spencer</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it,
								you travel
								across her face <br> and She is the host to your journey.
							</p>
						</div>
					</div>
					<div class="testi_item">
						<img src="<?php echo base_url(); ?>assets/img/quote.png" alt="">
						<h4>Fanny Spencer</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it,
								you travel
								across her face <br> and She is the host to your journey.
							</p>
						</div>
					</div>
					<div class="testi_item">
						<img src="<?php echo base_url(); ?>assets/img/quote.png" alt="">
						<h4>Fanny Spencer</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it,
								you travel
								across her face <br> and She is the host to your journey.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End Testimonials Area ================-->


		<!--================ Start Frequently Asked Questions Area ================-->
		<br><br><br><br>

		<section class="frequently_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mt-6">
						<div class="main_title">
							<h2>Frequently Asked Questions</h2>
							<h1>Frequently Asked Questions</h1>
						</div>
					</div>
				</div>
				<div class="row frequent_inner">
					<div class="col-lg-5 col-md-5">
						<div class="frequent_item">
							<h3>We Believe that Interior beauty Lasts Long</h3>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
								especially in the workplace. That’s why it’s crucial that as women.</p>
						</div>
					</div>
					<div class="offset-lg-2 col-lg-5 offset-md-2 col-md-5">
						<div class="frequent_item">
							<h3>We Believe that Interior beauty Lasts Long</h3>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
								especially in the workplace. That’s why it’s crucial that as women.</p>
						</div>
					</div>
					<div class="col-lg-5 col-md-5">
						<div class="frequent_item">
							<h3>We Believe that Interior beauty Lasts Long</h3>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
								especially in the workplace. That’s why it’s crucial that as women.</p>
						</div>
					</div>
					<div class="offset-lg-2 col-lg-5 offset-md-2 col-md-5 ">
						<div class="frequent_item">
							<h3>We Believe that Interior beauty Lasts Long</h3>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
								especially in the workplace. That’s why it’s crucial that as women.</p>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 ">
						<div class="frequent_item last-child">
							<h3>We Believe that Interior beauty Lasts Long</h3>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
								especially in the workplace. That’s why it’s crucial that as women.</p>
						</div>
					</div>
					<div class="offset-lg-2 col-lg-5 offset-md-2 col-md-5 ">
						<div class="frequent_item last-child">
							<h3>We Believe that Interior beauty Lasts Long</h3>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
								especially in the workplace. That’s why it’s crucial that as women.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End Frequently Asked Questions Area ================-->
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/stellar.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
		<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
		<script src="vendors/isotope/isotope-min.js"></script>
		<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
		<script src="vendors/counter-up/jquery.counterup.min.js"></script>
		<script src="js/mail-script.js"></script>
		<!--gmaps Js-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
		<script src="js/gmaps.min.js"></script>
		<script src="js/theme.js"></script>

</body>