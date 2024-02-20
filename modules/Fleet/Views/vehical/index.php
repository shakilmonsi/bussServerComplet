<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <?php if ($add_data == true) : ?>
                <div class="text-end">

                    <?php if (true && false) : ?>
                        <?php if (!isset($trash_view)) : ?>
                            <a class="btn btn-warning me-1" href="<?php echo base_url(route_to('trash-index-vehicle')) ?>">
                                <i class="fas fa-trash-restore"></i>
                                <?php echo lang("Localize.view_deleted") ?>
                            </a>
                        <?php else : ?>
                            <a class="btn btn-info me-1" href="<?php echo base_url(route_to('index-vehicle')) ?>">
                                <i class="fas fa-list"></i>
                                <?php echo lang("Localize.view_all") ?>
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>

                    <a class="btn btn-success" href="<?php echo base_url(route_to('new-vehicle')) ?>">
                        <i class="fas fa-truck"></i><sup><i class="fas fa-plus small"></i></sup>
                        <?php echo lang("Localize.add_vehicle") ?>
                    </a>
                </div>
            <?php endif ?>

            <div class="table-responsive">
                <table class="table display table-bordered table-striped table-hover basic" id="listvehical">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo lang("Localize.company") ?></th>
                            <th scope="col"><?php echo lang("Localize.fleet") ?> <?php echo lang("Localize.type") ?> </th>
                            <th scope="col"><?php echo lang("Localize.reg") ?> <?php echo lang("Localize.no") ?> </th>
                            <th scope="col"><?php echo lang("Localize.eng") ?> <?php echo lang("Localize.no") ?> </th>
                            <th scope="col"><?php echo lang("Localize.model") ?> <?php echo lang("Localize.no") ?></th>
                            <th scope="col"><?php echo lang("Localize.chassis") ?> <?php echo lang("Localize.no") ?> </th>
                            <th scope="col"><?php echo lang("Localize.woner") ?></th>
                            <th scope="col"><?php echo lang("Localize.woner") ?> <?php echo lang("Localize.mobile") ?></th>
                            <th scope="col"><?php echo lang("Localize.status") ?></th>
                            <th scope="col"><?php echo lang("Localize.assign") ?></th>
                            <th scope="col"><?php echo lang("Localize.action") ?></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($vehical as $kye =>  $value) : ?>
                            <tr>
                                <th scope="row"><?php echo $kye + 1; ?></th>
                                <td><?php echo $value->company; ?></td>
                                <td><?php echo $value->type; ?></td>
                                <td><?php echo $value->reg_no; ?></td>
                                <td><?php echo $value->engine_no; ?></td>
                                <td><?php echo $value->model_no; ?></td>
                                <td><?php echo $value->chasis_no; ?></td>
                                <td><?php echo $value->woner; ?></td>
                                <td><?php echo $value->woner_mobile; ?></td>
                                <td><?php echo $value->status; ?></td>
                                <td><?php echo $value->assign; ?></td>
                                <td>

                                    <?php if ($value->deleted_at == null) :  ?>
                                        <form action="<?php echo base_url(route_to('ss-delete-confirmation', 'vehicle', $value->vehicleid)) ?>" id="fleetdelete" method="get" class="deletionForm">
                                            <?php if ($edit_data == true) : ?>
                                                <a href="<?php echo base_url(route_to('edit-vehicle', $value->vehicleid)) ?>" class="btn btn-sm btn-info text-white" title="<?php echo lang("Localize.edit") ?>"><i class="fas fa-edit"></i></a>
                                            <?php endif ?>

                                            <?php if ($delete_data == true) : ?>
                                                <button type="button" data-modal-confirm="true" class="btn btn-sm btn-danger"><i class="far fa-trash-alt" title="<?php echo lang("Localize.delete") ?>"></i></button>
                                            <?php endif ?>
                                        </form>
                                    <?php else : ?>

                                        <?php if ($delete_data == true) : ?>
                                            <a href="<?php echo base_url(route_to('restore-vehicle', $value->vehicleid)) ?>" class="btn btn-sm btn-success text-white" title="<?php echo lang("Localize.restore") ?>">
                                                <i class="fas fa-undo-alt"></i>
                                                <?php echo lang("Localize.restore"); ?>
                                            </a>
                                        <?php endif; ?>

                                    <?php endif; ?>

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