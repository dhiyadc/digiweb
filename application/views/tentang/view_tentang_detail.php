<section id="main-content">
  <section class="wrapper site-min-height">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="row content-panel">
          <div class="col-md-4 profile-text mt mb centered">
            <div class="right-divider hidden-sm hidden-xs">
              <?php if ($staff['path_ig'] != null) : ?>
                <h4><a href="<?= 'http://www.instagram.com/' . $staff['path_ig'] ?>" target="_blank" style="text-decoration: none"><?= $staff['path_ig'] ?></a></h4>
                <h6>Instagram</h6>
              <?php endif; ?>
              <?php if ($staff['path_fb'] != null) : ?>
                <h4><a href="<?= 'http://www.facebook.com/' . $staff['path_fb'] ?>" target="_blank" style="text-decoration: none"><?= $staff['path_fb'] ?></a></h4>
                <h6>Facebook</h6>
              <?php endif; ?>
              <?php if ($staff['path_twit'] != null) : ?>
                <h4><a href="<?= 'http://www.twitter.com/' . $staff['path_twit'] ?>" target="_blank" style="text-decoration: none"><?= $staff['path_twit'] ?></a></h4>
                <h6>Twitter</h6>
              <?php endif; ?>
            </div>
          </div>
          <!-- /col-md-4 -->
          <div class="col-md-4 profile-text">
            <h3><?= $staff['nama'] ?></h3>
            <h6><?= $staff['jabatan'] ?></h6>
            <p><?= $staff['quote'] ?></p>
            <br>
            <p><a href="<?= base_url(); ?>tentang/updateTentang/<?= $staff['id'] ?>" class="btn btn-theme"><i class="fa fa-pencil"></i> Edit Profile</a></p>
            <script type="text/javascript" language="JavaScript">
              function konfirmasi() {
                tanya = confirm("Anda Yakin Akan Menghapus Data ?");
                if (tanya == true) return true;
                else return false;
              }
            </script>
            <p><a onclick="return konfirmasi()" href="<?= base_url(); ?>tentang/deletetentang/<?= $staff['id']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Delete Profile</button></a></p>
          </div>
          <!-- /col-md-4 -->
          <div class="col-md-4 centered">
            <div class="profile-pic">
              <p><img src="<?= base_url() . 'images/' . $staff['path_gambar'] ?>" style="object-fit: cover" alt="" height="100px"></p>
              <p><a href="<?= base_url(); ?>tentang" class="btn btn-success">Back</a></p>
            </div>
          </div>
          <!-- /col-md-4 -->
        </div>
        <!-- /row -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </section>
  <!-- /wrapper -->
</section>