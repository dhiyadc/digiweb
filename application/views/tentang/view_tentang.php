<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    foreach ($tentang as $value) : ?>
        <table>
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
                <td><a href="<?= base_url("tentang/viewTentangByID/") . $value['id'] ?>" style="text-decoration: none"><button type="button">VIEW</td>
                <td><a href="<?= base_url("tentang/deletetentang/") . $value['id'] ?>" style="text-decoration: none"><button type="button">DELETE</td>
                <td><a href="<?= base_url("tentang/updateTentang/") . $value['id'] ?>" style="text-decoration: none"><button type="button">UPDATE</td>
            </tr>
        </table>
        <br>
    <?php endforeach ?>
    <table>
        <tr>
            <td></td>
            <td></td>
            <td><a href="<?= base_url('tentang/createtentang') ?>" style="text-decoration: none"><button type="button">CREATE</td>
        </tr>
    </table>


</body>

</html>