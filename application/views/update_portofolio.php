<?php $this->load->view('partials/header'); ?>
</head>
<body>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form sction="" method="post">
                    <input type="hidden" name="id" value="<?= $portofolio['id']; ?>">
                    <div class="form-group">
                        <input type="file" name="image" id="image" value="<?= $portofolio['path_gambar']; ?>">
                        <small class="form-text text-danger" ><?= form_error('image'); ?></small>
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
                        <input type="text" class="form-control" name="link" id="link" value="<?= $portofolio['link'] ?>" placeholder="link...">
                    </div>
                    <button type="submit" name="submit" class="btn btn-success" style="float: right">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

<?php $this->load->view('partials/footer'); ?>