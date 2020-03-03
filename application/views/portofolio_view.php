<?php $this->load->view('partials/header') ?>

  </head>
  <body>
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
      <td><?= $value['path_gambar'] ?></td>
      <td><?= $value['judul'] ?></td>
      <td><?= $value['text'] ?></td>
      <td><?= $value['tanggal_publish'] ?></td>
      <td>
      <button type="button" class="btn btn-primary">Update</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
  </tbody>
<?php endforeach; ?>
</table>
<button type="button" class="btn btn-success"> <a href="<?= base_url('Portofolio/create')?>"> create</a></button>

<?php $this->load->view('partials/footer') ?>