<?php $this->load->view('partials/header') ?>

<br>
<div class="container">
	<div class="card">
		<div class="card-header">
			<b>Detail Blog</b>
		</div>

		<div class="card-body text-center">
			<img src="<?= base_url().'images/'.$blog['path_gambar']?>" alt="" height="300px">
			<hr>
			<h2 class="card-title"><?= $blog['judul'] ?></h2>
			<p class="card-text"><?= $blog['author']?></p>
			<p class="card-text"><?= $blog['kategori']?></p>
			<div class="container">
				<p class="card-text"><?= $blog['text']?></p>
			</div>
			<p class="card-text"><?= $blog['tanggal_publish']?></p>
			<hr>

			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<h2 class="display-6 ">Komentar Pada Blog ini</h2>
					<br>
					<?php if($this->session->flashdata('message')) :?>
					<div class="alert alert-danger" role="alert">
						<?= $this->session->flashdata('message') ?>
					</div>
					<?php endif; ?>

					<?php foreach($comment as $key => $value) :?>
					<p class="lead">
						<div class="alert alert-light" role="alert">
							<b><?= $value['name'] ?> : </b>
							<?= $value['comment'] ?>
							<br>
							<a href="<?= base_url('')?>Blog/deleteComment/<?= $value['id_comment'] ?>/<?= $value['id_blog'] ?>"
								class="badge badge-danger" onclick="return confirm('Yakin hapus comment??');">Delete</a>
						</div>
					</p>
					<?php endforeach;?>
				</div>
			</div>

			<a href="<?= base_url('blog/readblog') ?>" class="btn btn-dark">Back</a>
		</div>
	</div>
</div>

<?php $this->load->view('partials/footer') ?>
