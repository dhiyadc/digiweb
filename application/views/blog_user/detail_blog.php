<?php $this->load->view('partials/header') ;?>

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

			<a href="<?= base_url('Blog_user/read_blog') ?>" class="btn btn-dark">Back</a>
		</div>
	</div>
</div>

<?php $this->load->view('partials/footer') ;?>
