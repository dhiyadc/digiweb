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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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

	<!--================Deskripsi Perusahaan Area =================-->

	<section class="about_us_area section_gap_top">
		<div class="container">
			<div class="row about_content align-items-center">

				<div class="col-lg-6">
					<div class="about_us_image_box justify-content-center">
						<p><?php echo html_entity_decode($DCDesc['deskripsi']); ?></p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="section_content">
						<h6>Tentang Kami</h6>
						<h1>Digital <br>Creative</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->
	<!--================Start About Us Area =================-->

	<!-- Team -->
	<section id="team" class="pb-5">
		<div class="container">
			<h5 class="section-title h1">OUR TEAM</h5>
			<div class="row">
				<!-- Team member -->
				<?php foreach ($tentang as $val) : ?>
					<!-- <span class="blogBox moreBox" style="display: none"> -->
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
							<div class="mainflip">
								<div class="frontside">
									<div class="card ">
										<div class="card-body text-center">
											<h4 class="card-title">/<?= $val['jabatan'] ?>/</h4>
											<p><img class=" img-fluid" src="<?= base_url(); ?>images/<?= $val['path_gambar'] ?>" alt="card image" style="object-fit: cover"></p>
											<br>
											<h4 class="card-title"><?= $val['nama'] ?></h4>

											<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="backside">
									<div class="card">
										<div class="card-body text-center mt-4">
											<h4 class="card-title"><?= $val['nama'] ?></h4>
											<p class="card-text"><?= $val['quote'] ?></p>
											<ul class="list-inline">
												<?php if ($val['path_fb']) : ?>
													<li class="list-inline-item">
														<a class="social-icon text-xs-center" target="_blank" href="http://www.facebook.com/<?= $val['path_fb']; ?>">
															<i class="fa fa-facebook"></i>
														</a>
													</li>
												<?php endif ?>
												<?php if ($val['path_twit']) : ?>
													<li class="list-inline-item">
														<a class="social-icon text-xs-center" target="_blank" href="http://www.twitter.com/<?= $val['path_twit']; ?>">
															<i class="fa fa-twitter"></i>
														</a>
													</li>
												<?php endif ?>
												<?php if ($val['path_ig']) : ?>
													<li class="list-inline-item">
														<a class="social-icon text-xs-center" target="_blank" href="http://www.instagram.com/<?= $val['path_ig']; ?>">
															<i class="fa fa-instagram"></i>
														</a>
													</li>
												<?php endif ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- </span> -->
				<?php endforeach ?>
				<div id="loadMore">
					<center><a href="#"><button>LoadMore</button></a></center>
				</div>
			</div>
		</div>
	</section> <!-- ./Team member -->

	<!--================End Upcoming Games Area =================-->


	<!-- <section class="about_us_area section_gap_top">
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

		</section> -->
	<!--================End About Us Area =================-->






	<!--================ Start Frequently Asked Questions Area ================-->
	<!-- <br><br><br><br>
		

		<section class="frequently_area">
			<div class="container">
				<div class="row">
				</div>
			</div>
		</section> -->
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
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<Script>
		$(document).ready(function() {
			$(".moreBox").slice(0, 3).show();
			if ($(".blogBox:hidden").length != 0) {
				$("#loadMore").show();
			}
			$("#loadMore").on('click', function(e) {
				e.preventDefault();
				$(".moreBox:hidden").slice(0, 3).slideDown();
				if ($(".moreBox:hidden").length == 0) {
					$("#loadMore").fadeOut('slow');
				}
			});
		});
	</Script>



</body>