<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
</head>
<body>
    <?php if(validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <form action="<?= base_url() ?>kelas/daftar/<?= $id_class ?>" method="post">
        <table>
            <tr>
                Nama: <input type="text" name="nama">
            </tr>
            <tr>
                No. HP: <input type="number" name="no_hp">
            </tr>
            <tr>
                Email: <input type="email" name="email">
            </tr>
            <tr>
                Instansi: <input type="text" name="instansi">
            </tr>
            <button type="submit">Submit</button>
        </table>
    </form>
</body>
</html>