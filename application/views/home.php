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
	
	<!-- loading  -->
	<div class="progress" id="PreLoaderBar">
		<div class="indeterminate"></div>
	</div>
	<!-- end loading  -->
    <!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="home_left_img">
							<img class="img-fluid" src="<?php echo base_url(); ?>assets/img/banner/home-left.png" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="banner_content">
							<h2>
								Kami Hadir Disini <br>
								Untuk Memberikan Pelayan Terbaik <br>
								Untuk Kamu
							</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore
								magna aliqua. Ut enim ad minim.
							</p>
							<div class="d-flex align-items-center">
								
								<a class="primary_btn" href="#">Learn More</a>
							</div>
						</div>
					</div>
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
						<p><?php foreach($DCDesc as $val) : echo $val['deskripsi']; endforeach;?></p>
						<a class="primary_btn" href="<?php echo base_url(); ?>Contact">Learn More</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_us_image_box justify-content-center">
						<img class="img-fluid w-100" src="<?php echo base_url(); ?>images/109317.jpg" alt="">
					</div>
				</div>
			
			</div>
		</div>
	</section>
	<!--================End About Us Area =================-->

	<!--================First Upcoming Games Area =================-->
	<section class="upcoming_games_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>Layanan Kami</h2>
						<h1>Layanan Kami</h1>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="<?php echo base_url(); ?>assets/img/b_map1.jpg" alt="" width="250px" height="200px" >

						<div class="upcoming_title">
							<h3><a href="<?php echo base_url(); ?>kelas">Kursus Pemograman</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="<?php echo base_url(); ?>assets/img/b_map2.jpg" alt="" width="250px" height="200px" >
						<div class="upcoming_title">
							<h3><a href="<?php echo base_url(); ?>kelas">Aplikasi Mobile</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="<?php echo base_url(); ?>assets/img/b_map3.jpg" alt="" width="250px" height="200px" >
						<div class="upcoming_title">
							<h3><a href="<?php echo base_url(); ?>kelas">Website</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">

						<img src="<?php echo base_url(); ?>assets/img/b_map4.jpg" alt="" width="250px" height="200px" >
						<div class="upcoming_title">
							<h3><a href="<?php echo base_url(); ?>kelas">Konsultasi IT</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Upcoming Games Area =================-->

	<!--================Start Recent Update Area =================-->
	<section class="recent_update_area section_gap">
		<div class="container">
			<div class="recent_update_inner">
						<div class="row about_content2 align-items-center">		
						<?php foreach($tentang as $val) : ?>
							<div class="col-lg-6">
								<div class="about_us_image_box">
									<img class="img-fluid w-100" src="<?php echo base_url(); ?>images/<?= $val['path_gambar'] ?>" alt="" style="object-fit: cover;">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="section_content ">
									<h6><?= $val['nama'] ?></h6>
									<h1><?= $val['jabatan'] ?></h1>
									<p style="text-align: justify;"><?= $val['quote'] ?></p>
								</div>
							</div>
						<?php endforeach; ?>
						</div>			
			</div>
		</div>
	</section>
	<!--================End Recent Update Area =================-->


	<!--================ Start Gallery Area =================-->
	<section class="gallery_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>Portofolio</h2>
						<h1>Portofolio</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
					<?php foreach($portofolio as $val) : ?>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<a href="portofolio_user">
							<div class="single-gallery">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="<?php echo base_url(); ?>images/<?= $val['path_gambar'] ?>" alt="" style="object-fit: cover; height: 350px">
								<div class="content">
								<i class="lnr lnr-eye"></i>
								</div>
							</div>
							</a>
						</div>
					<?php endforeach; ?>
					</div>
				</div>
				<!-- <div class="col-lg-4 hidden-md hidden-sm">
					<div class="single-gallery">
						<div class="overlay"></div>
						<img class="img-fluid w-100" src="<?php echo base_url(); ?>assets/img/gallery_img4.png" alt="">
						<div class="content">
							<a class="pop-up-image" href="<?php echo base_url(); ?>assets/img/gallery_img4.png">
								<i class="lnr lnr-eye"></i>
							</a>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!--================ End Gallery Area =================-->


	<!--========== Start Testimonials Area ==================-->
	<!-- <section class="testimonials_area section_gap">
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
	</section> -->
	<!--================ End Testimonials Area ================-->

<!--================ Start Pricing Plans Area ================-->
<!-- <section class="pricing_area section_gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="main_title">
							<h2>Pricing Plans</h2>
							<h1>Pricing Plans</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="pricing_item">
							<h3 class="p_title">Android Package</h3>
							<h1 class="p_price">Rp.900.000</h1>
							<div class="p_list">
								<ul>
									<li>Layanan Kursus Selama 8x</li>
									<li>Modul yang kompleks</li>
									<li>Final Project Membuat Mobile App</li>
								</ul>
							</div>
							<div class="p_btn">
								<a class="gradient_btn" href="#"><span>Join Now</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing_item active">
							<h3 class="p_title">Website Package</h3>
							<h1 class="p_price">Rp.690.000</h1>
							<div class="p_list">
								<ul>
									<li>Layanan Kursus Selama 8x</li>
									<li>Modul yang Kompleks</li>
									<li>Final Project Membuat Website</li>
								</ul>
							</div>
							<div class="p_btn">
								<a class="gradient_btn" href="#"><span>Join Now</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 hidden-md">
						<div class="pricing_item">
							<h3 class="p_title">Basic Package</h3>
							<h1 class="p_price">Rp.350.000</h1>
							<div class="p_list">
								<ul>
									<li>Layanan Kursus Selama 8x</li>
									<li>Modul yang Kompleks</li>
									<li>Final Project</li>
								</ul>
							</div>
							<div class="p_btn">
								<a class="gradient_btn" href="#"><span>Join Now</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section> -->
    <!--================ End Pricing Plans Area ================-->

	<!--================ Start Frequently Asked Questions Area ================-->
	<section class="frequently_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>Frequently Asked Questions</h2>
						<h1>Frequently Asked Questions</h1>
					</div>
				</div>
			</div>
			<div class="row frequent_inner"> 
				<?php 
				$i=0;
				foreach($tentang_faq as $val) : ?>
				<div class="col-lg-5 col-md-5">
					<div class="frequent_item">
						<h3><?= $val['question'] ?></h3>
						<p><?= $val['answer'] ?></p>
					</div>
				</div>	
				<?php
				if($i%2 == 0) {?>
					<div class="offset-lg-2 offset-md-2">	
					</div>
				<?php 
				}
				$i++;
				endforeach; ?>
			</div>
		</div>
	</section>
	<!--================ End Frequently Asked Questions Area ================-->

	<!--================ Start Blog Area ================-->
	<section class="blog_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>Latest Blog Posts</h2>
						<h1>Latest Blog Posts</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<?php foreach($blogcomment as $val) : ?>
				<a class="title" href="#">
				<div class="col-lg-4 col-md-6">
					<div class="blog_items">
						<div class="blog_img_box">
							<img class="img-fluid" src="<?php echo base_url(); ?>images/<?= $val['path_gambar']; ?>" alt="" style="object-fit: cover; height: 220px">
						</div>
						
						<div class="blog_content">
							<a class="title" href="blog.html"><?= $val['judul'] ?><br></a>
							<p>
							<?php
							$text = html_entity_decode($val['text']);
							$text = str_replace("&nbsp;",' ',$text);
							$text = strip_tags($text);
							echo substr($text,0,150);?> <a class="title" href="">Read More</a></p> <br>
							<div class="date">
								<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?= $val['tanggal_publish'] ?></a>
								<a href="#"><i class="fa fa-star" aria-hidden="true"></i>
								<?php foreach($blog as $vals) : 
										if($val['id'] == $vals['id']){
											echo $vals['rate'];
										}
									endforeach;
									
									?>
								</a>
								<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>
								<?= $val['comment'] ?></a>
							</div>
						</div>
					</div>
				</div>
				</a>
				<?php endforeach; ?>



			</div>
		</div>
	</section>
	<!--================ End Blog Area ================-->
	
	<!--================ Start Newsletter Area ================-->
	<!---
	<section class="newsletter_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="newsletter_inner">
						<h1>Subscribe Our Newsletter</h1>
						<p>We won’t send any kind of spam</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<aside class="newsletter_widget">
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
									 required="" type="email">
									<button class="btn primary_btn">Subscribe</button>
								</div>
							</form>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section>
	-->
	<!--================ End Newsletter Area ================-->
	
</body>
		<!-- JS -->
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
