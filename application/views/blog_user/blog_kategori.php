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
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/lightbox/simpleLightbox.css">
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
					<h2 style="color: crimson">Blog Category</h2>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->
	<!--================End Home Banner Area =================-->

	<!--================Blog Categorie Area =================-->
	<section class="blog_categorie_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 ">
					<div class="categories_post">
						<div class="categories_details">
							<center>
								<h1><pre style="color: black; font-size: 50px"><?= $this->uri->segment('3') ?></pre></h1>
								<hr>
							</center>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
        </section>
	<!--================Blog Categorie Area =================-->

	<!--================Blog Area =================-->
	<section class="blog_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="blog_left_sidebar">

						<?php foreach ($blog as $value): ?>

						<article class="row blog_item blogBox moreBox" style="display: none">
							<div class="col-md-3">
								<div class="blog_info text-right">
									<div class="post_tag">
										<?php foreach ($blogKategori as $val): ?>
										<a href="<?= base_url() ?>Blog_user/blogByKategori/<?= $val['kategori']?>">
                                            <?php if ($value['id'] == $val['id']) {
                                                echo $val['kategori'] . "<br>"; } ?>
                                        </a>
                                         <?php endforeach;?>
									</div>
									<ul class="blog_meta list">
										<li>
											<p><?=$value['author']?>&nbsp;&nbsp;&nbsp;<i class="lnr lnr-user"></i></p>
										</li>
										<li>
											<p><?=$value['tanggal_publish']?>&nbsp;&nbsp;&nbsp;<i
													class="lnr lnr-calendar-full"></i></p>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-9 ">
							<div class="blog_box">
								<div class="blog_post">

									<div class="container mt-3">
									<img src="<?=base_url() . 'images/' . $value['path_gambar']?>" alt="" height="325px" width="475px" style="object-fit: cover;">
									<div class="blog_details">
										<a href="<?=base_url('')?>Blog_user/detailAndComment/<?=$value['id']?>">
											<h2><?=$value['judul']?></h2>
										</a>
										<p>
                                                <?php
                                                    $text = html_entity_decode($value['text']);
                                                    $text = str_replace("&nbsp", ' ', $text);
                                                    $text = strip_tags($text);
                                                    echo substr($text, 0, 160); 
                                                ?> &nbsp;&nbsp;&nbsp;<a class="title" href="<?=base_url('')?>Blog_user/detailAndComment/<?=$value['id']?>">
                                                    <p align = "right">Read More</p>
												</a></p> <br>
									</div>
									</div>
								</div>
							</div>
							</div>
						</article>
						<?php endforeach;?>

						<div id="loadMore" style="">
                                <a href="#">Load More</a>
						</div>
						
					</div>
				</div>
				<div class="col-lg-4" >
					<div class="blog_right_sidebar" style=" position: sticky; top: 75px;">
						<aside class="single_sidebar_widget search_widget">
							<form action="<?=base_url('Blog_user')?>" method="post">
								<div class="input-group">
									<input type="text" class="form-control" name="keyword" placeholder="Search Blog"
										autocomplete="off" autofocus>
									<!-- <span class="input-group-btn"> -->
									<input style="visibility: hidden;" type="submit" name="submit">
									<!-- </span> -->
								</div><!-- /input-group -->
							</form>
							<div class="br"></div>
						</aside>
						<aside class="single_sidebar_widget popular_post_widget">
							<h3 class="widget_title">Popular Blogs</h3>
							<?php foreach ($popular as $value): ?>
							<div class="media post_item">
								<img src="<?=base_url() . 'images/' . $value['path_gambar']?>" alt="" height="50px" width="75px" style="object-fit: cover;">
								<div class="media-body">
									<a href="<?=base_url()?>Blog_user/detailAndComment/<?=$value['id']?>">
										<h3><?=$value['judul']?></h3>
									</a>
									<p><?=$value['rate']?> <i class="fa fa-star"></i></p>
								</div>
							</div>
							<?php endforeach;?>

							<div class="br"></div>
						</aside>
						<aside class="single_sidebar_widget post_category_widget">
							<h4 class="widget_title">Blog Categories</h4>
							<ul class="list cat-list">
								<?php foreach ($kategori as $value): ?>
								<li>
									<a href="<?=base_url()?>Blog_user/blogByKategori/<?=$value['kategori'];?>"
										class="">
										<center><p><?=$value['kategori'];?></p></center>
										
									</a>
								</li>
								<?php endforeach;?>

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
	<script src="<?php echo base_url(); ?>assets/vendors/lightbox/simpleLightbox.min.js"></script>
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
	<script src="<?=base_url('assets/js/script.js');?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/ckeditor/ckeditor.js');?>"></script>
	<Script>
                $( document ).ready(function () {
                    $(".moreBox").slice(0, 4).show();
                    if ($(".blogBox:hidden").length != 0) {
                        $("#loadMore").show();
                    }   
                    $("#loadMore").on('click', function (e) {
                    e.preventDefault();
                    $(".moreBox:hidden").slice(0, 4).slideDown();
                    if ($(".moreBox:hidden").length == 0) {
                        $("#loadMore").fadeOut('slow');
                    }
                    });
                });
    </Script>
</body>
