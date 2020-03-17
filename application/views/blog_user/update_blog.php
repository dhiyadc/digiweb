<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i>Edit Blog</h3>
		<!-- FORM VALIDATION -->
		<div class="row mt">
			<div class="col-lg-12">
				<div class="form-panel">
					<div class=" form">
						<form enctype="multipart/form-data" action="<?=base_url();?>blog/updateblog/<?=$ublog['id'];?>"
							class="cmxform form-horizontal style-form" id="commentForm" method="post">
							<div class="form-group">
								<label class="control-label col-md-2">Media</label>
								<div class="col-md-4">
									<input type="file" class="default" name="path_gambar" accept=".png, .jpg, .jpeg" />
									<input type="hidden" name="old_image" value="<?=$ublog['path_gambar']?>">
								</div>
							</div>
							<div class="form-group ">
								<label for="cname" class="control-label col-lg-2">Judul Blog</label>
								<div class="col-lg-10">
									<input class=" form-control" id="cname" name="judul" minlength="2" type="text"
										required value="<?=$ublog['judul'];?>" />
								</div>
							</div>
							<div class="form-group">
								<label for="Kategori" class="control-label col-lg-2">Kategori : </label>
								<br>
								<?php foreach ($kategori as $key => $value): ?>
								<div class="col-lg-10">
									<input type="checkbox" name="kategori[]" value="<?=$value['id']?>"
										<?php foreach ($kat_pilih as $valuekp): ?>
										<?= ($value['id'] == $valuekp['id_kategori']) ? 'checked' : '' ?>
										<?php endforeach;?>>
									<?=$value['kategori']?>
								</div>
								<?php endforeach;?>

							</div>

							<div class="form-group ">
								<label for="ccomment" class="control-label col-lg-2">Text</label>
								<div class="col-lg-10">
									<textarea class="ckeditor" id="ckeditor" name="text"
										required><?=$ublog['text'];?></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<input type="submit" name="submit" value="Save" class="btn btn-theme">
									<a href="<?= base_url('') ?>blog/fullDetail/<?= $ublog['id'] ?>"
										class="btn btn-theme04">Cancel</a>
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
