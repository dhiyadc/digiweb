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
                  <h4><?= $blog['judul']; ?></h4>
                  <hr>
                </div>
                <div class="icn-main-container">
                    <img src="<?= base_url().'images/'.$blog['path_gambar']?>" alt="" >
                </div>
				<br><br>
				<p><?= $blog['author'];?></p>
                <p><?= $blog['text']; ?></p>
                <center>
                    <small id="tanggal" class="form-text text-muted" ><?= $blog['tanggal_publish']; ?></small>
                    <br>
                    <small id="kategori" class="form-text text-muted" ><?= $blog['kategori']; ?></small>
                </center>
                <script type="text/javascript" language="JavaScript">
                    function konfirmasi() {
                        tanya = confirm("Anda Yakin Akan Menghapus Data ?");
                        if (tanya == true) return true;
                        else return false;
                    }
                </script>
                <br>
                <a onclick="return konfirmasi()" href="<?= base_url(); ?>blog/deleteblog/<?= $blog['id']; ?>"><button type="button" class="btn btn-danger"> Delete </button></a>
                <a href="<?= base_url(); ?>blog/update/<?= $blog['id']; ?>" class="btn btn-primary">Update</a>
				<a href="<?= base_url(); ?>blog/readblog" class="btn btn-success">Back</a>
				<hr>
			<ul class="list-group list-group-flush">
				<li class="list-group-item list-group-item-dark">Rating</li>
				<li class="list-group-item">Like : <?= $rateli['like']; ?></li>
				<li class="list-group-item">Love : <?= $ratelo['love']; ?></li>
				<li class="list-group-item">Haha : <?= $rateh['haha']; ?></li>
				<li class="list-group-item">Wow : <?= $ratew['wow']; ?></li>
				<li class="list-group-item">Sad : <?= $rates['sad']; ?></li>
				<li class="list-group-item">Angry : <?= $ratea['angry']; ?></li>
			</ul>
			<hr>
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<h2 class="display-6 ">Komentar Pada Blog ini</h2>
					<br>
					<?php if($this->session->flashdata('message')) :?>
					<div class="alert alert-danger" role="alert">
						<?= $this->session->flashdata('message') ?>
					</div>
					<?php endif; ?>

				</div>
				<!-- end col-4 -->
				<div class="col-lg-8 col-md-4 col-sm-4 col-xs-12">
					<div class="custom-box">
						<div class="servicetitle">
							<h4><?= $judul ?></h4>
							<hr>
						</div>
						<div class="icn-main-container">
							<img src="<?= base_url("images/$path_gambar")?>" alt="" height="350px">
						</div>
						<br><br>
						<p><?= $author?></p>
						<p><?= html_entity_decode( $text) ?></p>
						<center>
							<small id="tanggal" class="form-text text-muted"><?= $tanggal_publish ?></small>
							<br>
							<small id="kategori" class="form-text text-muted"><?= implode(", " ,$kategori) ?> </small>
						</center>
						<script type="text/javascript" language="JavaScript">
							function konfirmasi() {
								tanya = confirm("Anda Yakin Akan Menghapus Data ?");
								if (tanya == true) return true;
								else return false;
							}

						</script>
						<br>
						<a onclick="return konfirmasi()"
							href="<?= base_url(); ?>blog/deleteblog/<?= $id_blog ?>"><button type="button"
								class="btn btn-danger"> Delete </button></a>
						<a href="<?= base_url(); ?>blog/update/<?= $id_blog ?>" class="btn btn-primary">Update</a>
						<a href="<?= base_url(); ?>blog/readblog" class="btn btn-success">Back</a>
						<hr>
						<ul class="list-group list-group-flush">
							<li class="list-group-item list-group-item-dark">Rating</li>
							<li class="list-group-item">Like : <?= $rating['like'] ?></li>
							<li class="list-group-item">Love : <?= $rating['love']; ?></li>
							<li class="list-group-item">Haha : <?= $rating['haha']; ?></li>
							<li class="list-group-item">Wow : <?= $rating['wow']; ?></li>
							<li class="list-group-item">Sad : <?= $rating['sad']; ?></li>
							<li class="list-group-item">Angry : <?= $rating['angry']; ?></li>
						</ul>
						<hr>
						<div class="jumbotron jumbotron-fluid">
							<div class="container">
								<h2 class="display-6 ">Komentar Pada Blog ini</h2>
								<br>
								<?php if($this->session->flashdata('message')) :?>
								<div class="alert alert-danger" role="alert">
									<?= $this->session->flashdata('message') ?>
								</div>
								<?php endif; ?>

								<?php foreach($comment as $value) :?>
								<p class="lead">
									<div class="alert alert-light" role="alert">
										<b><?= $value['name'] ?> : </b>
										<?= $value['comment'] ?>
										<br>
										<a href="<?= base_url('')?>Blog/deleteComment/<?= $value['id_comment'] ?>/<?= $id_blog ?>"
											class="badge badge-danger"
											onclick="return confirm('Yakin hapus comment??');">Delete</a>
									</div>
								</p>
								<?php endforeach;?>
							</div>
						</div>
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
