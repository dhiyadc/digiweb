<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
<h1>Blog</h1>
<table>
    <?php foreach($blog as $val) : ?>
    
        <tr>
            <td><?= $val['judul'] ?></td>
        </tr>
        <tr>
            <td><?= $val['text'] ?></td>
        </tr>

    <?php endforeach; ?>
    </table>

        <h1>Portoflio</h1>
    <table>
    <?php foreach($portofolio as $val) : ?>
    
        <tr>
            <td><?= $val['judul'] ?></td>
        </tr>
        <tr>
            <td><?= $val['text'] ?></td>
        </tr>

    <?php endforeach; ?>
    </table>

    <h1>Tentang</h1>
    <table>
    <?php foreach($tentang as $val) : ?>
    
        <tr>
            <td>Nama: <?= $val['nama'] ?></td>
        </tr>
        <tr>
            <td>Jabatan: <?= $val['jabatan'] ?></td>
        </tr>
        <tr>
            <td>Quote: <?= $val['quote'] ?></td>
        </tr>
        <tr>
            <td> <a href="http://www.instagram.com/<?= $val['path_ig'] ?>">Instagram</a></td>
        </tr>
        <tr>
            <td> <a href="http://www.facebook.com/<?= $val['path_fb'] ?>">Facebook</a></td>
        </tr>
        <tr>
            <td> <a href="http://www.twitter.com/<?= $val['path_twit'] ?>">Twitter</a></td>
        </tr>

    <?php endforeach; ?>
    </table>

    

</body>
</html>