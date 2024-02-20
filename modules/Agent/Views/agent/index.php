<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <?php if ($add_agent == true) : ?>
                <div class="text-end">
                    
                    <?php if (true && false) : ?>
                        <?php if (!isset($trash_view)) : ?>
                            <a class="btn btn-warning me-1" href="<?php echo base_url(route_to('trash-index-agent')) ?>">
                                <i class="fas fa-trash-restore"></i>
                                <?php echo lang("Localize.view_deleted") ?>
                            </a>
                        <?php else : ?>
                            <a class="btn btn-info me-1" href="<?php echo base_url(route_to('index-agent')) ?>">
                                <i class="fas fa-list"></i>
                                <?php echo lang("Localize.view_all") ?>
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>

                    <a class="btn btn-success" href="<?php echo base_url(route_to('new-agent')) ?>"><i class="fas fa-user-plus"></i> <?php echo lang("Localize.add_agent") ?></a>
                </div>
            <?php endif ?>

            <div class="table-responsive">
                <table class="table display table-bordered table-striped table-hover basic" id="agentlist">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo lang("Localize.name") ?></th>
                            <th scope="col"><?php echo lang("Localize.email") ?></th>
                            <th scope="col"><?php echo lang("Localize.mobile") ?></th>
                            <th scope="col"><?php echo lang("Localize.commission") ?></th>
                            <th scope="col"><?php echo lang("Localize.status") ?></th>

                            <?php if ($role_id == 1) : ?>
                                <th scope="col"><?php echo lang("Localize.action") ?></th>
                            <?php endif ?>
                        </tr>
                    </thead>
                    <tbody>
                       

                        <?php foreach ($agentdetail as $kye => $agentvalue) : ?>
                            <tr>
                                <th scope="row"><?php echo $kye + 1; ?></th>
                                <td>
                                    <a href="<?php echo base_url(route_to('transaction-agent', $agentvalue->id)) ?>">
                                        <?php echo $agentvalue->first_name . ' ' . $agentvalue->last_name; ?>
                                    </a>
                                </td>
                                <td><?php echo $agentvalue->login_email; ?></td>
                                <td><?php echo $agentvalue->login_mobile; ?></td>
                                <td> <?php echo $agentvalue->commission; ?></td>
                                <td>
                                    <?php if ($agentvalue->status == 1) : ?>
                                        <span class="badge bg-success"><?php echo lang("Localize.active") ?></span>
                                    <?php endif ?>
                                    <?php if ($agentvalue->status == 0) : ?>
                                        <span class="badge bg-secondary"><?php echo lang("Localize.disable") ?></span>
                                    <?php endif ?>
                                </td>

                                <?php if ($role_id == 1) : ?>
                                    <td>
                                        <?php if ($agentvalue->deleted_at == null) :  ?>

                                            <?php if ($edit_agent == true) : ?>
                                                <form action="<?php echo base_url(route_to('status-agent', $agentvalue->user_id)) ?>" class="d-inline-block" method="post">
                                                    <?php echo $this->include('common/securityupdate'); ?>

                                                    <button type="submit" class="btn btn-sm btn-secondary text-white" title="<?php echo lang("Localize.status") ?>">
                                                        <i class="<?php echo 'fa fa-user-' . (!$agentvalue->status ? 'check' : 'slash') ?>"></i>
                                                    </button>
                                                </form>
                                            <?php endif ?>

                                            <?php if ($edit_agent == true) : ?>
                                                <a href="<?php echo base_url(route_to('edit-agent', $agentvalue->id)) ?>" class="btn btn-sm btn-info text-white" title="<?php echo lang("Localize.edit") ?>">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            <?php endif ?>

                                            <?php if ($delete_agent == true) : ?>
                                                <form action="<?php echo base_url(route_to('ss-delete-confirmation', 'agent', $agentvalue->id)) ?>" class="d-inline-block deletionForm" method="get">
                                                    <button role="button" data-modal-confirm="true" class="btn btn-sm btn-danger text-white" title="<?php echo lang("Localize.delete") ?>">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            <?php endif ?>

                                        <?php else : ?>

                                            <?php if ($delete_agent == true) : ?>
                                                <a href="<?php echo base_url(route_to('restore-agent', $agentvalue->id)) ?>" class="btn btn-sm btn-success text-white" title="<?php echo lang("Localize.restore") ?>">
                                                    <i class="fas fa-undo-alt"></i>
                                                    <?php echo lang("Localize.restore"); ?>
                                                </a>
                                            <?php endif; ?>

                                        <?php endif; ?>
                                    </td>
                                <?php endif ?>
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