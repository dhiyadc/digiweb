<?php $this->load->view('partials/header');?>

<br>
<h3 align="center">Update Blog</h3>

<?php 
	if (!isset($blog)) {
		redirect('home');
	}
?>

<form action="<?=base_url("blog/updateblog/$blog[id]")?>" method="post">

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
			<input type="text" name="judul" value="<?=$blog['judul']?>" class="form-control" id="judul"
				aria-describedby="emailHelp" required>
		</div>
		<div class="form-group">
			<label for="Kategori">Kategori</label>
			<select class="form-control" id="kategori" name="kategori" >
				<option value="Kecerdasan Buatan">Kecerdasan Buatan</option>
				<option value="Desain">Desain</option>
				<option value="Network">Network</option>
				<option value="Business">Business</option>
			</select>
		</div>
		<div class="form-group">
			<label for="text">Text</label>
			<textarea class="form-control" id="text" name="text" rows="3" required><?=$blog['text']?></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Update</button>
		<a href="<?=base_url('blog/readblog')?>" class="btn btn-warning">Back</a>
	</div>
</form>

<?php $this->load->view('partials/footer');?>
