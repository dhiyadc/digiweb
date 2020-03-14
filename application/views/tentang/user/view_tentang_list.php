<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= $this->session->flashdata('message') ?>

</head>

<body>

    <?php
    foreach ($tentang as $value) : ?>
        <table>
            <tr>
                <td>
                    <img src="<?= base_url() . 'images/' . $value['path_gambar'] ?>" alt="" height="200px">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td> <?= $value['nama'] ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?= $value['jabatan'] ?></td>
            </tr>
            <tr>
                <td>Quotes</td>
                <td>:</td>
                <td><?= $value['quote'] ?></td>
            </tr>
            <?php if ($value['path_ig'] != null) : ?>
                <tr>
                    <td>Instagram</td>
                    <td>:</td>
                    <td><a href="<?= 'http://www.instagram.com/' . $value['path_ig'] ?>" target="_blank" style="text-decoration: none"><?= $value['path_ig'] ?></a></td>
                </tr>
            <?php endif; ?>
            <?php if ($value['path_fb'] != null) : ?>
                <tr>
                    <td>Facebook</td>
                    <td>:</td>
                    <td><a href="<?= 'http://www.facebook.com/' . $value['path_fb'] ?>" target="_blank"><?= $value['path_fb'] ?></a></td>
                </tr>
            <?php endif ?>
            <?php if ($value['path_twit'] != null) : ?>
                <tr>
                    <td>Twitter</td>
                    <td>:</td>
                    <td><a href="<?= 'http://www.twitter.com/' . $value['path_twit'] ?>" target="_blank"><?= $value['path_twit'] ?></a></td>
                </tr>
            <?php endif ?>
        </table>
        <table>
            <tr>
                <td></td>
                <td></td>
                <td><a href="<?= base_url("tentang_user/viewTentangByID/") . $value['id'] ?>" style="text-decoration: none"><button type="button">VIEW</td>
                <br>
            <?php endforeach ?>
</body>

</html>