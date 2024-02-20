<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <?php if ($add_data == true) : ?>
                <div class="text-end">
                    <a class="btn btn-success" href="<?php echo base_url(route_to('new-coupon')) ?>">
                        <i class="fas fa-ticket-alt"></i><sup><i class="fas fa-plus small"></i></sup>
                        <?php echo lang("Localize.add_coupon") ?>
                    </a>
                </div>
            <?php endif ?>

            <div class="table-responsive">
                <table class="table display table-bordered table-striped table-hover basic" id="couponlist">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo lang("Localize.code") ?> </th>
                            <th scope="col"><?php echo lang("Localize.start") ?> <?php echo lang("Localize.date") ?></th>
                            <th scope="col"><?php echo lang("Localize.end") ?> <?php echo lang("Localize.date") ?> </th>
                            <th scope="col"><?php echo lang("Localize.amount") ?></th>
                            <th scope="col"><?php echo lang("Localize.trip") ?> <?php echo lang("Localize.name") ?></th>
                            <th scope="col"><?php echo lang("Localize.condition") ?></th>
                            <th scope="col"><?php echo lang("Localize.action") ?></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($coupon as $kye =>  $value) : ?>
                            <tr>
                                <th scope="row"><?php echo $kye + 1; ?></th>
                                <td><?php echo $value->code; ?></td>
                                <td><?php echo $value->start_date; ?></td>
                                <td><?php echo $value->end_date; ?></td>
                                <td><?php echo $value->discount; ?></td>
                                <td><?php echo $value->subtrip_name; ?></td>
                                <td><?php echo $value->condition; ?></td>
                                <td>
                                    <form action="<?php echo base_url(route_to('ss-delete-confirmation', 'coupon', $value->id)) ?>" method="get" class="deletionForm">
                                        <?php echo $this->include('common/delete') ?>

                                        <?php if ($edit_data == true) : ?>
                                            <a href="<?= base_url(route_to('edit-coupon', $value->id)) ?>" class="btn btn-sm btn-info text-white" title="<?php echo lang("Localize.edit") ?>"><i class="fas fa-edit"></i></a>
                                        <?php endif ?>

                                        <?php if ($delete_data == true) : ?>
                                            <button type="button" data-modal-confirm="true" class="btn btn-sm btn-danger" title="<?php echo lang("Localize.delete") ?>"><i class="far fa-trash-alt"></i></button>
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
    <?php echo $this->include('common/confirmation-modal') ?>
<?php echo $this->endSection() ?>