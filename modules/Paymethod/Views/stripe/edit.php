<?php echo $this->extend('template/admin/main') ?>
	<?php echo $this->section('content') ?>
	<?php echo $this->include('common/message') ?>

	<div class="card mb-4">
      <div class="card-body">

		<form action="<?php echo base_url(route_to('update-stripe', $stripe->id)) ?>" id="stripeedit" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
				<?php echo $this->include('common/securityupdate') ?>
				
		
				<div class="row">
				<div class="col-2"></div>

				<div class="col-8">

					<div class="row">
									<div class="col-12 mt-3">
									<label for="live_s_kye" class=""><?php echo lang("Localize.live") ?> <?php echo lang("Localize.secret") ?> <?php echo lang("Localize.key") ?></label>	
									<input type="text" id="live_s_kye" name ="live_s_kye" value="<?php echo esc(old('live_s_kye') ?? $stripe->live_s_kye )  ?>" class="form-control"  placeholder="<?php echo lang("Localize.live") ?> <?php echo lang("Localize.secret") ?> <?php echo lang("Localize.key") ?>">
								</div>


								<div class="col-12 mt-3">
								<label for="name" class=""><?php echo lang("Localize.live") ?> <?php echo lang("Localize.private") ?> <?php echo lang("Localize.key") ?></label>	
									<input type="text" id="live_p_kye" name ="live_p_kye" value="<?php echo esc(old('live_p_kye')) ?? $stripe->live_p_kye ?>" class="form-control"  placeholder="<?php echo lang("Localize.live") ?> <?php echo lang("Localize.private") ?> <?php echo lang("Localize.key") ?>">
								</div>

								<div class="col-12 mt-3">
								<label for="test_s_kye" class=""><?php echo lang("Localize.test") ?> <?php echo lang("Localize.secret") ?> <?php echo lang("Localize.key") ?></label>	
									<input type="text" id="test_s_kye" name ="test_s_kye" value="<?php echo esc(old('test_s_kye')) ?? $stripe->test_s_kye ?>" class="form-control"  placeholder="<?php echo lang("Localize.test") ?> <?php echo lang("Localize.secret") ?> <?php echo lang("Localize.key") ?>">
								</div>

								<div class="col-12 mt-3">
								<label for="test_p_kye" class=""><?php echo lang("Localize.test") ?> <?php echo lang("Localize.private") ?> <?php echo lang("Localize.key") ?></label>	
									<input type="text" id="test_p_kye" name ="test_p_kye" value="<?php echo esc(old('test_p_kye')) ?? $stripe->test_p_kye ?>" class="form-control"  placeholder="<?php echo lang("Localize.test") ?> <?php echo lang("Localize.private") ?> <?php echo lang("Localize.key") ?>">
								</div>


								<label class="form-label mt-3" for="">
								<?php echo lang("Localize.environment") ?>
								</label>

								<?php if ($stripe->environment == 1) : ?>
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
									<?php  else : ?>
										<div class="form-check">
									<input class="form-check-input" type="radio" name="environment" id="environment" value="1" >
									<label class="form-check-label" for="exampleRadios1">
									<?php echo lang("Localize.live") ?>
									</label>
								</div>
								<div class="form-check">
								<input class="form-check-input" type="radio" name="environment" id="environment" value="0" checked>
								<label class="form-check-label" for="exampleRadios2">
								<?php echo lang("Localize.test") ?>
								</label>
								</div>
								<?php endif ?>

								<div class="text-danger">
														<?php if (isset($validation)): ?>
														<?=$validation->listErrors();?>
														<?php endif?>
													</div>

						
					</div>
					
				</div>
				<br>
									<div class="col-12 text-center">
									<button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
									</div>

				<div class="col-2"></div>


			</div>
				


				
		</form>

		</div>
	</div>

<?php echo $this->endSection() ?>