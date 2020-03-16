<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt mb">
            <div class="col-lg-12">
                <h3><i class="fa fa-angle-right"></i>Data Tentang</h3>
                <br>
                <?php foreach ($tentang as $value) : ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="dmbox">
                            <div class="service-icon">
                                <img src="<?= base_url() . 'images/' . $value['path_gambar'] ?>" alt="" height="150px">
                            </div>
                            <h4><a href="<?= base_url(); ?>tentang/viewTentangById/<?= $value['id']; ?>"><?= $value['nama'] ?></a></h4>
                            <p><?= $value['jabatan'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- /wrapper -->
</section>