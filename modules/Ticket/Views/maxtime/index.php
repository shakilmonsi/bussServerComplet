<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="card mb-4">
      <div class="card-body">

<div class="table-responsive">
 <table class="table display table-bordered table-striped table-hover basic" id="maxtimelist">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><?php echo lang("Localize.minutes") ?></th>
     
      <th scope="col"><?php echo lang("Localize.action") ?></th>
     
    </tr>
  </thead>
  <tbody>
      
  <?php foreach ($maxtime as $kye =>  $value) : ?>

    <tr>
      <th scope="row"><?php echo $kye+1 ;?></th>
      <td><?php echo $value->maxtime; ?></td>
      
      <td>
          <?php if ($book_time_list == true) : ?>
                <a href="<?= base_url(route_to( 'edit-maxtime',$value->id )) ?>" class="btn btn-sm btn-info text-white" title="<?php echo lang("Localize.edit") ?>" >
                  <i class="fas fa-edit"></i>
                </a>
          <?php endif ?>
              
      </td>
      
    </tr>
       

  <?php endforeach ?>
   
   
  </tbody>
</table>
</div>
</div>
</div>
<?php echo $this->include('common/datatable_default_lang_change') ?>
<?php echo $this->endSection() ?>