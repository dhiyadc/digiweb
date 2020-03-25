<?php $this->load->view('layout/header')?>
<body>
    <!--================Home Banner Area =================-->
	
	<section class="banner_area">
			<div class="banner_inner d-flex align-items-center">
				<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
                    <div class="page_link">
						<a href="<?= base_url() ?>">Home</a>
						<a href="<?= base_url() ?>kelas">Layanan Kami</a>
					</div>
						<h2 style="color: white; text-shadow: 2px 2px 4px #000000; letter-spacing: 10px; word-spacing: 10px;">Layanan Kami</h2>
					</div>
				</div>
			</div>
		</section>
	
	<!--================End Home Banner Area =================-->

	<!--================ Start Pricing Plans Area ================-->
	<p1 id="banyakKelas"><?= count($kelas) ?></p1>
	<section class="pricing_area section_gap">
			<div class="container" id="daftarKelas">
				<div class="row">
					<div class="col-lg-12">
						<div class="main_title">
							<h2>Layanan Kami</h2>
							<h1>Layanan Kami</h1>
						</div>
					</div>
				</div>
				<?php if($this->session->flashdata('create')) :?>
					<div class="alert alert-success" role="alert">
					<center><?= $this->session->flashdata('create') ?></center>
					</div>
				<?php endif; ?>
					<div class="row text-center">
						<?php foreach ($kategori as $val) :?>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="new_games_item">
								<img src="<?php echo base_url(); ?>assets/images/white.png" alt="" width="250px" height="200px" >
								<div class="upcoming_title">
									<a href="<?php echo base_url(); ?>kelas/kategori/<?= $val['id'] ?>">
										<h3 style="color: whitesmoke; font-size: 15px; font-family: 'Times New Roman', Times, serif;"><?= $val['kategori'] ?></h3>
									</a>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				<?php if($count == 0) :?>
					<div class="alert alert-danger" role="alert">
					<center><?= $this->session->flashdata('kategori') ?></center>
					</div>
				<?php endif; ?>
				<div class="row">
					<?php $i=0;?>
                    <?php foreach ($kelas as $val) :?>
					<div class="col-lg-4 col-md-6 blog_item blogBox moreBox" style="display: none">
						<div class="pricing_item active">
							<h3 class="p_title"><?= $val['judul'] ?></h3>
							<img src="<?= base_url().'images/'.$val['path_gambar']?>" alt="" style="object-fit: cover; height: 200px">
							<h1 class="p_price"><?= $val['harga'] ?></h1>
							<div class="p_list">
								<ul>
									<?php foreach ($kategori as $val2) : ?>
										<?php if ($val['id_kategori'] == $val2['id']) : ?>
											<li><h3><small><?= $val2['kategori']; ?></small></h3></li>
										<?php endif; ?>
									<?php endforeach; ?>
									<li><?= $val['deskripsi_1'] ?></li>
									<li><?= $val['deskripsi_2'] ?></li>
									<li><?= $val['deskripsi_3'] ?></li>
								</ul>
							</div>
							<div class="p_btn" id="daftarBtn<?=$i?>">
								<button type="button" data-toggle="modal" data-target="#contact-modal">
									<a class="gradient_btn kelasBtns">
										<span>Join Us<p1 hidden><?= $val['id'] ?></p1></span>
									</a>
								</button>
							</div>
						</div>
					</div>
					<?php $i++; ?>
					<?php endforeach; ?>
                </div>
					<?php if($i > 6) : ?>
					<div id="loadMore">
						<a href="#">
							<h3 style="color: whitesmoke;">
								<small>Muat Lebih Banyak</small>
							</h3>
						</a>
					</div>
					<?php endif; ?>
					<?php if($i == 0) : ?>
						<p></p>
					<?php endif; ?>
					<?php if($i < 6) : ?>
						<?= "" ?>
					<?php endif; ?>
			</div>
			
	</section>
	<section>
		<!-- Modal Daftar Les -->
		<div id="contact-modal" class="modal fade bd-example-modal-lg" role="dialog" id="kelasModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
                            <h3>Form Daftar</h3>
							<a class="close" data-dismiss="modal">×</a>
						</div>
						<form action="" id="kelasForm" name="contact" role="form" method="post">
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
									<input type="instansi" name="instansi" class="form-control" required>
								</div>
							</div>
							<div class="modal-footer">					
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" id="submit">Confirm</button>
							</div>
						</form>
					</div>
                </div>
			</div>
		<script>
			
		$('#lesModal').modal('hide')
      	function konfirmasi(){
			var tanya = confirm("Apakah Anda  Data Ini Sudah Benar?");
	
			if(tanya === true) {
				pesan = "Ya";
			}else{
				pesan = "Tidak";
			}
			document.getElementById("pesan").innerHTML = pesan;
		}

		$(function(){
			$('.kelasBtns').click(function(){
				var value = $(this).children("span").children("p1").html()
				$('#kelasForm').attr("action",`<?= base_url("kelas/daftar/")?>${value}`) 
				console.log($('#kelasForm').attr("action"))
			})
		})
		</script>
		
		<script>
			$( document ).ready(function () {
				$(".moreBox").slice(0, 6).show();
					if ($(".blogBox:hidden").length != 0) {
						$("#loadMore").show();
					}   
					$("#loadMore").on('click', function (e) {
					e.preventDefault();
					$(".moreBox:hidden").slice(0, 6).slideDown();
					if ($(".moreBox:hidden").length == 0) {
						$("#loadMore").fadeOut('slow');
					}
				});
			});
		</script>
		
	</section>
</body>
<?php $this->load->view('layout/footer')?>