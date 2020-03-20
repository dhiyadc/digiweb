<?php $this->load->view('layout/header')?>
    <body class="gallery_page">
        <!--================Home Banner Area =================-->
		<section class="banner_area">
			<div class="banner_inner d-flex align-items-center">
				<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
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
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<?php $i=0;?>
            				<?php foreach ($portofolio as $key => $value): ?>
							<div class="col-lg-6 col-md-6 col-sm-6" id="detailBtn<?=$i?>">
								<a data-toggle="modal" data-target="#contact-modal" class="detailBtns">
									<div class="single-gallery">
										<div class="overlay"></div>
										<img class="img-fluid w-100" src="<?= base_url().'images/'.$value['path_gambar']?>" alt="" style="object-fit: cover; height: 350px">
										<div class="content">
											<i class="lnr lnr-eye"></i>	
										</div>
										<p1 hidden><?= $value['judul'] ?></p1>
										<p2 hidden><?= $value['path_gambar'] ?></p2>
										<p3 hidden><?= $value['link'] ?></p3>
										<p4 hidden><?= $value['text'] ?></p4>
										<p5 hidden><?= $value['kategori'] ?></p5>
										<p6 hidden><?= $value['tanggal_publish'] ?></p6>
									</div>
								</a>
							</div>
							<?php $i++; ?>
							<?php endforeach;?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="modal" id="contact-modal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<div id="detailPorto" class="modal-body">
							<h3><center id="val1"></center></h3>
							<br>
							<img id="gambarPorto"class="img-fluid w-100" src="" alt="">
							<br>
							<a id="linkPorto" href=""><center id="val3"></center></a>
							<br>
							<p><center id="val4"></center></p>
							<br>					
							<h4><small><center id="val5"></center></small></h4>		
							<small><center id="val6"></center></small>						
						</div>
					</div>
				</div>
			</div>
			<script>
				$(function(){
					$('.detailBtns').click(function(){
						var value = $(this).children("div").children("p1").html()
						$('#detailPorto').attr("h3",`${value}`) 
						document.getElementById("val1").innerHTML = value;
            
						var value2 = $(this).children("div").children("p2").html()
						$('#gambarPorto').attr("src",`<?= base_url("images/")?>${value2}`) 
						console.log(value2)
						
						var value3 = $(this).children("div").children("p3").html()
						$('#linkPorto').attr("href",`${value3}`) 
						document.getElementById("val3").innerHTML = value3;

						var value4 = $(this).children("div").children("p4").html()
						$('#detailPorto').attr("p",`${value4}`) 
						document.getElementById("val4").innerHTML = value4;

						var value5 = $(this).children("div").children("p5").html()
						$('#detailPorto').attr("h4",`${value5}`) 
						document.getElementById("val5").innerHTML = value5;
						
						var value6 = $(this).children("div").children("p6").html()
						$('#detailPorto').attr("small",`${value6}`) 
						document.getElementById("val6").innerHTML = value6;
					})
				})
			</script>
		</section>
<?php $this->load->view('layout/footer')?>