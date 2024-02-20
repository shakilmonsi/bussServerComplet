<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <?php if ($add_data == true) : ?>
                <div class="text-end">

                    <?php if (true && false) : ?>
                        <?php if (!isset($trash_view)) : ?>
                            <a class="btn btn-warning me-1" href="<?php echo base_url(route_to('trash-index-passanger')) ?>">
                                <i class="fas fa-trash-restore"></i>
                                <?php echo lang("Localize.view_deleted") ?>
                            </a>
                        <?php else : ?>
                            <a class="btn btn-info me-1" href="<?php echo base_url(route_to('index-passanger')) ?>">
                                <i class="fas fa-list"></i>
                                <?php echo lang("Localize.view_all") ?>
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>

                    <a class="btn btn-success" href="<?php echo base_url(route_to('new-passanger')) ?>"><?php echo lang("Localize.add_passanger") ?></a>
                </div>
            <?php endif ?>

            <div class="table-responsive">
                <table class="table display table-bordered table-striped table-hover basic" id="passangerlist">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo lang("Localize.name") ?></th>
                            <th scope="col"><?php echo lang("Localize.joined_at") ?></th>
                            <th scope="col"><?php echo lang("Localize.email") ?></th>
                            <th scope="col"><?php echo lang("Localize.id_type") ?></th>
                            <th scope="col"><?php echo lang("Localize.nid_passport_number") ?> </th>
                            <th scope="col"><?php echo lang("Localize.country_name") ?> </th>
                            <th scope="col"><?php echo lang("Localize.action") ?></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($userDetail as $kye => $value) : ?>
                            <tr>
                                <th scope="row"><?php echo $kye + 1; ?></th>
                                <td><?php echo $value->first_name . ' ' . $value->last_name; ?></td>
                                <td><?php echo date("F j, Y", strtotime($value->created_at)) ?></td>
                                <td><?php echo $value->login_email; ?></td>
                                <td><?php echo $value->id_type; ?></td>
                                <td><?php echo $value->id_number; ?></td>
                                <td>
                                    <?php foreach ($country as $cvalue) : ?>
                                        <?php if ($cvalue->id == $value->country_id) : ?>
                                            <?php echo $cvalue->name; ?>
                                        <?php endif ?>

                                    <?php endforeach ?>
                                </td>
                                <td>
                                    <?php if ($value->deleted_at == null) :  ?>

                                        <form action="<?php echo base_url(route_to('ss-delete-confirmation', 'user', $value->user_id)) ?>" class="deletionForm" method="get">
                                            <?php if ($edit_data == true) : ?>
                                                <a href="<?= base_url(route_to('edit-passanger', (int)$value->id)) ?>" class="btn btn-sm btn-info text-white" title="<?php echo lang("Localize.edit") ?>"><i class="fas fa-edit"></i></a>
                                            <?php endif ?>

                                            <?php if ($delete_data == true) : ?>
                                                <button data-modal-confirm="true" class="btn btn-sm btn-danger"><i class="far fa-trash-alt" title="<?php echo lang("Localize.delete") ?>"></i> </button>
                                            <?php endif ?>

                                        </form>
                                    <?php else : ?>
                                        <?php if ($delete_data == true) : ?>
                                            <a href="<?php echo base_url(route_to('restore-passanger', $value->id)) ?>" class="btn btn-sm btn-success text-white" title="<?php echo lang("Localize.restore") ?>">
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