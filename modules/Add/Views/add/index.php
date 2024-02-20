<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="card mb-4">
      <div class="card-body">

      <?php if ($add_data == true) : ?>  
            <div class="text-end">
                <a class="btn btn-success" href="<?php echo base_url(route_to( 'new-add' )) ?>"><?php echo lang("Localize.add_advertisement") ?></a>
            </div>
      <?php endif ?>

<div class="table-responsive">
 <table class="table display table-bordered table-striped table-hover basic" id="addlist">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><?php echo lang("Localize.page") ?> <?php echo lang("Localize.name") ?> </th>
      <th scope="col"><?php echo lang("Localize.link") ?> </th>
      <th scope="col"><?php echo lang("Localize.picture") ?> </th>
     
      <th scope="col"><?php echo lang("Localize.action") ?> </th>
     
    </tr>
  </thead>
  <tbody>
      
  <?php foreach ($add as $kye =>  $value) : ?>

    <tr>
      <th scope="row"><?php echo $kye+1 ;?></th>
      <td><?php echo $value->pagename; ?></td>
      <td><?php echo $value->link; ?></td>
      <td>
        <img src="<?php echo base_url().'/public/'.$value->image_path; ?>" height="50px;">
      </td>
      
      <td>
          <form action="<?php echo base_url(route_to('delete-add',$value->id ))?>" id="socialdelete" method="post" class="" accept-charset="utf-8" enctype="multipart/form-data">
                            <?php echo $this->include('common/delete') ?>
             <?php if ($edit_data == true) : ?> 
                <a href="<?= base_url(route_to( 'edit-add',$value->id )) ?>" class="btn btn-sm btn-info text-white"><i class="fas fa-edit"></i></a>
              <?php endif ?>
              
              <?php if ($delete_data == true) : ?>
                <button type="submit" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
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