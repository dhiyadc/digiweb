<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.png" type="image/png">
	<title>Digital Creative</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/linericon/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body class="blog_page">
	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
				data-background=""></div>
			<div class="container">
				<div class="banner_content text-center">
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="single-blog.html">Blog Details</a>
					</div>
					<h2>BLOG DETAILS</h2>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Blog Area =================-->
	<section class="blog_area single-post-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post row">
						<div class="col-lg-12">
							<div class="feature-img">
							<center><img src="<?= base_url().'images/'.$blog['path_gambar']?>" alt="" height="350px"></center>
							</div>
						</div>
						<div class="col-lg-3  col-md-3">
							<div class="blog_info text-right">
								<div class="post_tag">
									<a href="#">Food,</a>
									<a class="active" href="#">Technology,</a>
									<a href="#">Politics,</a>
									<a href="#">Lifestyle</a>
								</div>
								<ul class="blog_meta list">
									<li><p><?= $blog['author']?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="lnr lnr-user"></i></p></li>
									<li><p><?= $blog['tanggal_publish']?>&nbsp;&nbsp;&nbsp;<i
												class="lnr lnr-calendar-full"></i></p></li>
									<li><p>06 Comments&nbsp;&nbsp;&nbsp;<i class="lnr lnr-bubble"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-md-9 blog_details">
							<h2><?= $blog['judul'] ?></h2>
							<p class="excert">
								<?= $blog['text'] ?>
							</p>
						</div>
					</div>
					<div class="navigation-area">
						<div class="row">
							<div
								class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
								<div class="thumb">
									<a href="#"><img class="img-fluid"
											src="<?php echo base_url(); ?>assets/img/blog/panah.png" alt=""
											width="50px" height="25px"></a>
								</div>
								<div class="arrow">
									<a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
								</div>
								<div class="detials">
									<a href="<?= base_url('')?>/Blog">
										<h4>Back To All Blog</h4>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="comments-area">
						
						<section>
							<!--- React Comment--->
							<div class="row">
								<div class="col-lg mb-5">
									<div class="facebookReactIcons">

										<hr>
										<?php if($this->session->flashdata('message')) :?>
										<div class="alert alert-danger" role="alert">
											<?= $this->session->flashdata('message') ?>
										</div>
										<?php endif; ?>
										<?php if($this->session->flashdata('Berhasil')) :?>
										<div class="alert alert-success" role="alert">
											<?= $this->session->flashdata('Berhasil') ?>
										</div>
										<?php endif; ?>
										<hr>

										<!-- LIKE -->
										<div class="iconBox">
											<a href="<?= base_url(''); ?>Blog/save_ratingli/<?= $blog['id']; ?>"
												class="ico lovo">&#9996;</a>

											<label>Like</label>
										</div>

										<!-- LOVE -->
										<div class="iconBox">

											<a href="<?= base_url(''); ?>Blog/save_ratinglo/<?= $blog['id']; ?>"
												class="ico lovo">&#10084;</a>

											<label>Love</label>
										</div>

										<!-- HAHA -->
										<a class="iconBox"
											href="<?= base_url(''); ?>Blog/save_ratingh/<?= $blog['id']; ?>">
											<div class="icon haha">
												<div class="eyes">
													<span class="eye lEye"></span>
													<span class="eye rEye"></span>
												</div>
												<div class="mouth"></div>
											</div>

											<label>HAHA</label>
										</a>


										<!-- WOW -->

										<a class="iconBox"
											href="<?= base_url(''); ?>Blog/save_ratingw/<?= $blog['id']; ?>">
											<div class="icon wow">
												<div class="eyes">
													<span class="eye lEye"></span>
													<span class="eye rEye"></span>
												</div>
												<div class="mouth"></div>
											</div>
											<label>Wow</label>
										</a>


										<!-- SAD -->

										<a class="iconBox"
											href="<?= base_url(''); ?>Blog/save_ratings/<?= $blog['id']; ?>">
											<div class="icon sad">
												<div class="eyes">
													<span class="eye lEye"></span>
													<span class="eye rEye"></span>
													<span class="tears"></span>
												</div>
												<div class="mouth"></div>
											</div>
											<label>Sad</label>
										</a>

										<!-- ANGRY -->

										<a class="iconBox"
											href="<?= base_url(''); ?>Blog/save_ratinga/<?= $blog['id']; ?>">
											<div class="icon angry">
												<div class="eyes">
													<span class="eye lEye"></span>
													<span class="eye rEye"></span>
												</div>
												<div class="mouth"></div>
											</div>
											<label>Angry</label>
										</a>

									</div>

								</div>
								<!--- --->
						</section>

						<div class="comment-form">
							<h4>Leave a Comment</h4>
							<form action="<?=base_url('')?>Blog/createComment/<?= $blog['id'] ?>" method="POST">
								<div class="form-group form-inline">
									<div class="form-group col-lg-6 col-md-6 name">
										<input type="text" name="nama_komen" class="form-control" id="nama_komen"
											placeholder="Enter Your Name" aria-describedby="emailHelp">
									</div>
								</div>
								<div class="form-group">
									<textarea class="form-control" name="isi_komen" id="isi_komen"
										placeholder="Comment " rows="3" required></textarea>
								</div>
								<button type="submit" name="submit" value="submit" class="primary-btn primary_btn">Post
									Comment</button>

							</form>
						</div>
						<?php foreach($comment as $key => $value) : ?>
						<div class="comment-list">
							<div class="single-comment justify-content-between d-flex">
								<div class="user justify-content-between d-flex">
									<div class="thumb">
										<img src="<?php echo base_url(); ?>assets/img/orang/orang.png" alt="" width="75"
											height="50">
									</div>
									<div class="desc">
										<h5><a href="#"><?= $value['name'] ?></a></h5>
										<p class="comment">
											<?= $value['comment'] ?>
										</p>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach;?>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="blog_right_sidebar">
						
						<aside class="single_sidebar_widget popular_post_widget">
							<h3 class="widget_title">Popular Posts</h3>
							<div class="media post_item">
								<img src="<?php echo base_url(); ?>assets/img/blog/popular-post/post1.jpg" alt="post">
								<div class="media-body">
									<a href="blog-details.html">
										<h3>Space The Final Frontier</h3>
									</a>
									<p>02 Hours ago</p>
								</div>
							</div>
							<div class="media post_item">
								<img src="<?php echo base_url(); ?>assets/img/blog/popular-post/post2.jpg" alt="post">
								<div class="media-body">
									<a href="blog-details.html">
										<h3>The Amazing Hubble</h3>
									</a>
									<p>02 Hours ago</p>
								</div>
							</div>
							<div class="media post_item">
								<img src="<?php echo base_url(); ?>assets/img/blog/popular-post/post3.jpg" alt="post">
								<div class="media-body">
									<a href="blog-details.html">
										<h3>Astronomy Or Astrology</h3>
									</a>
									<p>03 Hours ago</p>
								</div>
							</div>
							<div class="media post_item">
								<img src="<?php echo base_url(); ?>assets/img/blog/popular-post/post4.jpg" alt="post">
								<div class="media-body">
									<a href="blog-details.html">
										<h3>Asteroids telescope</h3>
									</a>
									<p>01 Hours ago</p>
								</div>
							</div>
							<div class="br"></div>
						</aside>
						<aside class="single_sidebar_widget post_category_widget">
							<h4 class="widget_title">Post Catgories</h4>
							<ul class="list cat-list">
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Technology</p>
										<p>37</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Lifestyle</p>
										<p>24</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Fashion</p>
										<p>59</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Art</p>
										<p>29</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Food</p>
										<p>15</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Architecture</p>
										<p>09</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Adventure</p>
										<p>44</p>
									</a>
								</li>
							</ul>
							<div class="br"></div>
						</aside>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================Blog Area =================-->
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
	<script src="<?php echo base_url(); ?>assets/js/mail-script.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/counter-up/jquery.counterup.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/js/script.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/ckeditor/ckeditor.js'); ?>"></script>
</body>
