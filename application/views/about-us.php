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
						<a href="<?= base_url() ?>">Home</a>
						<a href="<?= base_url() ?>/tentang_user/viewTentang">About Us</a>
					</div>
					<h2 style="color: white; text-shadow: 2px 2px 4px #000000; letter-spacing: 10px; word-spacing: 10px;">About Us</h2>
				</div>
            </div>
        </div>
	</section>
	<!--================End Home Banner Area =================-->

	
	<!--================Start About Us Area =================-->
	<section class="about_us_area section_gap_top">
		<div class="container">
			<div class="row about_content align-items-center">
			
				<div class="col-lg-6">
					<div class="section_content">
						<h6>Tentang Kami</h6>
						<h1>Digital <br>Creative</h1>
						<?php foreach($DCDesc as $val) : echo html_entity_decode($val['deskripsi']); endforeach;?>
						<!-- <a class="primary_btn" href="<?php echo base_url(); ?>Contact">Learn More</a> -->
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_us_image_box justify-content-center">
						<img class="img-fluid w-100" src="<?php echo base_url(); ?>images/00.jpg" alt="">
					</div>
				</div>
			
			</div>
		</div>
	</section>
	<!--================End About Us Area =================-->


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
			</div>
		</section>
		<!--================ End Testimonials Area ================-->
	
	


		<!--================ Start Frequently Asked Questions Area ================-->
		<br><br><br><br>
		

		<section class="frequently_area">
			<div class="container">
				<div class="row">
				</div>
			</div>
		</section>
        <!--================ End Frequently Asked Questions Area ================-->
        <!-- Optional JavaScript -->
		<!--================ End Frequently Asked Questions Area ================-->
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
		<script src="js/gmaps.min.js"></script>
		<script src="js/theme.js"></script>
	

</body> 