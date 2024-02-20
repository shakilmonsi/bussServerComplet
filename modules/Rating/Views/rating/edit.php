<?php echo $this->extend('template/admin/main') ?>
	<?php echo $this->section('content') ?>
		<form action="<?php echo base_url(route_to('update-rating', $rating->id)) ?>" id="ratingedit" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
				<?php echo $this->include('common/securityupdate') ?>
				
		
				<div class="col-6 ">
				<label for="rating"><?php echo lang("Localize.rating") ?> <?php echo lang("Localize.value") ?></label>
					<input type="text"  name ="rating" value="<?php echo esc(old('rating') ?? $rating->rating)?>" class="form-control text-capitalize"  >
				</div>

				<div class="col-12 ">
				<label for="comments"><?php echo lang("Localize.comment") ?></label>
					<textarea type="text"  name ="comments"  class="form-control text-capitalize" rows="4" > <?php echo esc(old('comments') ?? $rating->comments)?> </textarea>
				</div>



				<label class="form-label" for="">
				<?php echo lang("Localize.status") ?>
				</label>

				<?php if ($rating->status == 1) : ?>
					<div class="form-check">
					<input class="form-check-input" type="radio" name="status" id="status" value="1" checked>
					<label class="form-check-label" for="exampleRadios1">
					<?php echo lang("Localize.active") ?>
					</label>
				</div>
				<div class="form-check">
				<input class="form-check-input" type="radio" name="status" id="status" value="0">
				<label class="form-check-label" for="exampleRadios2">
				<?php echo lang("Localize.disable") ?>
				</label>
				</div>
					<?php  else : ?>
						<div class="form-check">
					<input class="form-check-input" type="radio" name="status" id="status" value="1" >
					<label class="form-check-label" for="exampleRadios1">
					<?php echo lang("Localize.active") ?>
					</label>
				</div>
				<div class="form-check">
				<input class="form-check-input" type="radio" name="status" id="status" value="0" checked>
				<label class="form-check-label" for="exampleRadios2">
				<?php echo lang("Localize.disable") ?>
				</label>
				</div>
				<?php endif ?>

		<?php if (isset($validation)): ?>
			<?=$validation->listErrors();?>
			<?php endif?>

		<div class="col-12">
			<button type="submit" class="btn btn-primary"><?php echo lang("Localize.submit") ?></button>
		</div>
		</form>

<?php echo $this->endSection() ?>