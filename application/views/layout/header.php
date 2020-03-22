<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.png">
	<title>Digital Creative</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/linericon/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/flaticon/flaticon.css">
	<!-- main css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<?php
						$nav = $this->uri->segment(1);
					?>
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center ">
							<li class="nav-item <?=($nav=='')?'nav-item active':''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li>

							<li class="nav-item <?=($nav=='tentang_user')?'nav-item active':''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>tentang_user">About</a></li>
							
							<li class="nav-item <?=($nav=='portofolio_user')?'nav-item active':''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>portofolio_user">Portofolio </a></li>

							<li class="nav-item <?=($nav=='kelas')?'nav-item active':''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>kelas">Layanan Kami</a></li>

							<li class="nav-item <?=($nav=='blog_user')?' nav-item active':''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>blog_user">Blog</a></li>

							<li class="nav-item <?=($nav=='Contact')?'nav-item active':''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Contact">Contact</a></li>
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	 <!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/popper.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/stellar.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/isotope/isotope-min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/counter-up/jquery.waypoints.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/counter-up/jquery.counterup.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/mail-script.js"></script>
		<!--gmaps Js-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
		<script src="<?php echo base_url(); ?>assets/js/gmaps.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
	</body>

