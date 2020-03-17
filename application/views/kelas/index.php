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
				<div class="row">
					<?php $i=0;?>
                    <?php foreach ($kelas as $val) :?>
					<div class="col-lg-4 col-md-6">
						<div class="pricing_item active">
							<h3 class="p_title"><?= $val['judul'] ?></h3>
							<img src="<?= base_url().'images/'.$val['path_gambar']?>" alt="">
							<h1 class="p_price"><?= $val['harga'] ?></h1>
							<div class="p_list">
								<ul>
									<li><h3><small><?= $val['kategori']; ?></small></h3></li>
									<li><?= $val['deskripsi_1'] ?></li>
									<li><?= $val['deskripsi_2'] ?></li>
									<li><?= $val['deskripsi_3'] ?></li>
								</ul>
							</div>
							<div class="p_btn" id="daftarBtn<?=$i?>">
								<button type="button" data-toggle="modal" data-target="#contact-modal"><a class="gradient_btn kelasBtns"><span>Join Us<p1 hidden><?= $val['id'] ?></p1></span></a></button>
							</div>
						</div>
					</div>
					<?php $i++; ?>
					<?php endforeach; ?>
                </div>
			</div>
			
	</section>
	<section>
		<!-- Modal Daftar Les -->
		<div id="contact-modal" class="modal fade bd-example-modal-lg" role="dialog" id="kelasModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a class="close" data-dismiss="modal">×</a>
							<h3>Form Les Android</h3>
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
								<button type="submit" class="btn btn-success" id="submit">Confirm</button>
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
		<!--  -->
	</section>
</body>
<?php $this->load->view('layout/footer')?>