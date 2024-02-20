<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <?php if ($add_data == true) : ?>
                <div class="text-end">
                    
                    <?php if (true && false) : ?>
                        <?php if (!isset($trash_view)) : ?>
                            <a class="btn btn-warning me-1" href="<?php echo base_url(route_to('trash-index-employee')) ?>">
                                <i class="fas fa-trash-restore"></i>
                                <?php echo lang("Localize.view_deleted") ?>
                            </a>
                        <?php else : ?>
                            <a class="btn btn-info me-1" href="<?php echo base_url(route_to('index-employee')) ?>">
                                <i class="fas fa-list"></i>
                                <?php echo lang("Localize.view_all") ?>
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>

                    <a class="btn btn-success" href="<?php echo base_url(route_to('new-employee')) ?>">
                        <i class="fas fa-user-tie"></i><sup><i class="fas fa-plus small"></i></sup>
                        <?php echo lang("Localize.add_employee") ?>
                    </a>
                </div>
            <?php endif ?>

            <div class="table-responsive">
                <table class="table display table-bordered table-striped table-hover basic" id="employeelist">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo lang("Localize.name") ?></th>
                            <th scope="col"><?php echo lang("Localize.email") ?></th>
                            <th scope="col"><?php echo lang("Localize.mobile") ?></th>
                            <th scope="col"><?php echo lang("Localize.type") ?></th>
                            <th scope="col"><?php echo lang("Localize.action") ?></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($employee as $kye => $employeevalue) : ?>
                            <tr>
                                <th scope="row"><?php echo $kye + 1; ?></th>
                                <td><?php echo $employeevalue->first_name . ' ' . $employeevalue->last_name; ?></td>
                                <td><?php echo $employeevalue->email; ?></td>
                                <td><?php echo $employeevalue->phone; ?></td>
                                <td> <?php echo $employeevalue->type; ?></td>
                                <td>
                                    <?php if ($employeevalue->deleted_at == null) :  ?>

                                        <form action="<?php echo base_url(route_to('ss-delete-confirmation', 'employee', $employeevalue->id)) ?>" class="deletionForm" method="get">
                                            <?php if ($edit_data == true) : ?>
                                                <a href="<?= base_url(route_to('view-employee', $employeevalue->id)) ?>" class="btn btn-sm btn-success" title="<?php echo lang("Localize.view") ?>">
                                                    <i class="far fa-eye"></i>
                                                    <?php echo lang('Localize.view') ?>
                                                </a>
                                            <?php endif ?>

                                            <?php if ($delete_data == true) : ?>
                                                <button type="button" data-modal-confirm="true" class="btn btn-sm btn-danger" title="<?php echo lang("Localize.delete") ?>"><i class="far fa-trash-alt"></i></button>
                                            <?php endif ?>
                                        </form>
                                    <?php else : ?>

                                        <?php if ($delete_data == true) : ?>
                                            <a href="<?php echo base_url(route_to('restore-employee', $employeevalue->id)) ?>" class="btn btn-sm btn-success text-white" title="<?php echo lang("Localize.restore") ?>">
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