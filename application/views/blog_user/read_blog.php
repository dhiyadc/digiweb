<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Data Blog</h3>
        <!-- page start-->
        
        <div class="tab-pane" id="chartjs">
          <div class="row mt">
          <?php foreach ($blog as $key => $value): ?>
            <div class="col-lg-6">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i><a href="<?= base_url(); ?>blog/fullDetail/<?= $value['id'] ?>"><?= $value['judul']; ?></a></h4>
                <div class="panel-body text-center">
                  <img src="<?= base_url().'images/'.$value['path_gambar']?>" alt="" height="250px">
                </div>
              </div>
              <br>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>