<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="card mb-4">
      <div class="card-body">

<div class="table-responsive">
 <table class="table display table-bordered table-striped table-hover basic" id="subscribelist">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><?php echo lang("Localize.email") ?></th>
      
     
      <th scope="col"><?php echo lang("Localize.action") ?></th>
     
    </tr>
  </thead>
  <tbody>
      
  <?php foreach ($subscribe as $kye =>  $value) : ?>

    <tr>
      <th scope="row"><?php echo $kye+1 ;?></th>
      <td><?php echo $value->email; ?></td>
     
      
      <td>
          <form action="<?php echo base_url(route_to('delete-subscribe',$value->id ))?>" id="subscribedelete" method="post" class="" accept-charset="utf-8" enctype="multipart/form-data">
                            <?php echo $this->include('common/delete') ?>
     
              <?php if ($delete_data == true) : ?>  
                <button type="submit" class="btn btn-sm btn-danger"><i class="far fa-trash-alt" title= "<?php echo lang("Localize.delete") ?>"></i></button>
              <?php endif ?>
            </form>
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