<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('css') ?>
    <link rel="stylesheet" href="<?php echo base_url('public/css/customestyle.css'); ?>" type="text/css">
<?php echo $this->endSection() ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">
            <div class="text-end">
                <a href="<?= base_url(route_to('new-Subtrip', $createTrip)) ?>" class="btn btn-sm btn-success">
                    <i class="fas fa-plane-departure"></i> <sup><i class="fas fa-plus small"></i></sup>
                    <?php echo lang("Localize.add") . " " . lang("Localize.sub") . " " . lang("Localize.trip") ?>
                </a>
            </div>

            <div class="table-responsive">
                <table class="table display table-bordered table-striped table-hover basic" id="subtriplist">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo lang("Localize.add") ?> </th>
                            <th scope="col"><?php echo lang("Localize.add") ?></th>
                            <th scope="col"><?php echo lang("Localize.adult") ?> <?php echo lang("Localize.fair") ?> </th>
                            <th scope="col"><?php echo lang("Localize.child") ?><?php echo lang("Localize.fair") ?> </th>
                            <th scope="col"><?php echo lang("Localize.special") ?> <?php echo lang("Localize.fair") ?> </th>
                            <th scope="col"><?php echo lang("Localize.show") ?> <?php echo lang("Localize.frontend") ?> </th>
                            <th scope="col"><?php echo lang("Localize.status") ?></th>
                            <th scope="col"><?php echo lang("Localize.action") ?></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($subtrip as $kye =>  $value) :
                            $this->db      = \Config\Database::connect();
                            $builder = $this->db->table('locations');
                            $query   = $builder->where('id', $value->pick_location_id)->get();
                            $locationName =  $query->getRow();

                            $query   = $builder->where('id', $value->drop_location_id)->get();
                            $droplocationName =  $query->getRow();
                        ?>
                            <tr>
                                <th scope="row"><?php echo $kye + 1; ?></th>
                                <td><?php echo  $locationName->name; ?></td>
                                <td><?php echo $droplocationName->name; ?></td>
                                <td><?php echo $value->adult_fair; ?></td>
                                <td><?php echo $value->child_fair; ?></td>
                                <td><?php echo $value->special_fair; ?></td>
                                <td><?php echo $value->show; ?></td>
                                <td><?php echo $value->status; ?></td>
                                <td>
                                    <form action="<?php echo base_url(route_to('ss-delete-confirmation', 'subtrip', $value->id)) ?>" id="locatindelete" method="get" class="deletionForm">
                                        <?php echo $this->include('common/delete') ?>
                                        
                                        <a href="<?= base_url(route_to('edit-Subtrip', $value->id)) ?>" class="btn btn-sm btn-info text-white" title="<?php echo lang("Localize.edit") ?>"><i class="fas fa-edit"></i></a>
                                        
                                        <?php if ($delete_data == true) : ?>
                                            <button type="button" data-modal-confirm="true" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                                        <?php endif; ?>
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