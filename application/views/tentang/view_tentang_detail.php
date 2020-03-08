<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <td>
                <img src="<?= base_url() . 'assets/tentang/' . $staff['path_gambar'] ?>" alt="" height="200px">
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td> <?= $staff['nama'] ?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?= $staff['jabatan'] ?></td>
        </tr>
        <tr>
            <td>Quotes</td>
            <td>:</td>
            <td><?= $staff['quote'] ?></td>
        </tr>
        <?php if ($staff['path_ig'] != null) : ?>
            <tr>
                <td>Instagram</td>
                <td>:</td>
                <td><a href="<?= 'http://www.instagram.com/' . $staff['path_ig'] ?>" target="_blank" style="text-decoration: none"><?= $staff['path_ig'] ?></a></td>
            </tr>
        <?php endif; ?>
        <?php if ($staff['path_fb'] != null) : ?>
            <tr>
                <td>Facebook</td>
                <td>:</td>
                <td><a href="<?= 'http://www.facebook.com/' . $staff['path_fb'] ?>" target="_blank"><?= $staff['path_fb'] ?></a></td>
            </tr>
        <?php endif ?>
        <?php if ($staff['path_twit'] != null) : ?>
            <tr>
                <td>Twitter</td>
                <td>:</td>
                <td><a href="<?= 'http://www.twitter.com/' . $staff['path_twit'] ?>" target="_blank"><?= $staff['path_twit'] ?></a></td>
            </tr>
        <?php endif ?>

    </table>
    <br>
    <table>
        <tr>
            <td><a href="<?= base_url('tentang') ?>"><button>BACK</button></a></td>
        </tr>
    </table>
</body>

</html>