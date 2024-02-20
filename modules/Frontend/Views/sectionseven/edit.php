<?php echo $this->extend('template/admin/main') ?>
	<?php echo $this->section('content') ?>
	<?php echo $this->include('common/message') ?>
	<div class="card mb-4">
      <div class="card-body">

		<form action="<?php echo base_url(route_to('create-section-seven'))?>" id="sectionseven" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
					<?php echo $this->include('common/security') ?>

					<div class="row">
						<div class="col-2"></div>
						<div class="col-8">

							<div class="row">

										<div class="col-12 mt-3">
										<label for="title"><?php echo lang("Localize.title") ?> </label>
											<input type="text"  name ="title" value="<?php echo $secSeven->title ?? esc(old('title')) ?>" class="form-control text-capitalize">
										</div>

										<div class="col-12 mt-3">
										<label for="sub_title"><?php echo lang("Localize.sub") ?> <?php echo lang("Localize.title") ?> </label>
											<input type="text"  name ="sub_title" value="<?php  echo $secSeven->sub_title ?? esc(old('sub_title')) ?>" class="form-control text-capitalize">
										</div>


										<div class="col-12 mt-3">
										<label for="sectionSevenimg" class="form-label"><?php echo lang("Localize.image") ?></label>
										
											<div id="sectionSevenimg">
													
											</div>

										</div>

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

						<input type="hidden" id="secSevenimgpath"  name ="secSevenimgpath" value="<?php echo $secSeven->image ?? 'image/frontend/sectionone.jpg' ?>">
				
						<input type="hidden" id="baseurl"  name ="baseurl" value="<?php echo base_url() ?>" >

					</div>
				
		</form>

	</div>
</div>

<?php echo $this->endSection() ?>