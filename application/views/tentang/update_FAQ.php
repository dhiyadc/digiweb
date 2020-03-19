<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Buat Tentang</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <div class="form">
                        <form enctype="multipart/form-data" action="<?= base_url(); ?>tentang/updateFAQ/<?= $faq['id'] ?>" class="cmxform form-horizontal style-form" id="commentForm" method="post">
                            <div class="form-group ">
                                <label for="Question" class="control-label col-lg-2">Question</label>
                                <div class="col-lg-10">
                                    <input type="text" maxlength="150" size="40" name="question" id="question" required class="form-control" value="<?= $faq['question'] ?>">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="answer" class="control-label col-lg-2">Answer</label>
                                <div class="col-lg-10">
                                    <input type="text" maxlength="150" size="40" name="answer" id="answer" required class="form-control" value="<?= $faq['answer'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <input type="submit" name="submit" value="Save" class="btn btn-theme">
                                    <a href="<?= base_url(); ?>tentang/viewFAQ"><button class="btn btn-theme04" type="button">Cancel</button>
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