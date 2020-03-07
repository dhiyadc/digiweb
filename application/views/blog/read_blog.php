<?php $this->load->view('partials/header') ?>

<body>
    <br>
	<h1 align="center"> Read Blog </h1>
	<br>
	
<div class="container">
	<?php if($this->session->flashdata('message')) :?>
	<div class="alert alert-danger" role="alert">
		<?= $this->session->flashdata('message') ?>
	</div>
	<?php endif; ?>
</div>

	<br>
    <div class="container">
	<table class="table">
		<thead class="thead-dark text-center">
			<tr>
				<th scope="col">Judul</th>
				<th scope="col">Author</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody class="text-center">
			<?php foreach ($blog as $key => $value) : ?>
			<tr>
				<td><?= $value['judul'] ?></td>
				<td><?= $value['author'] ?></td>
				<td>
				<a class="badge badge-info mr-3" href="<?=base_url()?>blog/detailblog/<?= $value['id'] ?>" >Detail</a>
				<a class="badge badge-success mr-3" href="<?=base_url()?>blog/update/<?= $value['id'] ?>" >Update</a>
				<a class="badge badge-danger" href="<?=base_url()?>blog/deleteblog/<?= $value['id'] ?>" onclick="return confirm('yakin ??');">Delete</a>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
    </table>
    <a href="<?=base_url('blog/createview') ?>"  class="btn btn-info">Create Blog</a>
    <a href="<?=base_url('blog') ?>"  class="btn btn-warning">Back</a>
	<hr>
    </div>


<?php $this->load->view('partials/header') ?>

