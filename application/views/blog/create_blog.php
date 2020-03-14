<?php $this->load->view('partials/header'); ?>

<br>

<h3 align="center">Create Blog</h3>

<!-- <form action="<?=base_url('/blog/createblog')?>" method="post"> -->
<?php echo form_open_multipart('blog/createblog'); ?>

	<?php
		$author = $this->session->userdata('user');
	?>

	<div class="container">
		<div class="form-group">
			<label for="image">Image</label>
			<input type="file" accept=".jpg, .png, .jpeg" name="path_gambar" class="form-control" id="path_gambar" aria-describedby="emailHelp" required>
		</div>
		<div class="form-group">
			<label for="judul">Judul</label>
			<input type="text" name="judul" class="form-control" id="judul" aria-describedby="emailHelp" required>
		</div>
		<div class="form-group">
			<label for="Kategori">Kategori : </label>
			<br>
			<input type="radio" name="kategori" value="Kecerdasan buatan"> Kecerdasan buatan <br>
			<input type="radio" name="kategori" value="Desain"> Desain <br>
			<input type="radio" name="kategori" value="Network"> Network <br>
			<input type="radio" name="kategori" value="Business"> Business
		</div>
		<div class="form-group">
			<label for="text">Text</label>
			<textarea class="ckeditor" id="ckeditor" name="text" required></textarea>
		</div>
		<button type="submit" name="submit" value="submit" class="btn btn-primary">Create Blog</button>
		<a href="<?= base_url('blog') ?>" class="btn btn-warning">Back</a>
		<hr>
	</div>
</form>

<?php $this->load->view('partials/footer'); ?>
