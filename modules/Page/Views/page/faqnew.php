<?php echo $this->extend('template/admin/main') ?>

	<?php echo $this->section('content') ?>

	<div class="card mb-4">
      <div class="card-body">

			<form action="<?php echo base_url(route_to('create-faq'))?>" id="termcreate" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>
			
				<div class="col-4">
				<label for="title"><?php echo lang("Localize.title") ?></label>
					<input type="text" id="title" name ="title" value="<?php echo esc(old('title'))  ?>" class="form-control text-capitalize"  placeholder="<?php echo lang("Localize.title") ?>">
				</div>

				<div class="col-4">
				<label for="sub_title"><?php echo lang("Localize.sub") ?> <?php echo lang("Localize.title") ?></label>
					<input type="text" id="sub_title" name ="sub_title" value="<?php echo esc(old('sub_title'))  ?>" class="form-control text-capitalize"  placeholder="<?php echo lang("Localize.sub") ?> <?php echo lang("Localize.title") ?>">
				</div>
				
				<div class="col-4">
				<br>
					<button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
				</div>
				<br>
										<div class="text-danger">
												<?php if (isset($validation)): ?>
												<?=$validation->listErrors();?>
												<?php endif?>
											</div>

											
											
			

			</form>
			</div>
	</div>		
			
	<?php echo $this->endSection() ?>

	