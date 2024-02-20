<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="card mb-4">
    <div class="card-body">

        <!-- <div class="text-end">
          <a class="btn btn-success" href="<?php echo base_url(route_to('new-paymentgateway')) ?>"><?php echo lang("Localize.add_payment_gateway") ?></a>
      </div> -->


        <div class="table-responsive">
            <table class="table display table-bordered table-striped table-hover basic" id="paymentgatewaylist">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"><?php echo lang("Localize.name") ?> </th>
                        <th scope="col"><?php echo lang("Localize.status") ?> </th>
                        <th scope="col"><?php echo lang("Localize.action") ?> </th>

                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($paymentgateway as $kye =>  $value) : ?>
                        <tr>
                            <th scope="row"><?php echo $kye + 1; ?></th>
                            <td><?php echo $value->name; ?></td>
                            <td><?php echo $value->status; ?></td>

                            <td>
                                <?php if ($edit_data == true) : ?>
                                    <a href="<?= base_url(route_to('edit-paymentgateway', $value->id)) ?>" class="btn btn-sm btn-info text-white" title="<?php echo lang("Localize.edit") ?>"><i class="fas fa-edit"></i></a>
                                <?php endif ?>

                                <?php if ($read_data == true) : ?>
                                    <?php if ($value->status == 1) : ?>

                                        <?php if (($value->name == "paypal") && ($value->id == 1)) : ?>
                                            <a href="<?= base_url(route_to('new-paypal')) ?>" class="btn btn-sm btn-primary text-white" title="<?php echo lang("Localize.details") ?>"><i class="fas fa-bars"></i></a>

                                        <?php elseif (($value->name == "paystack") && ($value->id == 2)) : ?>
                                            <a href="<?= base_url(route_to('new-paystack')) ?>" class="btn btn-sm btn-primary text-white" title="<?php echo lang("Localize.details") ?>"><i class="fas fa-bars"></i></a>

                                        <?php elseif (($value->name == "stripe") && ($value->id == 3)) : ?>
                                            <a href="<?= base_url(route_to('new-stripe')) ?>" class="btn btn-sm btn-primary text-white" title="<?php echo lang("Localize.details") ?>"><i class="fas fa-bars"></i></a>
                                        
                                        <?php elseif (($value->name == "sslcommerz") && ($value->id == 5)) : ?>
                                            <a href="<?= base_url(route_to('new-sslcommerz')) ?>" class="btn btn-sm btn-primary text-white" title="<?php echo lang("Localize.details") ?>"><i class="fas fa-bars"></i></a>
                                            
                                        <?php elseif (($value->name == "flutterwave") && ($value->id == 6)) : ?>
                                            <a href="<?= base_url(route_to('new-flutterwave')) ?>" class="btn btn-sm btn-primary text-white" title="<?php echo lang("Localize.details") ?>"><i class="fas fa-bars"></i></a>
                                            
                                        <?php else : ?>
                                            <a href="<?= base_url(route_to('new-razor')) ?>" class="btn btn-sm btn-primary text-white" title="<?php echo lang("Localize.details") ?>"><i class="fas fa-bars"></i></a>

                                        <?php endif ?>

                                    <?php endif ?>
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