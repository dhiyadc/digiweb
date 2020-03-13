<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo form_open_multipart("Tentang/updateTentang/" . $staff['id']); ?>
    <table>
        <tr>
            <td>
                <h5>Nama</h5>
            </td>
            <td>
                <h5>:</h5>
            </td>
            <td><input type="text" maxlength="150" size="40" name="nama" id="jabatan" value="<?= $staff['nama'] ?>"></td>
            <td><?= form_error('nama') ?></td>
        </tr>
        <tr>
            <td>
                <h5>Jabatan</h5>
            </td>
            <td>
                <h5>:</h5>
            </td>
            <td><input type="text" maxlength="150" size="40" name="jabatan" id="jabatan" value="<?= $staff['jabatan'] ?>"></td>
            <td><?= form_error('jabatan') ?></td>
        </tr>
        <tr>
            <td>
                <h5>Quotes</h5>
            </td>
            <td>
                <h5>:</h5>
            </td>
            <td><input type="text" maxlength="150" size="40" name="quote" id="quote" value="<?= $staff['quote'] ?>"></td>
            <td><?= form_error('quote') ?></td>
        </tr>
        <tr>
            <td>
                <h5>instagram</h5>
            </td>
            <td>
                <h5>:</h5>
            </td>
            <td><input type="text" maxlength="150" size="40" name="ig" id="ig" value="<?= $staff['path_ig'] ?>"></td>
            <td><?= form_error('ig') ?></td>
        </tr>
        <tr>
            <td>
                <h5>Facebook</h5>
            </td>
            <td>
                <h5>:</h5>
            </td>
            <td><input type="text" maxlength="150" size="40" name="fb" id="fb" value="<?= $staff['path_fb'] ?>"></td>
            <td><?= form_error('fb') ?></td>
        </tr>
        <tr>
            <td>
                <h5>Twitter</h5>
            </td>
            <td>
                <h5>:</h5>
            </td>
            <td><input type="text" maxlength="150" size="40" name="twitter" id="twitter" value="<?= $staff['path_twit'] ?>"></td>
            <td><?= form_error('twitter') ?></td>
        </tr>
        <tr>
            <td>Apakah anda ingin menampilkan data di homepage?</td>
            <td>:</td>
            <td><input type="radio" name="prioritas" value="1" <?= ($staff['prioritas'] == "1") ? "checked" : '' ?>>Iya</td>
            <td><input type="radio" name="prioritas" value="0" <?= ($staff['prioritas'] == "0") ? "checked" : '' ?>>Tidak</td>
        </tr>
        <tr>
            <td>
                <h5>Image</h5>
            </td>
            <td>
                <h5>:</h5>
            </td>
            <td><input type="file" name="path_gambar" id="path_gambar" accept=".jpg, .png, .jpeg"></td>
            <td><img src="<?= base_url() . 'assets/tentang/' . $staff['path_gambar'] ?>" alt="" height="200px"></td>
            <input type="hidden" name="old_image" required value="<?= $staff['path_gambar'] ?>">
            <td><a href="<?= base_url("tentang/removeImage/") . $staff['id'] ?>" style="text-decoration: none"><button type="button">REMOVE IMAGE</td>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type="submit">SUBMIT</button></td>
            <td><a href="<?= base_url('tentang') ?>"><button>BACK</button></a></td>
        </tr>
    </table>
    </form>
</body>

</html>