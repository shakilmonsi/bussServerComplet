<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>
    
    <div class="card mb-4">
        <div class="card-body">

            <?php if ($add_data == true) : ?>
                <div class="text-end">
                    <a class="btn btn-success" href="<?php echo base_url(route_to('new-fleet')) ?>">
                        <i class="fas fa-chair"></i><sup><i class="fas fa-plus small"></i></sup>
                        <?php echo lang("Localize.add_fleet") ?>
                    </a>
                </div>
            <?php endif ?>

            <div class="table-responsive">
                <table class="table display table-bordered table-striped table-hover basic" id="fleetlist">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo lang("Localize.type") ?></th>
                            <th scope="col"><?php echo lang("Localize.layout") ?></th>
                            <th scope="col"><?php echo lang("Localize.last_seat_check") ?> </th>
                            <th scope="col"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.seat") ?></th>
                            <th scope="col"><?php echo lang("Localize.seat") ?> <?php echo lang("Localize.number") ?> </th>
                            <th scope="col"><?php echo lang("Localize.status") ?> </th>
                            <th scope="col"><?php echo lang("Localize.luggage") ?> <?php echo lang("Localize.service") ?> </th>
                            <th scope="col"><?php echo lang("Localize.action") ?> </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($fleet as $kye =>  $value) : ?>
                            <tr>
                                <th scope="row"><?php echo $kye + 1; ?></th>
                                <td><?php echo $value->type; ?></td>
                                <td><?php echo $value->layout; ?></td>
                                <td><?php echo $value->last_seat; ?></td>
                                <td><?php echo $value->total_seat; ?></td>
                                <td><span style="max-width: 200px; display: inline-block;"><?php echo $value->seat_number; ?></span></td>
                                <td><?php echo $value->status; ?></td>
                                <td><?php echo $value->luggage_service; ?></td>
                                <td>
                                    <form action="<?php echo base_url(route_to('ss-delete-confirmation', 'fleet', $value->id)) ?>" id="fleetdelete" method="get" class="deletionForm">
                                        <?php if ($edit_data == true) : ?>
                                            <a href="<?= base_url(route_to('edit-fleet', $value->id)) ?>" class="btn btn-sm btn-info text-white" title="<?php echo lang("Localize.edit") ?>">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        <?php endif ?>

                                        <?php if ($delete_data == true) : ?>
                                            <button type="button" data-modal-confirm="true" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
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