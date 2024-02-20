<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <?php if ($add_data == true) : ?>
                <div class="text-end">
                    <a class="btn btn-success" href="<?php echo base_url(route_to('new-menu')) ?>">
                        <i class="fas fa-bars"></i><sup><i class="fas fa-plus small"></i></sup>
                        <?php echo lang("Localize.add_menu") ?>
                    </a>
                </div>
            <?php endif ?>

            <div class="table-responsive">
                <table class="table display table-bordered table-striped table-hover basic" id="menulist">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo lang("Localize.menu") ?> <?php echo lang("Localize.title") ?> </th>
                            <th scope="col"><?php echo lang("Localize.page") ?> <?php echo lang("Localize.url") ?> </th>
                            <th scope="col"><?php echo lang("Localize.menu") ?> <?php echo lang("Localize.name") ?> </th>
                            <th scope="col"><?php echo lang("Localize.module") ?> <?php echo lang("Localize.menu") ?> </th>
                            <th scope="col"><?php echo lang("Localize.action") ?> </th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($menu as $kye =>  $value) : ?>
                            <tr>
                                <th scope="row"><?php echo $kye + 1; ?></th>
                                <td><?php echo $value->menu_title; ?></td>
                                <td><?php echo $value->page_url; ?></td>
                                <td><?php echo $value->module_name; ?></td>
                                <td><?php echo view_cell('\App\Libraries\AdminMenu::getMenuName', 'id=' . $value->parent_menu_id . '') ?></td>
                                <td>
                                    <form action="<?php echo base_url(route_to('delete-menu', $value->id)) ?>" method="post" onsubmit="return confirm('Are you sure?')">
                                        <?php echo $this->include('common/delete') ?>
                                        <?php if ($edit_data == true) : ?>
                                            <a href="<?= base_url(route_to('edit-menu', $value->id)) ?>" class="btn btn-sm btn-info text-white"><i class="fas fa-edit"></i></a>
                                        <?php endif ?>

                                        <?php if ($delete_data == true) : ?>
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
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