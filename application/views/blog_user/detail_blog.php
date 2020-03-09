<?php $this->load->view('partials/header') ;?>

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
					<td><div id="emoticon1"><p id="e1" align="center">0</p></div></td>
					<td><div id="emoticon2"><p id="e2" align="center">0</p></div></td>
					<td><div id="emoticon3"><p id="e3" align="center">0</p></div></td>
					<td><div id="emoticon4"><p id="e4" align="center">0</p></div></td>
					<td><div id="emoticon5"><p id="e5" align="center">0</p></div></td>
				</tr>
			</table>
			</center>
			<br>

			<hr>

			<form action="<?=base_url('')?>Blog_user/createComment/<?= $blog['id']?>" method="POST">
				<div class="form-group">
					<label for="nama_komen" class="float-left">Name : </label>
					<input type="text" name="nama_komen" class="form-control" id="nama_komen" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="isi_komen" class="float-left">Comment : </label>
					<textarea class="form-control" name="isi_komen" id="isi_komen" rows="3"></textarea>
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
