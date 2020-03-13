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
        <tr>
            <td><?= $val['kategori'] ?></td>
        </tr>
        <tr>
            <td><a href="<?= 'http://www.'.$val['link']; ?> "> <?= $val['link'];?> </a></td>
        </tr>
        <tr>
        <td>
        <a href="<?= base_url('Portofolio_user/URead_porto/'); ?><?= $val['id']; ?>" class="badge badge-success">Read</a> 
      </td>
        </tr>

    <?php endforeach; ?>
    </table>

    <h1>Tentang</h1>
    <table>
    <?php foreach($tentang as $val) : ?>
    
        <tr>
            <td><img src="<?= base_url() . 'images/' . $val['path_gambar'] ?>" alt="<?= $val['path_gambar'] ?>" height="200px"></td>
        </tr>
        <tr>
            <td>Nama: <?= $val['nama'] ?></td>
        </tr>
        <tr>
            <td>Jabatan: <?= $val['jabatan'] ?></td>
        </tr>
        <tr>
            <td>Quote: <?= $val['quote'] ?></td>
        </tr>
        <?php if ($val['path_ig'] != null) : ?>
                <tr>
                    <td>Instagram</td>
                    <td>:</td>
                    <td><a href="<?= 'http://www.instagram.com/' . $val['path_ig'] ?>" target="_blank" style="text-decoration: none"><?= $val['path_ig'] ?></a></td>
                </tr>
            <?php endif; ?>
            <?php if ($val['path_fb'] != null) : ?>
                <tr>
                    <td>Facebook</td>
                    <td>:</td>
                    <td><a href="<?= 'http://www.facebook.com/' . $val['path_fb'] ?>" target="_blank"><?= $val['path_fb'] ?></a></td>
                </tr>
            <?php endif ?>
            <?php if ($val['path_twit'] != null) : ?>
                <tr>
                    <td>Twitter</td>
                    <td>:</td>
                    <td><a href="<?= 'http://www.twitter.com/' . $val['path_twit'] ?>" target="_blank"><?= $val['path_twit'] ?></a></td>
                </tr>
            <?php endif ?>

    <?php endforeach; ?>
    </table>

    <h1>Kelas</h1>
    <table>
    <?php foreach($kelas as $val) : ?>
    
        <tr>
            <td><img src="<?= base_url().'images/'.$val['path_gambar'] ?>" alt="<?= $val['path_gambar'] ?>" height="400px"></td>
        </tr>
        <tr>
            <td>Judul: <?= $val['judul'] ?></td>
        </tr>
        <tr>
            <td>Text: <?= $val['text'] ?></td>
        </tr>

    <?php endforeach; ?>
    </table>

    

</body>
</html>