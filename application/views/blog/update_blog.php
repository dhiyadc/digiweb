<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Edit Blog</h3>
        <!-- FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class=" form">
                <form enctype="multipart/form-data" action="<?= base_url(); ?>blog/updateblog/<?= $blog['id']; ?>" class="cmxform form-horizontal style-form" id="commentForm" method="post">
                  <div class="form-group">
                    <label class="control-label col-md-2">Media</label>
                    <div class="col-md-4">
					  <input type="file" class="default" name="path_gambar" accept=".png, .jpg, .jpeg"/>
					  <input type="hidden" name="old_image" value="<?= $blog['path_gambar'] ?>">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Judul Blog</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="judul" minlength="2" type="text" required value="<?= $blog['judul']; ?>" />
                    </div>
				  </div>
				  <div class="form-group">
					<label for="Kategori" class="control-label col-lg-2">Kategori : </label>
					<br>
					<div class="col-lg-10">
						<input type="radio" name="kategori" value="Kecerdasan buatan" <?= ($blog['kategori'] == "Kecerdasan buatan") ? "checked" : '' ?>> Kecerdasan buatan <br>
						<input type="radio" name="kategori" value="Desain" <?= ($blog['kategori'] == "Desain") ? "checked" : '' ?>> Desain <br>
						<input type="radio" name="kategori" value="Network" <?= ($blog['kategori'] == "Network") ? "checked" : '' ?>> Network <br>
						<input type="radio" name="kategori" value="Business" <?= ($blog['kategori'] == "Business") ? "checked" : '' ?>> Business
					</div>
				</div>
                  <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Text</label>
                    <div class="col-lg-10">
                      <textarea class="ckeditor" id="ckeditor" name="text" required><?= $blog['text']; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <input type="submit" name="submit" value="Save" class="btn btn-theme">
                      <button class="btn btn-theme04" type="button">Cancel</button>
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