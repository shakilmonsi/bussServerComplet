<?php echo $this->extend('template/admin/main') ?>
	<?php echo $this->section('content') ?>
	<?php echo $this->include('common/message') ?>

	<div class="card mb-4">
      <div class="card-body">

		<form action="<?php echo base_url(route_to('create-section-four'))?>" id="sectionfour" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
					<?php echo $this->include('common/security') ?>
				
		
				<div class="col-4">
				<label for="title">Title</label>
					<input type="text"  name ="title" value="<?php echo $secFour->title ?? esc(old('title')) ?>" class="form-control text-capitalize">
				</div>
				<div class="col-4">
				<label for="sub_title">Sub Title</label>
					<input type="text"  name ="sub_title" value="<?php  echo $secFour->sub_title ?? esc(old('sub_title')) ?>" class="form-control text-capitalize">
				</div>

				
                            <div class="col-4 ">
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