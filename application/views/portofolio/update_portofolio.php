<?php $this->load->view('partials/header'); ?>
</head>
<body>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
             <?php echo form_open_multipart('Portofolio/UpdatePortofolio/' . $portofolio['id']);?>
                    <input type="hidden" name="id" value="<?= $portofolio['id']; ?>">
                    <div class="form-group">
                        <input type="file" name="path_gambar" accept=".png, .jpg, .jpeg" id="path_gambar" value="<?= $portofolio['path_gambar']; ?>">
                        <img src="<?= base_url().'assets/images/'.$portofolio['path_gambar']?>" alt="" height="200px">
                        <small class="form-text text-danger" ><?= form_error('image'); ?></small>
                        <input type="hidden" name="old_image" value="<?= $portofolio['path_gambar'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul..." value="<?= $portofolio['judul']; ?>">
                        <small class="form-text text-danger" ><?= form_error('judul'); ?></small> 
                    </div>
                    <div class="form-group">
                        <label for="text">Text</label>
                        <textarea class="form-control" name="text" id="text" rows="4"><?= $portofolio['text']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="url" class="form-control" name="link" id="link" value="<?= $portofolio['link'] ?>" placeholder="link...">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <br>
                        <input type="radio" name="kategori" id="kategori" value="Website"><?= ($portofolio['kategori'] == 'Website')? "checked": ''?>Website <br>
                        <input type="radio" name="kategori" id="kategori" value="Mobile"><?= ($portofolio['kategori'] == 'Mobile')? "checked": ''?>Mobile <br>
                        <input type="radio" name="kategori" id="kategori" value="Multimedia"><?= ($portofolio['kategori'] == 'Multimedia')? "checked": ''?>Multimedia <br>    
                    </div>
                    <button type="submit" name="submit" class="btn btn-success" style="float: right">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

<?php $this->load->view('partials/footer'); ?>