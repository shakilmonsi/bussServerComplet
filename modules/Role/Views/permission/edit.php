<?php echo $this->extend('template/admin/main') ?>
<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('update-permission', $getrole)) ?>" id="updatepermissionform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/securityupdate') ?>
                <input type="hidden" name="role_id" value="<?php echo $role_id; ?>" />

                <div class="row">
                    <div class="col-12">
                        <label><?php echo lang("Localize.role") ?> <?php echo lang("Localize.type") ?> </label>
                        <input type="text" class="form-control" value="<?php echo $role; ?>" readonly />
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <?php foreach ($permissionmodule as $value) : ?>
                            <h6><?php echo $value->module_name ?></h6>
                            <?php echo view_cell('\App\Libraries\Permission::editMenuPermissionTable', 'menuid=' . $value->id . ',roleid=' . $getrole . '') ?>
                        <?php endforeach ?>

                        <div class="submit-area">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i>
                                <?php echo lang("Localize.submit") ?>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php echo $this->endSection() ?>