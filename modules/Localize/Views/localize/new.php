<?php echo $this->extend('template/admin/main') ?>

	<?php echo $this->section('content') ?>
	<?php echo $this->include('common/message') ?>

	<div class="card mb-4">
      <div class="card-body">

			<form action="<?php echo base_url(route_to('create-language')) ?>" id="languageform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>

								<div class="row">

									<div class="col-4"></div>

									<div class="col-4">

										<div class="row">

															<div class="col-12 ">
															<label for="lngid" class="form-label"><?php echo lang("Localize.language") ?> <?php echo lang("Localize.name") ?></label>
																<select class="form-select" name="lngid" id="lngid" required>
																	<option value="">None</option>
																		<?php foreach ($language as $lagvalue): ?>

																			<option value="<?php echo $lagvalue->id ?>"><?php echo $lagvalue->name ?></option>

																		<?php endforeach?>
																</select>

															</div>

															<div class="col-12 mt-4">
																<label for="language_code" class="mb-1"><?php echo lang("Localize.language") ?> <?php echo lang("Localize.code") ?> </label>
																<input type="text" id="language_code" name ="language_code" value="<?php echo esc(old('language_code')) ?>" class="form-control text-capitalize"  placeholder="<?php echo lang("Localize.language") ?> <?php echo lang("Localize.code") ?>" readonly>
															</div>


															<input type="hidden" id="baseurl" name ="baseurl" value="<?php echo base_url() ?>" >
															<input type="hidden" id="name" name ="name"  >


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

									<div class="col-4"></div>

								</div>






			</form>
		</div>
	</div>

	<?php echo $this->endSection() ?>