<?php $this->load->view('partials/header') ?>

<br>
<div class="container">
	<div class="card">
		<div class="card-header">
			<b>Detail Blog</b>
		</div>
		<div class="card-body text-center">
			<h5 class="card-title"><?= $blog['path_gambar'] ?></h5>
			<h2 class="card-title"><?= $blog['judul'] ?></h2>
			<p class="card-text"><?= $blog['author']?></p>
			<p class="card-text"><?= $blog['kategori']?></p>
			<p class="card-text"><?= $blog['text']?></p>
			<p class="card-text"><?= $blog['tanggal_publish']?></p>
			<a href="<?= base_url('blog/readblog') ?>" class="btn btn-dark">Back</a>
		</div>
	</div>
</div>

<?php $this->load->view('partials/footer') ?>
