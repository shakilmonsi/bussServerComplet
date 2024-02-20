<?php echo $this->extend('template/admin/main') ?>
	<?php echo $this->section('content') ?>
	<div class="card mb-4">
    	<div class="card-body">
				<div class="row">
					<div class="col-6 text-end">
					<p  class=""><?php echo lang("Localize.details") ?> :</p>
					</div>
					<div class="col-6">
					<p  class=""><?php echo $account->detail ;?></p>
					</div>
				</div>

				<div class="row">
					<div class="col-6 text-end">
					<p  class=""><?php echo lang("Localize.type") ?> :</p>
					</div>
					<div class="col-6">
					<p  class=""><?php echo $account->type ;?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-6 text-end">
					<p  class=""><?php echo lang("Localize.amount") ?> :</p>
					</div>
					<div class="col-6">
					<p  class=""><?php echo $account->amount ;?></p>
					</div>
				</div>

				<?php if (!empty($account->doc_location)) : ?>

					<div class="col-12 text-center">

					<p><img src="<?php echo base_url('public/'.$account->doc_location);?>" class="img-fluid" width="400"></p>
					
								
  					</div>
					  <a href="<?php echo base_url('public/'.$account->doc_location);?>" target="_blank" class="btn btn-success text-white"><?php echo lang("Localize.show") ?></a>
				<?php endif ?>
				

	</div>
</div>
<?php echo $this->endSection() ?>