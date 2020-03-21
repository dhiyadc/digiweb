<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Data Blog</h3>
        <!-- page start-->
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
        <div class="tab-pane" id="chartjs">
          <div class="row mt">
          <?php foreach ($blog as $key => $value): ?>
            <div class="col-lg-6">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i><a href="<?= base_url(); ?>blog/fullDetail/<?= $value['id'] ?>"><?= $value['judul']; ?></a></h4>
                <div class="panel-body text-center">
                  <img src="<?= base_url().'images/'.$value['path_gambar']?>" alt="" width="400px" style="object-fit: cover; height: 250px">
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