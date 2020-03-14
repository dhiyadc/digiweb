<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
              
            </div>
            <!-- end col-4 -->
            <div class="col-lg-8 col-md-4 col-sm-4 col-xs-12">
              <div class="custom-box">
                <div class="servicetitle">
                  <h4><?= $portofolio['judul']; ?></h4>
                  <hr>
                </div>
                <div class="icn-main-container">
                    <img src="<?= base_url().'images/'.$portofolio['path_gambar']?>" alt="" height="350px">
                </div>
                <br><br>
                <p><?= $portofolio['text']; ?></p>
                <p><a href="<?= 'http://www.'.$portofolio['link']; ?> "> <?= $portofolio['link'];?> </a> </p>
                <center>
                    <small id="tanggal" class="form-text text-muted" ><?= $portofolio['tanggal_publish']; ?></small>
                    <br>
                    <small id="kategori" class="form-text text-muted" ><?= $portofolio['kategori']; ?></small>
                </center>
                <script type="text/javascript" language="JavaScript">
                    function konfirmasi() {
                        tanya = confirm("Anda Yakin Akan Menghapus Data ?");
                        if (tanya == true) return true;
                        else return false;
                    }
                </script>
                <br>
                <a onclick="return konfirmasi()" href="<?= base_url(); ?>portofolio/DeletePortofolio/<?= $portofolio['id']; ?>"><button type="button" class="btn btn-danger"> Delete </button></a>
                <a href="<?= base_url(); ?>portofolio/UpdatePortofolio/<?= $portofolio['id']; ?>" class="btn btn-primary">Update</a>
                <a href="<?= base_url(); ?>portofolio" class="btn btn-success">Back</a>
              </div>
              <!-- end custombox -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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