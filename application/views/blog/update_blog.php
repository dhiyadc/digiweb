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
		<!-- <div class="form-group">
			<label for="author">Author</label>
			<input type="text" name="author" value="<?php echo "$author" ?>" class="form-control" id="author"
				aria-describedby="emailHelp" readonly>
		</div> -->
		<div class="form-group">
			<label for="text">Text</label>
			<textarea class="form-control" id="text" name="text" rows="3" required><?=$blog['text']?></textarea>
		</div>
		<!-- <div class="form-group">
			<label for="tanggal_publish">Tanggal Publish</label>
			<input type="date" name="tanggal_publish" value="<?=$blog['tanggal_publish']?>" class="form-control"
				id="tanggal_publish" aria-describedby="emailHelp" required>
		</div> -->
		<button type="submit" class="btn btn-primary">Update</button>
		<a href="<?=base_url('blog/readblog')?>" class="btn btn-warning">Back</a>
	</div>
</form>

<?php $this->load->view('partials/footer');?>
