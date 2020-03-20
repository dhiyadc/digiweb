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
						<a href="<?= base_url() ?>">Home</a>
						<a href="<?= base_url() ?>/Blog_user">Blog</a>
					</div>
					<h2 style="color:crimson; ">BLOG DETAILS</h2>
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
							<center><img src="<?= base_url().'images/'.$path_gambar?>" alt="" height="400px" width="550px" style="object-fit: cover;"></center>
							</div>
						</div>
						<div class="col-lg-3  col-md-3">
							<div class="blog_info text-right">
								<div class="post_tag">
									<?php foreach($kategori as $value) :?>
									<a href="<?=base_url()?>Blog_user/blogByKategori/<?=$value;?>"><?= $value ?><br></a>
									<?php endforeach; ?>
								</div>
								<ul class="blog_meta list">
									<li><p><?= $author ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="lnr lnr-user"></i></p></li>
									<li><p><?= $tanggal_publish ?>&nbsp;&nbsp;&nbsp;<i
												class="lnr lnr-calendar-full"></i></p></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-md-9 blog_details">
							<h2><?= $judul ?></h2>
							<p class="excert">
								<?= html_entity_decode($text) ?>
							</p>
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
										<?php if($this->session->flashdata('berhasil')) :?>
										<div class="alert alert-success" role="alert">
											<?= $this->session->flashdata('berhasil') ?>
										</div>
										<?php endif; ?>
										<hr>

										<!-- LIKE -->
										<div class="iconBox">
											<a href="<?= base_url(''); ?>Blog_user/save_ratingli/<?= $id_blog ?>"
												class="ico lovo">&#9996;</a>

											<label>Like</label>
										</div>

										<!-- LOVE -->
										<div class="iconBox">

											<a href="<?= base_url(''); ?>Blog_user/save_ratinglo/<?= $id_blog ?>"
												class="ico lovo">&#10084;</a>

											<label>Love</label>
										</div>

										<!-- HAHA -->
										<a class="iconBox"
											href="<?= base_url(''); ?>Blog_user/save_ratingh/<?= $id_blog ?>">
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
											href="<?= base_url(''); ?>Blog_user/save_ratingw/<?= $id_blog ?>">
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
											href="<?= base_url(''); ?>Blog_user/save_ratings/<?= $id_blog ?>">
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
											href="<?= base_url(''); ?>Blog_user/save_ratinga/<?= $id_blog ?>">
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
							<form action="<?=base_url('')?>Blog_user/createComment/<?= $id_blog ?>" method="POST">
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
					<div class="blog_right_sidebar" style=" position: sticky; top: 20px;">
						
						<aside class="single_sidebar_widget popular_post_widget">
							<h3 class="widget_title">Popular Blogs</h3>
							<?php foreach($popular as $value) :  ?>
							<div class="media post_item">
							<img src="<?= base_url().'images/'.$value['path_gambar']?>" alt=""  height="50px" width="75px" style="object-fit: cover;">
								<div class="media-body ">
									<a class="d-flex justify-content-between" href="<?= base_url() ?>Blog_user/detailAndComment/<?= $value['id'] ?>">
										<h3><?= $value['judul'] ?></h3>
									</a>
									<p><?= $value['rate'] ?> <i class="fa fa-star"></i></p>
								</div>
							</div>
							<?php endforeach; ?>
							
							<div class="br"></div>
						</aside>
						<aside class="single_sidebar_widget post_category_widget">
							<h4 class="widget_title">This Blog Categories</h4>
							<ul class="list cat-list">
							<?php foreach($kategori as $value) :  ?>
								<li>
									<a href="<?= base_url() ?>Blog_user/blogByKategori/<?= $value ?>" class="">
										<center><p><?= $value ?></p></center>
									</a>
								</li>
							<?php endforeach; ?>
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
