<?php $this->load->view('layout/header')?>
    <body class="gallery_page">
        <!--================Home Banner Area =================-->
		<section class="banner_area">
			<div class="banner_inner d-flex align-items-center">
				<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
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
            				<?php foreach ($portofolio as $key => $value): ?>
							<div class="col-lg-6 col-md-6">
								<div class="single-gallery">
									<div class="overlay"></div>
									<img class="img-fluid w-100" src="<?= base_url().'images/'.$value['path_gambar']?>" alt="">
									<div class="content">
										<a data-toggle="modal" data-target="#contact-modal">
											<i class="lnr lnr-eye"></i>
										</a>
									</div>
								</div>
							</div>
							<?php endforeach;?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
		<?php foreach ($portofolio as $key => $value): ?>
			<div class="modal" id="contact-modal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"><?= $value['judul'] ?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<div class="modal-body">
							<h3><center><?= $value['judul'] ?></center></h3>
							<br>
							<img class="img-fluid w-100" src="<?= base_url().'images/'.$value['path_gambar']?>" alt="">
							<br>
							<a href="<?= $value['link']; ?>"><center><?= $value['link']; ?></center></a>
							<br>
							<p><center><?= $value['text']; ?></center></p>
							<br>					
							<h4><small><center><?= $value['kategori']; ?></center></small></h4>		
							<small><center><?= $value['tanggal_publish']; ?></center></small>						
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		</section>
<?php $this->load->view('layout/footer')?>