<?php $this->load->view('partials/header') ?>

</head>
<body>    
    <div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
            <img src="<?= base_url().'images/'.$portofolio['path_gambar']?>" alt="" height="200px">
            <center><small id="tanggal" class="form-text text-muted" ><?= $portofolio['tanggal_publish']; ?></small> </center>
                <div class="card-body">
                    <h5 class="card-title"><?= $portofolio['judul']; ?> </h5>
                    <p class="card-text"><?= $portofolio['text']; ?> </p>
                    <p class="card-text"><a href="<?= 'http://www.'.$portofolio['link']; ?> "> <?= $portofolio['link'];?> </a> </p>
                </div>
            </div>
        </div>
        <div class="col-sm">
        </div>
    </div>
    </div>

<?php $this->load->view('partials/footer') ?>


