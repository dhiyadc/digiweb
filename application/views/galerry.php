<?php $this->load->view('layout/header')?>
    <body class="gallery_page">
        <!--================Home Banner Area =================-->
		<section class="banner_area">
			<div class="banner_inner d-flex align-items-center">
				<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<div class="page_link">
							<a href="<?php echo base_url(); ?>assets/index.html">Home</a>
							<a href="<?php echo base_url(); ?>assets/gallery.html">Gallery</a>
						</div>
						<h2>Portofolio</h2>
					</div>
				</div>
			</div>
		</section>
		<!--================End Home Banner Area =================-->
	
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
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="single-gallery">
									<div class="overlay"></div>
									<img class="img-fluid w-100" src="<?php echo base_url(); ?>assets/img/gallery_img1.png" alt="">
									<div class="content">
										<a class="pop-up-image" href="<?php echo base_url(); ?>assets/img/gallery_img1.png">
											<i class="lnr lnr-eye"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="single-gallery">
									<div class="overlay"></div>
									<img class="img-fluid w-100" src="<?php echo base_url(); ?>assets/img/gallery_img2.png" alt="">
									<div class="content">
										<a class="pop-up-image" href="<?php echo base_url(); ?>assets/img/gallery_img2.png">
											<i class="lnr lnr-eye"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="single-gallery">
									<div class="overlay"></div>
									<img class="img-fluid w-100" src="<?php echo base_url(); ?>assets/img/gallery_img3.png" alt="">
									<div class="content">
										<a class="pop-up-image" href="<?php echo base_url(); ?>assets/img/gallery_img3.png">
											<i class="lnr lnr-eye"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 hidden-md">
						<div class="single-gallery">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="<?php echo base_url(); ?>assets/img/gallery_img4.png" alt="">
							<div class="content">
								<a class="pop-up-image" href="<?php echo base_url(); ?>assets/img/gallery_img4.png">
									<i class="lnr lnr-eye"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php $this->load->view('layout/footer')?>