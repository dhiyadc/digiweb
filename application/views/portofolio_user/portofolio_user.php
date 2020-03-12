<?php $this->load->view('partials/header') ?>

</head>
<body>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Gambar</th>
      <th scope="col">Judul</th>
      <th scope="col">Text</th>
      <th scope="col">kategori</th>
      <th scope="col">Link</th>
      <th scope="col">Read</th>
    </tr>
  </thead>
  <?php foreach ($portofolio as $key => $value): ?>
  <tbody>
    <tr>
      <td>
        <img src="<?= base_url().'images/'.$value['path_gambar']?>" alt="" height="200px">
      </td>
      <td><?= $value['judul']; ?></td>
      <td><?= $value['text']; ?></td>
      <td><?= $value['kategori']; ?></td>
      <td><a href="<?= 'http://www.'.$value['link']; ?> "> <?= $value['link'];?> </a></td>
      <td>
        <a href="<?= base_url('Portofolio_user/URead_porto/'); ?><?= $value['id']; ?>" class="badge badge-success">Read</a> 
      </td>
    </tr>
  </tbody>
<?php endforeach; ?>
</table>

<?php $this->load->view('partials/footer') ?>