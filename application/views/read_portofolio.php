<?php $this->load->view('partials/header') ?>

</head>
<body>    
    <div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
            <?= $portofolio['path_gambar']; ?>
            <center><small id="tanggal" class="form-text text-muted" ><?= $portofolio['tanggal_publish']; ?></small> </center>
                <div class="card-body">
                    <h5 class="card-title"><?= $portofolio['judul']; ?> </h5>
                    <p class="card-text"><?= $portofolio['text']; ?> </p>
                    <p class="card-text"><?= $portofolio['link']; ?> </p>
                </div>
            </div>
        </div>
        <div class="col-sm">
        </div>
    </div>
    </div>

<?php $this->load->view('partials/footer') ?>


