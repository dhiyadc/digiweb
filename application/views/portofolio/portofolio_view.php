    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>Data Portofolio</h3>
        <hr>
        <?php if($this->session->flashdata('create')) :?>
                      <div class="alert alert-success" role="alert">
                        <?= $this->session->flashdata('create') ?>
                      </div>
                  <?php endif; ?>
        <?php if($this->session->flashdata('delete')) :?>
                      <div class="alert alert-danger" role="alert">
                        <?= $this->session->flashdata('delete') ?>
                      </div>
        <?php endif; ?>
        
        <div class="row mt">
        <?php foreach ($portofolio as $key => $value): ?>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
              <div class="project">
                <div class="photo-wrapper">
                  <div class="photo">
                    <a class="fancybox" href="<?= base_url(); ?>portofolio/ReadPortofolio/<?= $value['id'] ?>">
                      <img class="img-responsive" src="<?= base_url().'images/'.$value['path_gambar']?>" width="400px" style="object-fit: cover; height: 250px" alt="">
                    </a>
                  </div>
                  <div class="overlay"></div>
                </div>
              </div>
              <br>
            </div>
          </div>
          <!-- col-lg-4 -->
          <?php endforeach; ?>
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>