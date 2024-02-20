<?php echo $this->extend('template/admin/main') ?>

	<?php echo $this->section('content') ?>

	<div class="card mb-4">
      	<div class="card-body">

			<form action="<?php echo base_url(route_to('create-paypal'))?>" id="paypalform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>



								<div class="row">
									<div class="col-2"></div>

									<div class="col-8">

										<div class="row">

										<div class="col-6 mt-3">
										<label for="live_s_kye" class=""><?php echo lang("Localize.live") ?> <?php echo lang("Localize.secret") ?> <?php echo lang("Localize.key") ?></label>	
											<input type="text" id="live_s_kye" name ="live_s_kye" value="<?php echo esc(old('live_s_kye'))  ?>" class="form-control"  placeholder="<?php echo lang("Localize.live") ?> <?php echo lang("Localize.secret") ?> <?php echo lang("Localize.key") ?> ">
										</div>

										<div class="col-6 mt-3">
										<label for="live_c_kye" class=""><?php echo lang("Localize.live") ?> <?php echo lang("Localize.client") ?> <?php echo lang("Localize.id") ?></label>	
											<input type="text" id="live_c_kye" name ="live_c_kye" value="<?php echo esc(old('live_c_kye'))  ?>" class="form-control"  placeholder="<?php echo lang("Localize.live") ?> <?php echo lang("Localize.client") ?> <?php echo lang("Localize.id") ?>">
										</div>

										<div class="col-6 mt-3">
										<label for="test_s_kye" class=""><?php echo lang("Localize.test") ?> <?php echo lang("Localize.secret") ?> <?php echo lang("Localize.key") ?></label>	
											<input type="text" id="test_s_kye" name ="test_s_kye" value="<?php echo esc(old('test_s_kye'))  ?>" class="form-control"  placeholder="<?php echo lang("Localize.test") ?> <?php echo lang("Localize.secret") ?> <?php echo lang("Localize.key") ?>">
										</div>

										<div class="col-6 mt-3">
										<label for="test_c_kye" class=""><?php echo lang("Localize.test") ?> <?php echo lang("Localize.client") ?> <?php echo lang("Localize.id") ?></label>	
											<input type="text" id="test_c_kye" name ="test_c_kye" value="<?php echo esc(old('test_c_kye'))  ?>" class="form-control"  placeholder="<?php echo lang("Localize.test") ?> <?php echo lang("Localize.client") ?> <?php echo lang("Localize.id") ?>">
										</div>

										<div class="col-6 mt-3">
										<label for="email" class=""><?php echo lang("Localize.email") ?></label>	
											<input type="email" id="email" name ="email" value="<?php echo esc(old('email'))  ?>" class="form-control"  placeholder="<?php echo lang("Localize.email") ?>">
										</div>

										<div class="col-6 mt-3">
										<label for="marchantid" class=""><?php echo lang("Localize.merchant") ?> <?php echo lang("Localize.id") ?></label>	
											<input type="text" id="marchantid" name ="marchantid" value="<?php echo esc(old('marchantid'))  ?>" class="form-control"  placeholder="<?php echo lang("Localize.merchant") ?> <?php echo lang("Localize.id") ?>">
										</div>
								
											<label class="form-group  mt-3" for="">
											<?php echo lang("Localize.environment") ?>
											</label>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="environment" id="environment" value="1" checked>
												<label class="form-check-label" for="exampleRadios1">
												<?php echo lang("Localize.live") ?>
												</label>
											</div>
											<div class="form-check">
											<input class="form-check-input" type="radio" name="environment" id="environment" value="0">
											<label class="form-check-label" for="exampleRadios2">
											<?php echo lang("Localize.test") ?>
											</label>
											</div>


										<div class="text-danger">
											<?php if (isset($validation)): ?>
											<?=$validation->listErrors();?>
											<?php endif?>
										</div>

										</div>

										<br>
										<div class="col-12 text-center">
										<button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
										</div>

									</div>

									<div class="col-2"></div>

								</div>

					
				
			

			</form>
		</div>
	</div>

	<?php echo $this->endSection() ?>