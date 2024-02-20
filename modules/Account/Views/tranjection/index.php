<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">
            <?php if ($add_data == true) : ?>
                <div class="text-end">
                    <a class="btn btn-success" href="<?php echo base_url(route_to('new-account')) ?>"> <?php echo lang("Localize.add_transaction") ?></a>
                </div>
            <?php endif ?>

            <form action="<?php echo base_url(route_to('transaction-range')) ?>" id="transaction" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>

                <div class="col-3 ">
                    <?php echo $this->include('common/filter/daterangefrom') ?>
                </div>
                <div class="col-3">
                    <?php echo $this->include('common/filter/daterangeto') ?>
                </div>
                <div class="col-3 mt-4 mb-2">
                    <br>
                    <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                </div>
            </form>

            <div class="table-responsive mt-3">
                <table class="table display table-bordered table-striped table-hover basic" id="accountTran">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo lang("Localize.details") ?></th>
                            <th scope="col"><?php echo lang("Localize.tranjection_type") ?> </th>
                            <th scope="col"><?php echo lang("Localize.amount") ?> </th>
                            <th scope="col"><?php echo lang("Localize.tranjection") ?> <?php echo lang("Localize.create_by") ?></th>
                            <th scope="col"><?php echo lang("Localize.tranjection") ?> <?php echo lang("Localize.date") ?> </th>
                            <th scope="col"><?php echo lang("Localize.action") ?> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($account as $kye =>  $value) : ?>
                            <tr>
                                <th scope="row"><?php echo $kye + 1; ?></th>
                                <td><?php echo $value->detail; ?></td>
                                <td><?php echo $value->type; ?></td>
                                <td><?php echo $value->amount; ?></td>
                                <td><?php echo $value->name; ?></td>
                                <td><?php echo $value->created_at; ?></td>
                                <td>
                                    <form action="<?php echo base_url(route_to('delete-account', $value->id)) ?>" id="locatindelete" method="post" class="deletionForm">
                                        <?php echo $this->include('common/delete') ?>
                                        <?php if ($edit_data == true) : ?>
                                            <a href="<?= base_url(route_to('edit-account', $value->id)) ?>" class="btn btn-sm btn-info text-white" title="<?php echo lang("Localize.edit") ?>"><i class="fas fa-edit"></i></a>
                                        <?php endif ?>

                                        <a href="<?= base_url(route_to('show-account', $value->id)) ?>" class="btn btn-sm btn-primary text-white" title="<?php echo lang("Localize.show") ?>"><i class="fas fa-eye"></i></a>

                                        <?php if ($delete_data == true) : ?>
                                            <button type="button" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
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
<?php echo $this->endSection() ?>