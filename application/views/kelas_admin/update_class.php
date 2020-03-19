<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i>Edit Kelas Les</h3>
    <!-- FORM VALIDATION -->
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <div class=" form">
            <?php foreach ($kelas as $val) : ?>
              <form enctype="multipart/form-data" action="<?= base_url(); ?>kelas_admin/update/<?= $val['id']; ?>" class="cmxform form-horizontal style-form" id="commentForm" method="post">
                <div class="form-group">
                  <label class="control-label col-md-2">Media</label>

                  <div class="col-md-4">
                    <input type="file" class="default" name="path_gambar" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="old_image" value="<?= $val['path_gambar'] ?>">
                  </div>
                </div>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Nama Kelas</label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="cname" name="judul" minlength="2" type="text" value="<?= $val['judul']; ?>" required />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="ccomment" class="control-label col-lg-2">Deskripsi Kelas</label>
                  <div class="col-lg-10">
                    <textarea class="form-control " id="ccomment" name="text" required><?= $val['text']; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <input type="submit" name="submit" value="Save" class="btn btn-theme">
                    <a href="<?= base_url() ?>kelas_admin"><button class="btn btn-theme04" type="button">Cancel</button></a>
                  </div>
                </div>
              </form>
            <?php endforeach; ?>
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