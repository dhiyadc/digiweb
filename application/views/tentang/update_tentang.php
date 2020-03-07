<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= base_url("Tentang/updateTentang/" . $staff['id']) ?>" method="POST">
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
                <td></td>
                <td></td>
                <td><button type="submit">SUBMIT</button></td>
                <td><a href="<?= base_url('tentang') ?>"><button>BACK</button></a></td>
            </tr>
        </table>
    </form>
</body>

</html>