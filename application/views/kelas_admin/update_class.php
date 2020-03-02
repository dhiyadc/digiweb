<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas</title>
</head>
<body>
    <?php if(validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <?php foreach ($kelas as $val) : ?>
        <?php echo form_open_multipart('kelas_admin/update/' . $val['id']);?>
                Title: <input type="text" name="judul" value="<?= $val['judul']; ?>">
                Desc: <input type="text" name="text" value="<?= $val['text']; ?>">
                Image: <input type="file" name="path_gambar">
                <img src="<?= base_url().'images/'.$val['path_gambar']?>" alt="" height="200px">
                <input type="hidden" name="old_image" value="<?= $val['path_gambar'] ?>">
                <input type="submit" name="submit" value="Submit">
        </form>
    <?php endforeach; ?>
</body>
</html>