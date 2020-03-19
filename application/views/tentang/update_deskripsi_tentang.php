<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Buat Blog</h3>
        <!-- FORM VALIDATION -->
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <div class=" form">
                        <form enctype="multipart/form-data" action="<?= base_url(); ?>tentang/updatedeskripsi/<?= $deskripsi['id'] ?>" class="cmxform form-horizontal style-form" id="commentForm" method="post">
                            <div class="form-group ">
                                <label for="deskripsi" class="control-label col-lg-2">Deskripsi</label>
                                <div class="col-lg-10">
                                    <textarea class="ckeditor" id="ckeditor" name="deskripsi" required><?= $deskripsi['deskripsi'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <input type="submit" name="submit" value="Save" class="btn btn-theme">
                                    <a href="<?= base_url() ?>tentang/viewDeskripsi"><button class="btn btn-theme04" type="button">Cancel</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /form-panel -->
            </div>
            <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
    </section>
    <!-- /wrapper -->
</section>