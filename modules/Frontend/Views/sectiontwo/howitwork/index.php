<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <?php if ($add_data == true) : ?>
                <div class="text-end">
                    <a class="btn btn-success" href="<?php echo base_url(route_to('new-section-two-deatil')) ?>"><?php echo lang("Localize.how_works_add") ?></a>
                </div>
            <?php endif ?>

            <div class="table-responsive">
                <table class="table display table-bordered table-striped table-hover basic" id="howitwork">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo lang("Localize.title") ?> </th>
                            <th scope="col"><?php echo lang("Localize.description") ?> </th>
                            <th scope="col"><?php echo lang("Localize.button") ?> <?php echo lang("Localize.text") ?> </th>
                            <th scope="col"><?php echo lang("Localize.action") ?></th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($secTwoWork as $kye =>  $value) : ?>

                            <tr>
                                <th scope="row"><?php echo $kye + 1; ?></th>
                                <td><?php echo $value->title; ?></php>
                                </td>
                                <td><?php echo $value->description; ?></php>
                                </td>
                                <td><?php echo $value->button_text; ?></php>
                                </td>
                                <td>
                                    <form action="<?php echo base_url(route_to('delete-section-two-deatil', $value->id)) ?>" id="sectiotwodetail" method="post" class="deletionForm">
                                        <?php echo $this->include('common/delete') ?>
                                        <?php if ($edit_data == true) : ?>
                                            <a href="<?= base_url(route_to('edit-section-two-deatil', $value->id)) ?>" class="btn btn-sm btn-info text-white" title="<?php echo lang("Localize.edit") ?>"><i class="fas fa-edit"></i></a>
                                        <?php endif ?>

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