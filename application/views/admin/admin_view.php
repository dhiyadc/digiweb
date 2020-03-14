<?php $this->load->view('partials/header')?>

<div class="container">
	<br>
	<h3 align="center">Login Admin</h3>
	<br>

	<?php if ($this->session->flashdata('message')): ?>
	<div class="alert alert-danger" role="alert">
        <?=$this->session->flashdata('message')?>
	</div>
	<?php endif;?>

	<form action="<?=base_url()?>admin/loginadmin/" method="POST">
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control" id="password">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>


<?php $this->load->view('partials/footer')?>
