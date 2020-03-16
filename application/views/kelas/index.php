<?php $this->load->view('layout/header')?>
<body>
    <!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Layanan Kami</h2>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================ Start Pricing Plans Area ================-->
	<section class="pricing_area section_gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="main_title">
							<h2>Layanan Kami</h2>
							<h1>Layanan Kami</h1>
						</div>
					</div>
                </div>
				<div class="row">
                    <?php foreach ($kelas as $val) :?>
					<div class="col-lg-4 col-md-6">
						<div class="pricing_item active">
							<h3 class="p_title"><?= $val['judul'] ?></h3>
							<img src="<?= base_url().'images/'.$val['path_gambar']?>" alt="">
							<h1 class="p_price"><?= $val['harga'] ?></h1>
							<div class="p_list">
								<ul>
									<li><?= $val['deskripsi 1'] ?></li>
									<li><?= $val['deskripsi 2'] ?></li>
									<li><?= $val['deskripsi 3'] ?></li>
								</ul>
							</div>
							<div class="p_btn">
								<button type="button" data-toggle="modal" data-target="#contact-modal"><a class="gradient_btn"><span>Join Us</span></a></button>
							</div>
						</div>
                    </div>
                    <?php endforeach;?>
                </div>
			</div>
	</section>
	<section>
		<!-- Modal Daftar Les -->
		
			<div id="contact-modal" class="modal fade bd-example-modal-lg" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a class="close" data-dismiss="modal">×</a>
							<h3>Form Les Android</h3>
                        </div>
                        <?php foreach ($kelas as $val) :?>
						<form action="<?= base_url() ?>kelas/daftar/<?= $val['id'] ?>" id="contactForm" name="contact" role="form" method="post">
							<div class="modal-body">				
								<div class="form-group">
									<label for="name">Nama</label>
									<input type="text" name="nama" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="tel">No Telpon</label>
									<input type="tel" name="no_hp" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" name="email" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="message">Instansi</label>
									<input type="instansi" name="email" class="form-control" required>
								</div>
							</div>
							<div class="modal-footer">					
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-success" id="submit">Confirm</button>
							</div>
						</form>
                	<?php endforeach; ?>
					</div>
                </div>
			</div>
		<!--  -->
		<script>
      function konfirmasi(){
			var tanya = confirm("Apakah Anda  Data Ini Sudah Benar?");
	
			if(tanya === true) {
				pesan = "Ya";
			}else{
				pesan = "Tidak";
			}
			document.getElementById("pesan").innerHTML = pesan;
		}
    	</script>
		<!--  -->
	</section>
</body>
<?php $this->load->view('layout/footer')?>