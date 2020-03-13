<?php $this->load->view('partials/header');?>

<br>
<h3 align="center">Update Blog</h3>

<?php 
	if (!isset($blog)) {
		redirect('home');
	}
?>

<?php echo form_open_multipart('blog/updateblog/' . $blog['id']); ?>

	<?php
		$author = $this->session->userdata('user');
	?>

	<div class="container">
		<div class="form-group">
			<label for="image">Image</label>
			<input type="file" accept=".jpg, .png, .jpeg" name="path_gambar" class="form-control" id="path_gambar" aria-describedby="emailHelp">
			<hr>
			<p>Gambar Sebelumnya :</p><img src="<?= base_url().'images/'.$blog['path_gambar']?>" alt="" height="125px" >
			<input type="hidden" name="old_image" value="<?= $blog['path_gambar'] ?>">
		</div>
		<div class="form-group">
			<label for="judul">Judul</label>
			<input type="text" name="judul" value="<?=$blog['judul']?>" class="form-control" id="judul"
				aria-describedby="emailHelp" required>
		</div>
		<div class="form-group">
			<label for="Kategori">Kategori</label>
			<br>
			<input type="radio" name="kategori" value="Kecerdasan buatan" <?= ($blog['kategori'] == "Kecerdasan buatan") ? "checked" : '' ?>> Kecerdasan buatan <br>
			<input type="radio" name="kategori" value="Desain" <?= ($blog['kategori'] == "Desain") ? "checked" : '' ?>> Desain <br>
			<input type="radio" name="kategori" value="Network" <?= ($blog['kategori'] == "Network") ? "checked" : '' ?>> Network <br>
			<input type="radio" name="kategori" value="Business" <?= ($blog['kategori'] == "Business") ? "checked" : '' ?>> Business
		</div>
		<div class="form-group">
			<label for="text">Text</label>
			<textarea class="ckeditor" id="ckeditor" name="text" rows="3" required><?=$blog['text']?></textarea>
		</div>
		<button type="submit" class="btn btn-primary" value="Update">Update</button>
		<a href="<?=base_url('blog/readblog')?>" class="btn btn-warning">Back</a>
		<hr>
	</div>
</form>

<?php $this->load->view('partials/footer');?>
