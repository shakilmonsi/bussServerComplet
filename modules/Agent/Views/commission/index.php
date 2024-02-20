<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="table-responsive">
<table class="table display table-bordered table-striped table-hover basic" id="commissionlist">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><?php echo lang("Localize.agent") ?> <?php echo lang("Localize.name") ?></th>
      <th scope="col"><?php echo lang("Localize.booking") ?> <?php echo lang("Localize.id") ?></th>
      <th scope="col"><?php echo lang("Localize.trip") ?></th>
      <th scope="col"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.amount") ?> </th>
      <th scope="col"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.commission") ?></th>
      <th scope="col"><?php echo lang("Localize.commission") ?> <?php echo lang("Localize.rate") ?></th>
      <th scope="col"><?php echo lang("Localize.details") ?></th>
      <th scope="col"><?php echo lang("Localize.date") ?></th>
      
     
     
    </tr>
  </thead>
  <tbody>
      
  <?php foreach ($commission as $kye => $commissionvalue) : ?>

    <tr>
      <th scope="row"><?php echo $kye +1; ?></th>
      <td>
        
        <?php echo $commissionvalue->first_name; ?> <?php echo $commissionvalue->last_name; ?>
       
      </td>
      <td><?php echo $commissionvalue->booking_id ; ?></td>
      <td><?php echo $commissionvalue->subtrip_id ; ?></td>
      <td><?php echo $commissionvalue->grandtotal ; ?></td>
      <td> <?php echo $commissionvalue->commissionamount; ?></td>
      <td> <?php echo $commissionvalue->rate; ?>%</td>
      <td> <?php echo $commissionvalue->detail; ?></td>
      <td> <?php echo $commissionvalue->date; ?></td>
      
    </tr>
       

  <?php endforeach ?>
   
   
  </tbody>

</table>
</div>
<?php echo $this->include('common/datatable_default_lang_change') ?>
<?php echo $this->endSection() ?>
