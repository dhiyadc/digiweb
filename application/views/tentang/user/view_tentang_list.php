<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= $this->session->flashdata('message') ?>

</head>

<body>

    <?php
    foreach ($tentang as $value) : ?>
        <table>
            <tr>
                <td>
                    <img src="<?= base_url() . 'images/' . $value['path_gambar'] ?>" alt="" height="200px">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td> <?= $value['nama'] ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?= $value['jabatan'] ?></td>
            </tr>
            <tr>
                <td>Quotes</td>
                <td>:</td>
                <td><?= $value['quote'] ?></td>
            </tr>
            <?php if ($value['path_ig'] != null) : ?>
                <tr>
                    <td>Instagram</td>
                    <td>:</td>
                    <td><a href="<?= 'http://www.instagram.com/' . $value['path_ig'] ?>" target="_blank" style="text-decoration: none"><?= $value['path_ig'] ?></a></td>
                </tr>
            <?php endif; ?>
            <?php if ($value['path_fb'] != null) : ?>
                <tr>
                    <td>Facebook</td>
                    <td>:</td>
                    <td><a href="<?= 'http://www.facebook.com/' . $value['path_fb'] ?>" target="_blank"><?= $value['path_fb'] ?></a></td>
                </tr>
            <?php endif ?>
            <?php if ($value['path_twit'] != null) : ?>
                <tr>
                    <td>Twitter</td>
                    <td>:</td>
                    <td><a href="<?= 'http://www.twitter.com/' . $value['path_twit'] ?>" target="_blank"><?= $value['path_twit'] ?></a></td>
                </tr>
            <?php endif ?>
        </table>
        <table>
            <tr>
                <td></td>
                <td></td>
                <td><a href="<?= base_url("tentang_user/viewTentangByID/") . $value['id'] ?>" style="text-decoration: none"><button type="button">VIEW</td>
                <br>
            <?php endforeach ?>
</body>

</html>

<?php $this->load->view('layout/header')?>
<body class="about_page">
    <!--================Home Banner Area =================-->
		<section class="banner_area">
			<div class="banner_inner d-flex align-items-center">
				<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="about-us.html">About</a>
						</div>
						<h2>About Us</h2>
					</div>
				</div>
			</div>
		</section>
		<!--================End Home Banner Area =================-->
	
		<!--================Start About Us Area =================-->
		<section class="about_us_area section_gap_top">
			<div class="container">
				<div class="row about_content align-items-center">
					<div class="col-lg-6">
						<div class="section_content">
							<h6>About Us</h6>
							<h1>Kami Hadir Disini <br>Untuk Menghadirkan</h1>
							<p>Solusi dan Pelayanan Terbaik Untuk Kenyamanan dan Inovasi masa Depan</p>
							<a class="primary_btn" href="#">Learn More</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about_us_image_box justify-content-center">
							<img class="img-fluid w-100" src="<?php echo base_url(); ?>assets/img/about_img.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			
		</section>
		<!--================End About Us Area =================-->
	
	
		<!--================ Start Frequently Asked Questions Area ================-->
		<br><br><br><br>
		
		<section class="frequently_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mt-6">
						<div class="main_title">
							<h2>Frequently Asked Questions</h2>
							<h1>Frequently Asked Questions</h1>
						</div>
					</div>
				</div>
				<div class="row frequent_inner">
					<div class="col-lg-5 col-md-5">
						<div class="frequent_item">
							<h3>We Believe that Interior beauty Lasts Long</h3>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
								especially in the workplace. That’s why it’s crucial that as women.</p>
						</div>
					</div>
					<div class="offset-lg-2 col-lg-5 offset-md-2 col-md-5">
						<div class="frequent_item">
							<h3>We Believe that Interior beauty Lasts Long</h3>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
								especially in the workplace. That’s why it’s crucial that as women.</p>
						</div>
					</div>
					<div class="col-lg-5 col-md-5">
						<div class="frequent_item">
							<h3>We Believe that Interior beauty Lasts Long</h3>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
								especially in the workplace. That’s why it’s crucial that as women.</p>
						</div>
					</div>
					<div class="offset-lg-2 col-lg-5 offset-md-2 col-md-5 ">
						<div class="frequent_item">
							<h3>We Believe that Interior beauty Lasts Long</h3>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
								especially in the workplace. That’s why it’s crucial that as women.</p>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 ">
						<div class="frequent_item last-child">
							<h3>We Believe that Interior beauty Lasts Long</h3>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
								especially in the workplace. That’s why it’s crucial that as women.</p>
						</div>
					</div>
					<div class="offset-lg-2 col-lg-5 offset-md-2 col-md-5 ">
						<div class="frequent_item last-child">
							<h3>We Believe that Interior beauty Lasts Long</h3>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
								especially in the workplace. That’s why it’s crucial that as women.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php $this->load->view('partials/footer')?>
