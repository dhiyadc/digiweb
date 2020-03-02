<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
</head>
<body>
    <?php if(validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <?php echo form_open_multipart('kelas_admin/create');?>
        Title: <input type="text" name="judul">
        Desc: <input type="text" name="text">
        Image: <input type="file" name="path_gambar">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>