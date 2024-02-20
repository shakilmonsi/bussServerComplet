<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">
            <form action="<?php echo base_url(route_to('update-employee-role', $employee->id)) ?>" id="employee" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/securityupdate') ?>

                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <label for="role_id"><?php echo lang("Localize.role") ?> <abbr title="Required field">*</abbr></label>

                                <select class="form-select" name="role_id" id="role_id" >
                                    <option value="">None</option>

                                    <?php foreach ($role as $singleRole) : ?>

                                        <?php if ($singleRole->id == $user_role) : ?>
                                            <option value="<?php echo $singleRole->id ?>" selected><?php echo $singleRole->name ?></option>
                                        <?php else : ?>
                                            <option value="<?php echo $singleRole->id ?>"><?php echo $singleRole->name ?></option>
                                        <?php endif ?>

                                    <?php endforeach ?>

                                </select>
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php echo $this->endSection() ?>