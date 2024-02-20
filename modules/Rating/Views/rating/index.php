<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="card mb-4">
      <div class="card-body">

            

<div class="table-responsive">
 <table class="table display table-bordered table-striped table-hover basic" id="ratinglist">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><?php echo lang("Localize.name") ?> </th>
      <th scope="col"><?php echo lang("Localize.comment") ?> </th>
      <th scope="col"><?php echo lang("Localize.rating") ?> </th>
      <th scope="col"><?php echo lang("Localize.status") ?> </th>
      <th scope="col"><?php echo lang("Localize.action") ?> </th>
     
    </tr>
  </thead>
  <tbody>
      
  <?php foreach ($rating as $kye =>  $value) : ?>

    <tr>
      <th scope="row"><?php echo $kye+1 ;?></th>
      <td><?php echo $value->first_name; ?> <?php echo $value->last_name; ?></td>
      <td><?php echo $value->comments; ?></td>
      <td><?php echo $value->rating; ?></td>
      <td><?php echo $value->status; ?></td>

      <td>
        

         
        
          <form action="<?php echo base_url(route_to('delete-rating',$value->id ))?>" id="ratingdelete" method="post" class="" accept-charset="utf-8" enctype="multipart/form-data">
                            <?php echo $this->include('common/delete') ?>
              <?php if ($edit_data == true) : ?>
                  <a href="<?= base_url(route_to( 'edit-rating',$value->id )) ?>" class="btn btn-sm btn-info text-white" title="<?php echo lang("Localize.edit") ?>" ><i class="fas fa-edit"></i></a>
              <?php endif ?>

            <?php if ($delete_data == true) : ?>
                <button type="submit" class="btn btn-sm btn-danger" title="<?php echo lang("Localize.delete") ?>" ><i class="far fa-trash-alt"></i></button>
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