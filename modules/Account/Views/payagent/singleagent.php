<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<?php
    $sessiondata = \Config\Services::session(); 
  ?>

<div class="card mb-4">
    <div class="card-body">

     

      <form action="<?php echo base_url(route_to('date-singleagentrange'))?>" id="transaction" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>

            <div class="col-3 ">
                <?php echo $this->include('common/filter/daterangefrom') ?>
            </div>

            <div class="col-3">
                <?php echo $this->include('common/filter/daterangeto') ?>
            </div>
            <input type="hidden" name="agentid" value="<?php echo $agentid; ?>">
            <div class="col-3 mt-4 mb-2">
            <br>
                <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
            </div>

      </form>

      <h5 class="m-1">Total Income : <?php echo  $sessiondata->get('currency_symbol');?> <?php echo $totalMoney; ?></h5>
      <h5 class="m-1">Total Given Money : <?php echo  $sessiondata->get('currency_symbol');?> <?php echo $givenMoney; ?></h5>
      <h5 class="m-1">Total Due : <?php echo  $sessiondata->get('currency_symbol');?> <?php echo $dueMoney; ?></h5>

        <div class="table-responsive mt-3">
        <table class="table display table-bordered table-striped table-hover basic" id="agentpay">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"><?php echo lang("Localize.name") ?></th>
              <th scope="col"><?php echo lang("Localize.amount") ?>  </th>
              <th scope="col"><?php echo lang("Localize.status") ?> </th>
             
            </tr>
          </thead>
          <tbody>
              
          <?php foreach ($payagent as $kye =>  $value) : ?>

            <tr>
              <th scope="row"><?php echo $kye+1 ;?></th>
              <td>
               
                  <?php echo $value->first_name; ?>
                  <?php echo $value->last_name; ?>
                
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
        

             
              
            </tr>
              

          <?php endforeach ?>
          
          
          </tbody>
        </table>
        </div>

    </div>
</div>


<?php echo $this->endSection() ?>