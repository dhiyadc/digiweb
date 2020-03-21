<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Data Les</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th><center>Kelas</center></th>
                  </tr>
                </thead>
                <tbody>
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
                    <?php foreach ($kelas as $val) : ?>
                        <tr class="gradeX">
                            <td>
                                <center><img src="<?= base_url().'images/'.$val['path_gambar']?>" alt="" height="400px"></center>
                                <br>
                                <center><a href="<?= base_url(); ?>kelas_admin/detail_class/<?= $val['id']; ?>"><?= $val['judul']; ?></a></center>
                            </td>
                        <tr>
                    <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>