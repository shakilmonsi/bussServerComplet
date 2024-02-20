<?php echo $this->extend('template/admin/main') ?>
	<?php echo $this->section('content') ?>
	<?php echo $this->include('common/message') ?>

	<div class="card mb-4">
      	<div class="card-body">

		<form action="<?php echo base_url(route_to('update-footer', $footer->id)) ?>" id="footeredit" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
				<?php echo $this->include('common/securityupdate') ?>
				

				<div class="col-2">
				<label for="contact" class=""><?php echo lang("Localize.contact_number") ?></label>	
					<input type="text" id="contact" name ="contact" value="<?php echo esc(old('contact')) ?? $footer->contact  ?>" class="form-control">
				</div>

				<div class="col-3">
				<label for="email" class=""><?php echo lang("Localize.email") ?></label>	
					<input type="email" id="email" name ="email" value="<?php echo esc(old('email')) ?? $footer->email  ?>" class="form-control">
				</div>

				<div class="col-2">
				<label for="value" class=""><?php echo lang("Localize.office_open_time") ?></label>	
					<input type="text" id="opentime" name ="opentime" value="<?php echo esc(old('opentime')) ?? $footer->opentime  ?>" class="form-control">
				</div>
				<div class="col-3">
				<label for="address" class=""><?php echo lang("Localize.address") ?></label>	
					<input type="text" id="address" name ="address" value="<?php echo esc(old('address')) ??  $footer->address  ?>" class="form-control">
				</div>

				<div class="col-2">
					<br>
				<button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
				</div>

							<div class="text-danger">
                                <?php if (isset($validation)): ?>
                                  <?=$validation->listErrors();?>
                                <?php endif?>
                            </div>
		
		</form>

		</div>
	</div>

<?php echo $this->endSection() ?>