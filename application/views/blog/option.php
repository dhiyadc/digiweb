<?php $this->load->view('partials/header'); ?>

<br>

<div class="container">
	<?php if($this->session->flashdata('message')) :?>
	<div class="alert alert-primary" role="alert">
		<?= $this->session->flashdata('message') ?>
	</div>
	<?php endif; ?>
</div>

<br>

<div class="container text-center">
	<a href="<?=base_url('blog/createview')?>" class="btn btn-warning mr-3">Create Blog</a>
	<a href="<?=base_url('blog/readblog')?>" class="btn btn-info mr-3">Read Blog</a>
	<a href="<?=base_url('blog_user/read_blog')?>" class="btn btn-success mr-3">User View Blog</a>
</div>

<?php $this->load->view('partials/footer'); ?>
