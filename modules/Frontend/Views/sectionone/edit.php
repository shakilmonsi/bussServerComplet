<?php echo $this->extend('template/admin/main') ?>
	<?php echo $this->section('content') ?>
	<?php echo $this->include('common/message') ?>
	<div class="card mb-4">
      <div class="card-body">


		<form action="<?php echo base_url(route_to('create-section-one'))?>" id="sectionone" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
					<?php echo $this->include('common/security') ?>


					<div class="row">
						<div class="col-2"></div>

						<div class="col-8">

							<div class="row">

								<div class="col-12 mt-3">
									<label for="title"><?php echo lang("Localize.title") ?></label>
									<input type="text"  name ="title" value="<?php echo $secOne->title ?? esc(old('title')) ?>" class="form-control text-capitalize">
								</div>

								<div class="col-12 mt-3">
								<label for="sub_title"><?php echo lang("Localize.sub") ?> <?php echo lang("Localize.title") ?> </label>
									<input type="text"  name ="sub_title" value="<?php  echo $secOne->sub_title ?? esc(old('sub_title')) ?>" class="form-control text-capitalize">
								</div>

								<div class="col-12 mt-3">
								<label for="button_text"><?php echo lang("Localize.button") ?> <?php echo lang("Localize.text")?> </label>
									<input type="text"  name ="button_text" value="<?php echo $secOne->button_text ?? esc(old('button_text')) ?>" class="form-control text-capitalize">
								</div>
								

								<div class="col-12 mt-3">
								<label for="sectiononeimg" class="form-label"><?php echo lang("Localize.image") ?></label>
								
									<div id="sectiononeimg">
											
									</div>

								</div>

								<input type="hidden" id="seconeimagpath"  name ="seconeimagpath" value="<?php echo $secOne->image ?? 'image/frontend/sectionone.jpg' ?>">
				
								<input type="hidden" id="baseurl"  name ="baseurl" value="<?php echo base_url() ?>" >


								<div class="text-danger">
									<?php if (isset($validation)): ?>
									<?=$validation->listErrors();?>
									<?php endif?>
								</div>

								<br>
								<div class="col-12 text-center">
								<button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
								</div>

							</div>

						</div>

						<div class="col-2"></div>


					</div>
	
		</form>
</div>
</div>
<?php echo $this->endSection() ?>