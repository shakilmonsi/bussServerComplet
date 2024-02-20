<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="table-responsive">
 <table class="table display table-bordered table-striped table-hover basic" id="taxlist">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tax Name</th>
      <th scope="col">Tax Value(%)</th>
      <th scope="col">Tax Number</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
      
  <?php foreach ($tax as $kye =>  $value) : ?>

    <tr>
      <th scope="row"><?php echo $kye+1 ;?></th>
      <td><?php echo $value->name; ?></td>
      <td><?php echo $value->value; ?></td>
      <td><?php echo $value->tax_reg; ?></td>
      <td><?php echo $value->status; ?></td>
      <td>
          <form action="<?php echo base_url(route_to('delete-tax',$value->id ))?>" id="locatindelete" method="post" class="" accept-charset="utf-8" enctype="multipart/form-data">
                            <?php echo $this->include('common/delete') ?>
                <a href="<?= base_url(route_to( 'edit-tax',$value->id )) ?>" class="btn btn-sm btn-info text-white"><i class="fas fa-edit"></i></a>

                <button type="submit" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
            </form>
      </td>
      
    </tr>
       

  <?php endforeach ?>
   
   
  </tbody>
</table>
</div>

<?php echo $this->include('common/datatable_default_lang_change') ?>
<?php echo $this->endSection() ?>