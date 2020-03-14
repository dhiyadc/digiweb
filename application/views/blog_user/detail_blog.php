<?php $this->load->view('partials/header') ;?>

<hr>
<?php if($this->session->flashdata('message')) :?>
<div class="alert alert-danger" role="alert">
	<?= $this->session->flashdata('message') ?>
</div>
<?php endif; ?>

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
			<p class="card-text"><?= $blog['text']?></p>
			<p class="card-text"><?= $blog['tanggal_publish']?></p>

			<center>
				<table>
					<tr>
						<td>
								<a href="<?= base_url(''); ?>Blog_user/save_ratingli/<?= $blog['id']; ?>"><p class="emoticon1">like</p></a>
						</td>
						<td>
								<a href="<?= base_url(''); ?>Blog_user/save_ratinglo/<?= $blog['id']; ?>"><p class="emoticon2">love</p></a>
						</td>
						<td>
								<a href="<?= base_url(''); ?>Blog_user/save_ratingh/<?= $blog['id']; ?>"><p class="emoticon3">haha</p></a>
						</td>
						<td>
								<a href="<?= base_url(''); ?>Blog_user/save_ratingw/<?= $blog['id']; ?>"><p class="emoticon4">wow</p></a>
						</td>
						<td>
								<a href="<?= base_url(''); ?>Blog_user/save_ratings/<?= $blog['id']; ?>"><p class="emoticon5">sad</p></a>
						</td>
						<td>
								<a href="<?= base_url(''); ?>Blog_user/save_ratinga/<?= $blog['id']; ?>"><p class="emoticon6">angry</p></a>
						</td>
					</tr>
				</table>
			</center>
			<br>

			<hr>

			<form action="<?=base_url('')?>Blog_user/createComment/<?= $blog['id']?>" method="POST">
				<div class="form-group">
					<label for="nama_komen" class="float-left">Name : </label>
					<input type="text" name="nama_komen" class="form-control" id="nama_komen"
						aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="isi_komen" class="float-left">Comment : </label>
					<textarea class="form-control" name="isi_komen" id="isi_komen" rows="3" required></textarea>
				</div>
				<button type="submit" name="submit" value="submit" class="btn btn-primary float-left">Submit</button>
			</form>
			<br>
			<hr>

			<div class="alert alert-warning" role="alert">
				Comments!
			</div>

			<?php foreach($comment as $key => $value) : ?>
			<b><?= $value['name'] ?></b>
			<div class="alert alert-light" role="alert">
				<?= $value['comment'] ?>
			</div>
			<?php endforeach;?>

			<br>
			<a href="<?= base_url('Blog_user/read_blog') ?>" class="btn btn-dark">Back</a>
		</div>
	</div>
</div>



<?php $this->load->view('partials/footer') ;?>