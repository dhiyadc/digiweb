<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Edit Portofolio</h3>
        <!-- FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class=" form">
                <form enctype="multipart/form-data" action="<?= base_url(); ?>portofolio/UpdatePortofolio/<?= $portofolio['id'] ?>" class="cmxform form-horizontal style-form" id="commentForm" method="post">
                <!-- <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action=""> -->
                  <div class="form-group">
                    <label class="control-label col-md-2">Media</label>
                    <div class="col-md-4">
                      <input type="file" class="default" name="path_gambar" accept=".png, .jpg, .jpeg" />
                      <input type="hidden" name="old_image" value="<?= $portofolio['path_gambar'] ?>">
                      <small class="form-text text-danger" ><?= form_error('image'); ?></small> 
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Judul</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="judul" minlength="2" type="text" required value="<?= $portofolio['judul']; ?>"/>
                      <small class="form-text text-danger" ><?= form_error('judul'); ?></small> 
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Link</label>
                    <div class="col-lg-10">
                      <input type="url" class="form-control" name="link" id="link" value="<?= $portofolio['link'] ?>" placeholder="https://">
                    </div>
                  </div>
                  <div class="form-group">
                     <label for="ccomment" class="control-label col-lg-2">Kategori</label>
                       <div class="col-lg-10">
                         <?php foreach($kategori as $key => $value): ?>
                             <input type="radio" name="kategori" id="kategori" value="<?= $value['kategori'] ?>"<?= ( $value['kategori'] == $portofolio['kategori']) ? "checked" : ''?>><?= $value['kategori'] ?><br>
                         <?php endforeach; ?>
                       </div>  
                  </div>
                  <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Deskripsi</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="ccomment" name="text" required><?= $portofolio['text']; ?>"</textarea>
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