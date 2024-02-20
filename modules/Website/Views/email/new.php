<?php echo $this->extend('template/admin/main') ?>

	<?php echo $this->section('content') ?>
	<div class="card mb-4">
      <div class="card-body">

			<form action="<?php echo base_url(route_to('create-email'))?>" id="emailform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>

				<div class="row">
					<div class="col-3">
					</div>
						<div class="col-6">

							<div class="col-12 mt-3">
								<label for="protocol" class=""><?php echo lang("Localize.protocol") ?></label>	
								<input type="text" id="protocol" name ="protocol" value="<?php echo esc(old('protocol'))  ?>" class="form-control"  placeholder="<?php echo lang("Localize.protocol") ?>">
							</div>

							<div class="col-12 mt-3">
							<label for="smtphost" class=""><?php echo lang("Localize.smtp") ?> <?php echo lang("Localize.host") ?> </label>	
								<input type="text" id="smtphost" name ="smtphost" value="<?php echo esc(old('smtphost'))  ?>" class="form-control"  placeholder="<?php echo lang("Localize.smtp") ?> <?php echo lang("Localize.host") ?>">
							</div>


							<div class="col-12 mt-3">
							<label for="smtpuser" class=""><?php echo lang("Localize.smtp") ?> <?php echo lang("Localize.user") ?> </label>	
								<input type="text" id="smtpuser" name ="smtpuser" value="<?php echo esc(old('smtpuser'))  ?>" class="form-control"  placeholder="<?php echo lang("Localize.smtp") ?> <?php echo lang("Localize.user") ?>">
							</div>

							<div class="col-12 mt-3">
							<label for="smtppass" class=""><?php echo lang("Localize.smtp") ?> <?php echo lang("Localize.password") ?> </label>	
								<input type="password" id="smtppass" name ="smtppass" value="<?php echo esc(old('smtppass'))  ?>" class="form-control"  placeholder="<?php echo lang("Localize.smtp") ?> <?php echo lang("Localize.password") ?>">
							</div>

							<div class="col-12 mt-3">
							<label for="smtpport" class=""><?php echo lang("Localize.smtp") ?> <?php echo lang("Localize.port") ?> </label>	
								<input type="smtpport" id="smtpport" name ="smtpport" value="<?php echo esc(old('smtpport'))  ?>" class="form-control"  placeholder="<?php echo lang("Localize.smtp") ?> <?php echo lang("Localize.port") ?>">
							</div>

							<div class="col-12 mt-3">
							<label for="smtpcrypto" class=""><?php echo lang("Localize.smtp") ?> <?php echo lang("Localize.crypto") ?> </label>	
								<input type="smtpcrypto" id="smtpcrypto" name ="smtpcrypto" value="<?php echo esc(old('smtpcrypto'))  ?>" class="form-control"  placeholder="<?php echo lang("Localize.smtp") ?> <?php echo lang("Localize.crypto") ?>">
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

					<div class="col-3">
					</div>

				</div>	



					
			

			</form>

	</div>
	</div>
	<?php echo $this->endSection() ?>