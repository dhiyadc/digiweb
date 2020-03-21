<?php $this->load->view('layout/header')?>

<body>
    <!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Join Us</h2>
				</div>	
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->
	<section>
		<!-- Modal Daftar Les -->
			<div id="contact-modal" class="modal fade bd-example-modal-lg" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a class="close" data-dismiss="modal">×</a>
							<h3>Form Les Android</h3>
						</div>
						<form action="<?= base_url() ?>kelas/daftar/<?= $id; ?>" id="contactForm" name="contact" role="form" method="post">
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
</html>

<?php $this->load->view('layout/footer')?>