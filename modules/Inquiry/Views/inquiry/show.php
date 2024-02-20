<?php echo $this->extend('template/admin/main') ?>
	<?php echo $this->section('content') ?>

	<div class="card mb-4">
       <div class="card-body text-center">

		
			<div class="row">
				<h6>
				<?php echo lang("Localize.name") ?> : <?php echo $inquiry->name; ?>
				</h6>
			</div>
			<div class="row">
				<h6>
				<?php echo lang("Localize.email") ?> : <?php echo $inquiry->mobile; ?>
				</h6>
			</div>
			<div class="row">
				<h6>
				<?php echo lang("Localize.mobile") ?> : <?php echo $inquiry->email; ?>
				</h6>
			</div>
			<div class="row">
				<h6>
				<?php echo lang("Localize.subject") ?> : <?php echo $inquiry->subject; ?>
				</h6>
			</div>
			<div class="row">
				<h6>
				<?php echo lang("Localize.message") ?> : <?php echo $inquiry->message; ?>
				</h6>
			</div>

	</div>
</div>

<?php echo $this->endSection() ?>