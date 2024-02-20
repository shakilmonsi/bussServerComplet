<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>


<div class="card mb-4">
      <div class="card-body">

            <form action="<?php echo base_url(route_to('trandaterange-agent')) ?>" id="dateRangeTeransaction" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                            <?php echo $this->include('common/security') ?>

            <div class="row mb-5">

                                    <div class="col-12">
                                      <div class="row">
                                          <?php echo $this->include($filepath . '\filter/daterange') ?>
                                      </div>
                                          
                                    </div>

                                    
                </div>
                <input type="hidden" name="agetnID" value="<?php echo $agentId?>" />

            </form>

            <h5 class="text-center">
              <?php echo lang("Localize.name") ?> : <?php echo $agentdetail->first_name.' '.$agentdetail->last_name; ?>
            </h5>
            <div class="table-responsive">
            <table class="table display table-bordered table-striped table-hover basic" id="agenttransactionlist">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"><?php echo lang("Localize.date") ?> </th>
                  <th scope="col"><?php echo lang("Localize.booking") ?> <?php echo lang("Localize.id") ?> </th>
                  <th scope="col"><?php echo lang("Localize.income") ?> </th>
                  <th scope="col"><?php echo lang("Localize.expense") ?> </th>
                  <th scope="col"><?php echo lang("Localize.total_balance") ?> </th>
                  <th scope="col"><?php echo lang("Localize.details") ?> </th>
                
                  
                
                
                </tr>
              </thead>
              <tbody>
                  <?php $balance = 0 ;?>
                  <?php $income = 0 ;?>
                  <?php $expense = 0 ;?>
                
                
              <?php foreach ($transaction as $kye => $value) : ?>

                <tr>
                  <th scope="row"><?php echo $kye +1; ?>
                
                </th>
                  
                  <td><?php echo $value->created_at;?></td>
                  <td><?php echo $value->booking_id ; ?></td>
                  <td><?php echo $value->income ; ?></td>
                  <td><?php echo $value->expense ; ?></td>
                  <?php $balance = ($balance+$value->income)-$value->expense ;?>
                  <td> <?php echo $balance; ?></td>

                  <td> <?php echo $value->detail; ?></td>
                
                
                </tr>
                  

              <?php endforeach ?>
              
              
              </tbody>
              <tfoot>
                    <tr>
                    <td></td>
                    <td></td>
                    <th scope="row">Totals</th>
                      <td> <?php echo $currency_symbol; ?> <?php echo array_sum(array_column($transaction, 'income')); ;?></td>
                      <td> <?php echo $currency_symbol; ?> <?php echo array_sum(array_column($transaction, 'expense')); ;?></td>
                      <td> <?php echo $currency_symbol; ?> <?php echo $balance; ?></td>
                    </tr>
                </tfoot>
            </table>
            </div>
      </div>
</div>
<?php echo $this->include('common/datatable_default_lang_change') ?>
<?php echo $this->endSection() ?>
