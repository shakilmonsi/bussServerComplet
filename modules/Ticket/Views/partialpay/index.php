<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="card mb-4">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table display table-bordered table-striped table-hover basic" id="paydetaillist">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"><?php echo lang("Localize.amount") ?></th>
                        <th scope="col"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.type") ?></th>
                        <th scope="col"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.details") ?></th>
                        <th scope="col"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.create_by") ?></th>
                        <th scope="col"><?php echo lang("Localize.date") ?></th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($allpayment as $kye =>  $value) : ?>
                        <tr>
                            <th scope="row"><?php echo $kye + 1; ?></th>
                            <td><?php echo $value->paidamount; ?></td>
                            <td><?php echo $value->name ?: $value->gatewayname; ?></td>
                            <td><?php echo $value->payment_detail; ?></td>
                            <td><?php echo $value->first_name; ?> <?php echo $value->last_name; ?></td>
                            <td><?php echo $value->date; ?></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?php echo $this->include('common/datatable_default_lang_change') ?>
<?php echo $this->endSection() ?>