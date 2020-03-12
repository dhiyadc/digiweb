<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas</title>
</head>
<body>
    <?php foreach ($kelas as $val) : ?>
        <?php echo form_open_multipart('kelas_admin/update/' . $val['id']);?>
                Title: <input type="text" name="judul" value="<?= $val['judul']; ?>" required>
                Desc: <input type="text" name="text" value="<?= $val['text']; ?>" required>
                Image: <input type="file" name="path_gambar" accept=".png, .jpg, .jpeg">
                <img src="<?= base_url().'images/'.$val['path_gambar']?>" alt="" height="200px">
                <input type="hidden" name="old_image" value="<?= $val['path_gambar'] ?>">
                <input type="submit" name="submit" value="Submit">
        </form>
    <?php endforeach; ?>
</body>
</html>