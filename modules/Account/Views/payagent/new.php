<?php echo $this->extend('template/admin/main') ?>

	<?php echo $this->section('content') ?>
	<div class="card mb-4">
       <div class="card-body">
			<form action="<?php echo base_url(route_to('create-payagent'))?>" id="accountform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>

				<div class="row">
					<div class="col-4">

					</div>

					<div class="col-4">

						<div class="row">

							<div class="col-12 mt-3">
								<label for="amount" class=""><?php echo lang("Localize.amount") ?></label>	
								<input type="text" id="amount" name ="amount" value="" class="form-control text-capitalize" >
							</div>


							<div class="col-12 mt-3">
								<label for="total" class=""><?php echo lang("Localize.total_balance") ?></label>	
								<input type="text" id="total" name ="total" value="<?php echo esc($keepMoney)  ?>" readonly class="form-control text-capitalize">
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


					<div class="col-4">

					</div>



				</div>
			

			</form>
		</div>	
	</div>	


	<?php echo $this->endSection() ?>