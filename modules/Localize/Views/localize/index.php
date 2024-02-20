<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">
            <?php if ($add_data == true) : ?>
                <div class="text-end">
                    <a class="btn btn-success" href="<?php echo base_url(route_to('new-language')) ?>"><?php echo lang("Localize.language_add") ?></a>
                </div>
            <?php endif ?>

            <div class="table-responsive">
                <table class="table display table-bordered table-striped table-hover basic" id="languagelist">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo lang("Localize.name") ?></th>
                            <th scope="col"><?php echo lang("Localize.code") ?> </th>
                            <th scope="col"><?php echo lang("Localize.action") ?> </th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($language as $kye =>  $value) : ?>

                            <tr>
                                <th scope="row"><?php echo $kye + 1; ?></th>
                                <td><?php echo $value->display_name; ?></td>
                                <td><?php echo $value->language_code; ?></td>

                                <td>
                                    <?php if (($value->id == 1) && ($value->language_code == "en")) : ?>

                                        <a href="<?= base_url(route_to('index-lngstngvalue', $value->id)) ?>" class="btn btn-sm btn-primary text-white" title="<?php echo lang("Localize.edit") ?>"><?php echo lang("Localize.string") ?> <i class="fas fa-edit"></i></a>

                                    <?php else : ?>

                                        <form action="<?php echo base_url(route_to('delete-language', $value->id)) ?>" id="localize" method="post" class="deletionForm">
                                            <?php echo $this->include('common/delete') ?>
                                            <?php if ($edit_data == true) : ?>
                                                <a href="<?= base_url(route_to('edit-language', $value->id)) ?>" class="btn btn-sm btn-info text-white" title="<?php echo lang("Localize.edit") ?>"><i class="fas fa-edit"></i></a>
                                            <?php endif ?>

                                            <?php if ($delete_data == true) : ?>
                                                <button type="button" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                                            <?php endif ?>

                                            <a href="<?= base_url(route_to('index-lngstngvalue', $value->id)) ?>" class="btn btn-sm btn-primary text-white" title="<?php echo lang("Localize.edit") ?>"><?php echo lang("Localize.string") ?> <i class="fas fa-edit"></i></a>
                                        </form>
                                    <?php endif ?>

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