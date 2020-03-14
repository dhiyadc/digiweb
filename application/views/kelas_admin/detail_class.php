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
        <script type="text/javascript" language="JavaScript">
                    function konfirmasi() {
                        tanya = confirm("Anda Yakin Akan Menghapus Data ?");
                        if (tanya == true) return true;
                        else return false;
                    }
                </script>
                <td><a onclick="return konfirmasi()" href="<?= base_url(); ?>kelas_admin/delete/<?= $val['id']; ?>"><button type="button"> Delete </button></a>
        <a href="<?= base_url(); ?>kelas_admin/update_form/<?= $val['id']; ?>">Update</a>
    <?php endforeach; ?>
    <a href="<?= base_url(); ?>kelas_admin">Back</a>
</body>
</html>