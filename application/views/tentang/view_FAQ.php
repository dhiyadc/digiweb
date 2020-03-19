<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt mb">
            <div class="col-lg-12">
                <h3><i class="fa fa-angle-right"></i>FREQUENTLY ASKED QUESTION <a href="<?= base_url() ?>tentang/insertFAQ" style="float: right"><button class=" btn btn-theme"><i class="fa fa-pencil"></i> Create</button></a></h3>

                <br>
                <?php foreach ($faq as $value) : ?>
                    <div class="col-lg-6     col-md-4 col-sm-12">
                        <div class="dmbox">
                            <h4>Q: <?= $value['question'] ?></h4>
                            <p>A: <?= $value['answer'] ?></p>
                            <br>

                            <a href="<?= base_url() ?>tentang/updateFAQ/<?= $value['id'] ?>"><button class=" btn btn-theme"><i class="fa fa-pencil"></i> Update</button></a>
                            <script type="text/javascript" language="JavaScript">
                                function konfirmasi() {
                                    tanya = confirm("Anda Yakin Akan Menghapus Data ?");
                                    if (tanya == true) return true;
                                    else return false;
                                }
                            </script>
                            <a onclick="return konfirmasi()" href="<?= base_url(); ?>tentang/deleteFAQ/<?= $value['id']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></a>
                        </div>
                        <br>
                    </div>
                <?php endforeach; ?>
            </div>
            <br>

        </div>
    </section>
    <!-- /wrapper -->
</section>