<?php echo $this->extend('template/admin/main'); ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="table-responsive">
        <table class="table display table-bordered table-striped table-hover basic" id="languagelist">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"><?php echo lang("Localize.name") ?></th>
                    <th scope="col"><?php echo lang("Localize.code") ?></th>
                    <th scope="col"><?php echo lang("Localize.action") ?></th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($language as $kye =>  $value) : ?>
                    <tr>
                        <th scope="row"><?php echo $kye + 1; ?></th>
                        <td><?php echo $value->display_name; ?></td>
                        <td><?php echo $value->language_code; ?></td>
                        <td>
                            <form action="<?php echo base_url(route_to('delete-language', $value->id)) ?>" method="post" onsubmit="return confirm('Are you sure?')">
                                <?php echo $this->include('common/delete') ?>
                                <a href="<?= base_url(route_to('edit-language', $value->id)) ?>" class="btn btn-sm btn-info text-white"><i class="fas fa-edit"></i></a>

                                <button type="submit" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>
    <?php echo $this->include('common/datatable_default_lang_change') ?>
<?php echo $this->endSection() ?>