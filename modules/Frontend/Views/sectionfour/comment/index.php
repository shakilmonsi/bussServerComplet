<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <?php if ($add_data == true) : ?>
                <div class="text-end">
                    <a class="btn btn-success" href="<?php echo base_url(route_to('new-section-four-comment')) ?>"><?php echo lang("Localize.add_comment") ?></a>
                </div>
            <?php endif ?>

            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="howitwork">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><?php echo lang("Localize.add_comment") ?></th>
                            <th><?php echo lang("Localize.designation") ?></th>
                            <th><?php echo lang("Localize.description") ?></th>
                            <th><?php echo lang("Localize.serial") ?></th>
                            <th><?php echo lang("Localize.action") ?></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($secFourComment as $kye =>  $value) : ?>
                            <tr>
                                <th><?php echo $kye + 1; ?></th>
                                <td><?php echo $value->person_name; ?></td>
                                <td><?php echo $value->person_detail; ?></td>
                                <td><?php echo $value->description; ?></td>
                                <td><?php echo $value->serial; ?></td>
                                <td>
                                    <form action="<?php echo base_url(route_to('delete-section-four-comment', $value->id)) ?>" id="sectioforudelete" method="post" class="deletionForm">
                                        <?php echo $this->include('common/delete') ?>

                                        <?php if ($edit_data == true) : ?>
                                            <a href="<?= base_url(route_to('edit-section-four-comment', $value->id)) ?>" class="btn btn-sm btn-info text-white" title="<?php echo lang("Localize.edit") ?>"><i class="fas fa-edit"></i></a>
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