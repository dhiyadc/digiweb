<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i>Buat Tentang</h3>
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <div class="form">
            <form enctype="multipart/form-data" action="<?= base_url(); ?>tentang/updateTentang/<?= $staff['id']; ?>" class="cmxform form-horizontal style-form" id="commentForm" method="post">
              <div class="form-group">
                <label class="control-label col-md-2">Media</label>
                <div class="col-md-4">
                  <input type="file" class="default" name="path_gambar" id="path_gambar" accept=".jpg, .png, .jpeg" />
                  <input type="hidden" name="old_image" required value="<?= $staff['path_gambar'] ?>">
                </div>
              </div>
              <div class="form-group ">
                <label for="firstname" class="control-label col-lg-2">Nama</label>
                <div class="col-lg-10">
                  <input type="text" maxlength="150" size="40" name="nama" id="nama" class="form-control" value="<?= $staff['nama'] ?>" required>
                </div>
              </div>
              <div class="form-group ">
                <label for="lastname" class="control-label col-lg-2">Jabatan</label>
                <div class="col-lg-10">
                  <input type="text" maxlength="150" size="40" name="jabatan" id="jabatan" required class="form-control" value="<?= $staff['jabatan'] ?>">
                </div>
              </div>
              <div class="form-group ">
                <label for="lastname" class="control-label col-lg-2">Quotes</label>
                <div class="col-lg-10">
                  <input type="text" maxlength="150" size="40" name="quote" id="quote" required class="form-control" value="<?= $staff['quote'] ?>">
                </div>
              </div>
              <div class="form-group ">
                <label for="lastname" class="control-label col-lg-2">Facebook</label>
                <div class="col-lg-10">
                  <input type="text" maxlength="150" size="40" name="fb" id="fb" class="form-control" value="<?= $staff['path_fb'] ?>">
                </div>
              </div>
              <div class="form-group ">
                <label for="lastname" class="control-label col-lg-2">Instagram</label>
                <div class="col-lg-10">
                  <input type="text" maxlength="150" size="40" name="ig" id="ig" class="form-control" value="<?= $staff['path_ig'] ?>">
                </div>
              </div>
              <div class="form-group ">
                <label for="lastname" class="control-label col-lg-2">Twitter</label>
                <div class="col-lg-10">
                  <input type="text" maxlength="150" size="40" name="twitter" id="twitter" class="form-control" value="<?= $staff['path_twit'] ?>">
                </div>
              </div>

              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <input type="submit" name="submit" value="Save" class="btn btn-theme">
                  <a href="<?= base_url(); ?>tentang/viewtentangbyID/<?= $staff['id'] ?>" $id><button class="btn btn-theme04" type="button">Cancel</button>
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