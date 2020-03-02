<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas Les</title>
</head>
<body>
    <a href="<?= base_url(); ?>kelas_admin/create_form">Create Class</a>
    <table border="1">
        <thead>
            <th>Image</th>
            <th>Title Class</th>
        </thead>
        <tbody>
            <?php foreach ($kelas as $val) : ?>
                <tr>
                    <td>
                        <img src="<?= base_url().'images/'.$val['path_gambar']?>" alt="" height="200px">
                    </td>
                    <td>
                        <a href="<?= base_url(); ?>kelas_admin/detail_class/<?= $val['id']; ?>"><?= $val['judul']; ?></a>
                    </td>
                <tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= base_url() ?>login/logout">Logout</a>
</body>
</html>