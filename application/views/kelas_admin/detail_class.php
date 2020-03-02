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
        <br><br>
        <a href="<?= base_url(); ?>kelas_admin/delete/<?= $val['id']; ?>">Delete</a>
        <a href="<?= base_url(); ?>kelas_admin/update_form/<?= $val['id']; ?>">Update</a>
    <?php endforeach; ?>
    <a href="<?= base_url(); ?>kelas_admin">Back</a>
</body>
</html>