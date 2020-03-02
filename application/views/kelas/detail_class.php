<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kelas</title>
</head>
<body>
    <?php foreach ($kelas as $val) : ?>
        <img src="<?= base_url().'images/'.$val['path_gambar']?>" alt="" height="400px">
        <h3><?= $val['judul']; ?></h3>
        <p><?= $val['text']; ?></p>
    <?php endforeach; ?>
    <a href="<?= base_url() ?>kelas/daftar_form/<?= $val['id']; ?>">DAFTAR</a>
    <a href="<?= base_url(); ?>kelas">Back</a>
</body>
</html>