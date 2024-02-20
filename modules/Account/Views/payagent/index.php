<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="card mb-4">
    <div class="card-body">

      <?php if (($add_data == true)&&($userType == 2)) : ?>
            <div class="text-end">
                <a class="btn btn-success" href="<?php echo base_url(route_to( 'new-payagent' )) ?>"> <?php echo lang("Localize.add_transaction") ?></a>
            </div>
      <?php endif ?>

      <form action="<?php echo base_url(route_to('date-range'))?>" id="transaction" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>

            <div class="col-3 ">
                <?php echo $this->include('common/filter/daterangefrom') ?>
            </div>

            <div class="col-3">
                <?php echo $this->include('common/filter/daterangeto') ?>
            </div>

            <div class="col-3 mt-4 mb-2">
            <br>
                <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
            </div>

      </form>

        <div class="table-responsive mt-3">
        <table class="table display table-bordered table-striped table-hover basic" id="agentpay">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"><?php echo lang("Localize.name") ?></th>
              <th scope="col"><?php echo lang("Localize.amount") ?>  </th>
              <th scope="col"><?php echo lang("Localize.status") ?> </th>
              <th scope="col"><?php echo lang("Localize.action") ?> </th>
            
            </tr>
          </thead>
          <tbody>
              
          <?php foreach ($payagent as $kye =>  $value) : ?>

            <tr>
              <th scope="row"><?php echo $kye+1 ;?></th>
              <td>
                <a href="<?= base_url(route_to( 'show-payagent',$value->agent_id )) ?>">
                  <?php echo $value->first_name; ?>
                  <?php echo $value->last_name; ?>
                </a>
              </td>
              <td><?php echo $value->amount; ?></td>

              <td>
                <?php if ($value->status == 0) : ?>
                  <span class="badge bg-secondary">Pending</span>
                <?php endif ?>
                <?php if ($value->status == 1) : ?>
                  <span class="badge bg-success">Approved</span>
                <?php endif ?>
              </td>
        

              <td>
                
                  
                  <form action="<?php echo base_url(route_to('delete-payagent',$value->id ))?>" id="locatindelete" method="post" class="" accept-charset="utf-8" enctype="multipart/form-data">
                                    <?php echo $this->include('common/delete') ?>
                      
                      
                   <?php if ($value->status == 0) : ?>  
                      <?php if ($edit_data == true) : ?>
                        <a href="<?= base_url(route_to( 'edit-payagent',$value->id )) ?>" class="btn btn-sm btn-info text-white" title="<?php echo lang("Localize.edit") ?>" ><i class="fas fa-edit"></i></a>
                      <?php endif ?>
      
                      <?php if ($delete_data == true) : ?>
                        <button type="submit" class="btn btn-sm btn-danger" title="<?php echo lang("Localize.delete") ?>" ><i class="far fa-trash-alt"></i></button>
                      <?php endif ?>

                    <?php endif ?>

                  <?php if ($userType == 1) : ?>    
                      <?php if ($value->status == 0) : ?>
                        <?php $status = 1 ;?>
                        <a href="<?= base_url(route_to( 'status-payagent',$value->id,$status )) ?>" class="btn btn-sm btn-success text-white" title="<?php echo lang("Localize.active") ?>" ><i class="fas fa-check"></i></a>
                      <?php endif ?>
                      <?php if ($value->status == 1) : ?>
                        <?php $status = 0 ;?>
                        <a href="<?= base_url(route_to( 'status-payagent',$value->id,$status )) ?>" class="btn btn-sm btn-dark text-white" title="<?php echo lang("Localize.disable") ?>" ><i class="fas fa-times"></i></a>
                      <?php endif ?>
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