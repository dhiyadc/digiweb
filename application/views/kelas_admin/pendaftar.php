<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Data Pendaftar</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th><center>No.</center></th>
                    <th><center>Nama</center></th>
                    <th><center>No. HP</center></th>
                    <th><center>Email</center></th>
                    <th><center>Instansi</center></th>
                    <th><center>Tanggal Daftar</center></th>
                    <th><center>Layanan yang Diikuti</center></th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pendaftar as $val) : ?>
                        <tr class="gradeX">
                            <td><center><?= $i . "." ?></center></td>
                            <td><center><?= $val['nama'] ?></center></td>
                            <td><center><?= $val['no_hp'] ?></center></td>
                            <td><center><?= $val['email'] ?></center></td>
                            <td><center><?= $val['instansi'] ?></center></td>
                            <td><center><?= $val['tanggal_publish'] ?></center></td>
                            <?php foreach ($kelas as $val2) : ?>
                                <?php if($val['id_kelas'] == $val2['id']) : ?>
                                    <td><center><?= $val2['judul'] ?></center></td>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>