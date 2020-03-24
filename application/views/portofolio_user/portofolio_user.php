<?php $this->load->view('layout/header')?>
    <body class="gallery_page">
        <!--================Home Banner Area =================-->
		<section class="banner_area">
			<div class="banner_inner d-flex align-items-center">
				<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
                    <div class="page_link">
						<a href="<?= base_url() ?>">Home</a>
						<a href="<?= base_url() ?>portofolio_user">Portofolio</a>
					</div>
						<h2 style="color: white; text-shadow: 2px 2px 4px #000000; letter-spacing: 10px; word-spacing: 10px;">Portofolio</h2>
					</div>
				</div>
			</div>
		</section>
		<!--================End Home Banner Area =================-->
	
		<!--================ Start Gallery Area =================-->
		<p1 id="banyakPorto"><?= count($portofolio) ?></p1>
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
				<!--================Portofolio Categorie Area =================-->
				<section class="blog_categorie_area">
				<div class="container">
					<div class="row">
					<div class="col-lg-2 mb-5 mt-3">
							<div class="categories_post">
								<div class="categories_details">
									<div class="categories_text">
										<ul class=" nav navbar-nav navbar-right">
											<li class="nav-item"><a
													href="<?= base_url() ?>portofolio_user"
													class="primary_btn">ALL</a>
											</li>
										</ul>
										<div class="border_line"></div>
									</div>
								</div>
							</div>
						</div>
						<?php foreach($kategori as $value) : ?>
						<div class="col-lg-2 mb-5 mt-3">
							<div class="categories_post">
								<div class="categories_details">
									<div class="categories_text">
										<ul class=" nav navbar-nav navbar-right">
											<li class="nav-item"><a
													href="<?= base_url() ?>portofolio_user/PortobyKategori/<?= $value['kategori']; ?>"
													class="primary_btn"><?= $value['kategori']; ?></a>
											</li>
										</ul>
										<div class="border_line"></div>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</section>
			<!--=========================Portofolio Categorie Area =================-->
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
						<?php $i = 0; ?>
							<?php foreach ($portofolio as $key => $value): ?>
								<div class="col-lg-6 col-md-6 col-sm-6 blog_item blogBox moreBox" style="display: none">
									<a href="<?= $value['link'] ?>">
										<div class="single-gallery_portofolio">
											<div class="overlay"></div>
											<img class="img-fluid w-100" src="<?= base_url().'images/'.$value['path_gambar']?>" alt="" style="object-fit: cover; height: 350px">
											<div class="content_portofolio">
												<p><?= $value['judul'] ?></p>
												<p style="font-size: 18px;"><?= substr($value['text'],0 ,100); ?>...</p>
											<!-- <center><p style="color: black; position:"><?= $value['kategori'] ?></p></center> -->
												<p style="font-size: 12px; position: absolute; bottom: 0;"><?= $value['kategori'] ?></p>
											</div>
											
										</div>
									</a>
								</div>
								<?php $i++; ?>
							<?php endforeach;?>
						</div>
					</div>
				</div>
				<?php if($i > 4) : ?>
				<div id="loadMore">
                    <a href="#">Muat Lebih Banyak</a>
				</div>
				<?php endif; ?>
				<?php if($i == 0) : ?>
					<p></p>
				<?php endif; ?>
				<?php if($i < 4) : ?>
					<?= "" ?>
				<?php endif; ?>
			</div>
		</section>
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
<?php $this->load->view('layout/footer')?>