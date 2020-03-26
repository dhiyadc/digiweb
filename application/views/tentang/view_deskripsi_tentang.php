<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                    
                </div>
                <?php if ($count == 0) : ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-top: 20px;">
                        <a href="<?= base_url() ?>tentang/insertDeskripsi" style="float: right"><button class=" btn btn-theme"><i class="fa fa-pencil"></i> Create</button></a>
                    </div>
                <?php endif; ?>
                <?php if ($count >= 1) : ?>
                <div class="col-lg-8 col-md-4 col-sm-4 col-xs-12">
                    <div class="custom-box">
                        <div class="servicetitle">
                            <h4>DESKRIPSI PERUSAHAAN</h4>
                            <hr>
                            <?php if($this->session->flashdata('flash')) :?>
                                <div class="alert alert-success" role="alert">
                                <?= $this->session->flashdata('flash') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <br><br>
                        <p style="font-size: 14PX"><?= html_entity_decode($deskripsi['deskripsi']) ?></p>
                        <br><br>
                        <a href="<?= base_url() ?>tentang/updateDeskripsi"><button class=" btn btn-theme">UPDATE</button></a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        <!-- end col-4 -->
        <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> -->
        <!-- end custombox -->
        </div>
        <!-- end col-4 -->
        </div>
        <!--  /col-lg-12 -->
        </div>
        <!--  /row -->
    </section>
    <!-- /wrapper -->
</section>