<?php $this->load->view('layout/header')?>
<body>
    <!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
			<div class="container">
				<div class="banner_content text-center">
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="price.html">Pricing</a>
					</div>
					<h2>Pricing Plans</h2>
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
					<div class="col-lg-4 col-md-6">
						<div class="pricing_item active">
							<h3 class="p_title">Android Package</h3>
							<h1 class="p_price">Rp.900.000</h1>
							<div class="p_list">
								<ul>
									<li>Layanan Kursus Selama 8x</li>
									<li>Modul yang kompleks</li>
									<li>Final Project Membuat Mobile App</li>
								</ul>
							</div>
							<div class="p_btn">
								<button type="button" data-toggle="modal" data-target="#contact-modal"><a class="gradient_btn"><span>Join Us</span></a></button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing_item active">
							<h3 class="p_title">Website Package</h3>
							<h1 class="p_price">Rp.690.000</h1>
							<div class="p_list">
								<ul>
									<li>Layanan Kursus Selama 8x</li>
									<li>Modul yang Kompleks</li>
									<li>Final Project Membuat Website</li>
								</ul>
							</div>
							<div class="p_btn">
								<button type="button" data-toggle="modal" data-target="#contact-modal"><a class="gradient_btn"><span>Join Us</span></a></button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 hidden-md">
						<div class="pricing_item active">
							<h3 class="p_title">Basic Package</h3>
							<h1 class="p_price">Rp.350.000</h1>
							<div class="p_list">
								<ul>
									<li>Layanan Kursus Selama 8x</li>
									<li>Modul yang Kompleks</li>
									<li>Final Project</li>
								</ul>
							</div>
							<div class="p_btn">
								<button type="button" data-toggle="modal" data-target="#contact-modal"><a class="gradient_btn"><span>Join Us</span></a></button>
							</div>
						</div>
					</div>
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
						<form id="contactForm" name="contact" role="form">
							<div class="modal-body">				
								<div class="form-group">
									<label for="name">Nama</label>
									<input type="text" name="name" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="tel">No Telpon</label>
									<input type="tel" name="phone" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="message">Alamat</label>
									<textarea name="message" class="form-control" required></textarea>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" name="email" class="form-control" required>
								</div>	
								<!-- JS -->
								
								<!--  -->
								<div class="form-group">
								<div class="row">
									<div class="col-md-12">
										<script>
											// Material Select Initialization
											$(document).ready(function() {
											$('.mdb-select').materialSelect();
											});
										</script>
										<select class="mdb-select colorful-select dropdown-primary md-form" multiple searchable="Search here..">
										<option value="" disabled selected>Pilih Paketmu</option>
										<option value="1">Android</option>
										<option value="2">Basic</option>
										<option value="3">Website</option>
										</select>

									</div>
									</div>
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