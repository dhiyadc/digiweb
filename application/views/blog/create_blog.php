<?php $this->load->view('partials/header'); ?>

<br>

<h3 align="center">Create Blog</h3>

<form action="<?=base_url('/blog/createblog')?>" method="post">

	<?php
	$author = $this->session->userdata('user');
?>

	<div class="container">
		<div class="form-group">
			<label for="image">Image</label>
			<input type="file" name="image" class="form-control" id="image" aria-describedby="emailHelp" required>
		</div>
		<div class="form-group">
			<label for="judul">Judul</label>
			<input type="text" name="judul" class="form-control" id="judul" aria-describedby="emailHelp" required>
		</div>
		<div class="form-group">
			<label for="Kategori">Kategori</label>
			<select class="form-control" id="kategori" name="kategori">
				<option value="Kecerdasan Buatan">Kecerdasan Buatan</option>
				<option value="Desain">Desain</option>
				<option value="Network">Network</option>
				<option value="Business">Business</option>
			</select>
		</div>
		<div class="form-group">
			<label for="text">Text</label>
			<textarea class="form-control" id="text" name="text" rows="3" required></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Create</button>
		<a href="<?= base_url('blog') ?>" class="btn btn-warning">Back</a>
	</div>
</form>

<?php $this->load->view('partials/footer'); ?>
