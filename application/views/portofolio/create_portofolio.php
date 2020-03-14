<?php $this->load->view('partials/header'); ?>
</head>
<body>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <?php echo form_open_multipart('Portofolio/createPortofolio');?>
                    <div class="form-group">
                        <input type="file" name="path_gambar" id="path_gambar" value="<?= set_value('path_gambar');?>"  required accept=".png, .jpg, .jpeg">
                        <small class="form-text text-danger" ><?= form_error('image'); ?></small> 
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" value="<?= set_value('judul');?>" placeholder="Judul...">
                        <small class="form-text text-danger" ><?= form_error('judul'); ?></small> 
                    </div>
                    <div class="form-group">
                        <label for="text">Text</label>
                        <textarea class="form-control" name="text" id="text" rows="4" placeholder="Text..."><?= set_value('text');?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" name="link" id="link" value="<?= set_value('link');?>" placeholder="link...">
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" id="kategori" name="kategori">
                        <?php foreach($kategori as $kat): ?>
                            <?php if($kat == $portofolio['kategori']):?>
                                <option value="<?= $kat; ?>" selected><?= $kat; ?></option>
                            <?php else: ?>
                                <option value="<?= $kat; ?>"><?= $kat; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success" style="float: right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

<?php $this->load->view('partials/footer'); ?>