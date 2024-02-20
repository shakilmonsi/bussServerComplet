<?php echo $this->extend('template/admin/main') ?>
	<?php echo $this->section('content') ?>
	<?php echo $this->include('common/message') ?>

	<div class="card mb-4">
      <div class="card-body">

		<form action="<?php echo base_url(route_to('create-section-five'))?>" id="sectionfive" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
					<?php echo $this->include('common/security') ?>

					<div class="row">
						<div class="col-3"></div>

						
						<div class="col-6">

							<div class="row">

								<div class="col-12 mt-3">
								<label for="title"><?php echo lang("Localize.title") ?></label>
									<input type="text"  name ="title" value="<?php echo $secFive->title ?? esc(old('title')) ?>" class="form-control text-capitalize">
								</div>
								<div class="col-12 mt-3">
								<label for="sub_title"><?php echo lang("Localize.sub") ?> <?php echo lang("Localize.title") ?></label>
									<input type="text"  name ="sub_title" value="<?php  echo $secFive->sub_title ?? esc(old('sub_title')) ?>" class="form-control text-capitalize">
								</div>

								<div class="col-12 mt-3">
								<label for="button_one_link"><?php echo lang("Localize.button") ?> <?php echo lang("Localize.one") ?> <?php echo lang("Localize.link") ?> </label>
									<input type="text"  name ="button_one_link" value="<?php echo $secFive->button_one_link ?? esc(old('button_one_link')) ?>" class="form-control text-capitalize">
								</div>


								<div class="col-12 mt-3">
									<label for="button_one_status" class="form-label"><?php echo lang("Localize.button") ?> <?php echo lang("Localize.one") ?> <?php echo lang("Localize.status") ?> </label>
									<select id="button_one_status" name="button_one_status" class="form-select" required>

											<?php if ($secFive->button_one_status == 1) : ?>
												<option value="1" selected><?php echo lang("Localize.show") ?></option>
												<option value="0" ><?php echo lang("Localize.hide") ?> </option>
											<?php else : ?>
												<option value="1"><?php echo lang("Localize.show") ?> </option>
												<option value="0" selected><?php echo lang("Localize.hide") ?> </option>
											<?php endif ?>
									
										</select>
								</div>


								<div class="col-12 mt-3">
								<label for="button_two_link"><?php echo lang("Localize.button") ?> <?php echo lang("Localize.two") ?> <?php echo lang("Localize.link") ?></label>
									<input type="text"  name ="button_two_link" value="<?php echo $secFive->button_two_link ?? esc(old('button_two_link')) ?>" class="form-control text-capitalize">
								</div>

								<div class="col-12 mt-3">
									<label for="button_two_status" class="form-label"><?php echo lang("Localize.button") ?> <?php echo lang("Localize.two") ?> <?php echo lang("Localize.status") ?></label>
									<select id="button_two_status" name="button_two_status" class="form-select" required>
												<?php if ($secFive->button_two_status == 1) : ?>
													<option value="1" selected><?php echo lang("Localize.show") ?></option>
													<option value="0" ><?php echo lang("Localize.hide") ?></option>
													<?php else : ?>
														<option value="1" ><?php echo lang("Localize.show") ?></option>
														<option value="0" selected><?php echo lang("Localize.hide") ?></option>
													<?php endif ?>
										</select>
								</div>


								<div class="col-12 mt-3">
								<label for="sectionfiveimg" class="form-label"><?php echo lang("Localize.image") ?> </label>
								
									<div id="sectionfiveimg">
											
									</div>
									<span>max 450X420 px</span>					
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

						<div class="col-3"></div>

						<input type="hidden" id="secfiveimgpath"  name ="secfiveimgpath" value="<?php echo $secFive->image ?? 'image/frontend/sectionone.jpg' ?>">
				
						<input type="hidden" id="baseurl"  name ="baseurl" value="<?php echo base_url() ?>" >

					</div>
				
	
							
		</form>

	</div>
</div>

<?php echo $this->endSection() ?>