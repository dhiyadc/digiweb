<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
              
            </div>
            <!-- end col-4 -->
            <?php foreach ($kelas as $val) : ?>
            <div class="col-lg-8 col-md-4 col-sm-4 col-xs-12">
              <div class="custom-box">
                <div class="servicetitle">
                  <h4><?= $val['judul']; ?></h4>
                  <hr>
                  <?php if($this->session->flashdata('flash')) :?>
                    <div class="alert alert-success" role="alert">
                      <?= $this->session->flashdata('flash') ?>
                    </div>
                 <?php endif; ?>
                </div>
                <div class="icn-main-container">
                    <img src="<?= base_url().'images/'.$val['path_gambar']?>" alt="" width="600px" style="object-fit: cover">
                </div>
                <br>
                <h5>Harga: <?= $val['harga']; ?></h5>
                <br>
                <p><?= $val['deskripsi_1']; ?></p>
                <p><?= $val['deskripsi_2']; ?></p>
                <p><?= $val['deskripsi_3']; ?></p>
                <br>
                <small><?= $val['kategori']; ?></small>
                <br>
                <script type="text/javascript" language="JavaScript">
                    function konfirmasi() {
                        tanya = confirm("Anda Yakin Akan Menghapus Data ?");
                        if (tanya == true) return true;
                        else return false;
                    }
                </script>
                <br>
                <a onclick="return konfirmasi()" href="<?= base_url(); ?>kelas_admin/delete/<?= $val['id']; ?>"><button type="button" class="btn btn-danger"> Delete </button></a>
                <a href="<?= base_url(); ?>kelas_admin/update_form/<?= $val['id']; ?>" class="btn btn-primary">Update</a>
                <a href="<?= base_url(); ?>kelas_admin" class="btn btn-success">Back</a>
              </div>
              <?php endforeach; ?>
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