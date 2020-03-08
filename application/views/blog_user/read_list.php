<?php $this->load->view('partials/header'); ?>

<?php foreach($blog as $key => $value): ?>
    <center>
<div class="container">
    <div class="card mb-3" style="width: 30rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $value['judul'] ?></h5>
        <p class="card-text"><?= $value['author'] ?></p>
        <p class="card-text"><?= $value['tanggal_publish'] ?></p>
        <a href="<?=base_url()?>Blog_user/detail_blog/<?= $value['id'] ?>" class="btn btn-info">Detail Blog</a>
    </div>
    </div>
</div>
    </center>

<?php endforeach; ?>

<?php $this->load->view('partials/footer'); ?>