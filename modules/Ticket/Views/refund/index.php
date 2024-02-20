<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="card mb-4">
      <div class="card-body">

<div class="table-responsive">
 <table class="table display table-bordered table-striped table-hover basic" id="refundlist">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><?php echo lang("Localize.booking") ?> <?php echo lang("Localize.id") ?> </th>
      <th scope="col"><?php echo lang("Localize.amount") ?></th>
      <th scope="col"><?php echo lang("Localize.type") ?></th>
      <th scope="col"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.details") ?> </th>
      <th scope="col"><?php echo lang("Localize.date") ?></th>
     
     
    </tr>
  </thead>
  <tbody>
      
  <?php foreach ($refund as $kye =>  $value) : ?>

    <tr>
      <th scope="row"><?php echo $kye+1 ;?></th>
      <td><?php echo $value->booking_id; ?></td>
      <td><?php echo $value->refund_fee; ?></td>
      <td><?php echo $value->type; ?></td>
      <td><?php echo $value->detail; ?> </td>
      <td><?php echo $value->created_at; ?></td>
      
    </tr>
       

  <?php endforeach ?>
   
   
  </tbody>
</table>
</div>
</div>
</div>
<?php echo $this->include('common/datatable_default_lang_change') ?>
<?php echo $this->endSection() ?>