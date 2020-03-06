<?php $this->load->view('partials/header') ?>

</head>
<body>

<?php if($this->session->flashdata('flash')): ?>
  <div class="alert alert-success" role="alert">
    <div class="row md-3">
      <div class="col-mt-6">
         Data berhasil <?= $this->session->flashdata('flash'); ?>
      </div>
    </div>
  </div>
<?php endif; ?>

  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Gambar</th>
      <th scope="col">Judul</th>
      <th scope="col">Text</th>
      <th scope="col">tanggal publish</th>
      <th scope="col">edit</th>
    </tr>
  </thead>
  <?php foreach ($portofolio as $key => $value): ?>
  <tbody>
    <tr>
      <td><?= $value['path_gambar']; ?></td>
      <td><?= $value['judul']; ?></td>
      <td><?= $value['text']; ?></td>
      <td><?= $value['tanggal_publish']; ?></td>
      <td>
        <a href="<?= base_url('Portofolio/ReadPortofolio/'); ?><?= $value['id']; ?>" class="badge badge-success">Read</a> 
        <a href="<?= base_url('Portofolio/UpdatePortofolio/'); ?><?= $value['id']; ?>" class="badge badge-primary">Update</a> 
        <a href="<?= base_url('Portofolio/DeletePortofolio/'); ?><?= $value['id']; ?>" class="badge badge-danger">Delete</a> 
      </td>
    </tr>
  </tbody>
<?php endforeach; ?>
</table>
<button type="button" class="btn btn-success"> <a href="<?= base_url('Portofolio/createPortofolio'); ?>"> create</a></button>

<?php $this->load->view('partials/footer') ?>