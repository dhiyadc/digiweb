<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
</head>
<body>
    <form action="<?= base_url() ?>kelas/daftar/<?= $id_class ?>" method="post">
        <table>
            <tr>
                Nama: <input type="text" name="nama" required>
            </tr>
            <tr>
                No. HP: <input type="number" name="no_hp" required>
            </tr>
            <tr>
                Email: <input type="email" name="email" required>
            </tr>
            <tr>
                Instansi: <input type="text" name="instansi" required>
            </tr>
            <button type="submit">Submit</button>
        </table>
    </form>
</body>
</html>