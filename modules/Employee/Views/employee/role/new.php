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
                                <select class="form-select" name="role_id" id="role_id" required>
                                    <option value="">None</option>

                                    <?php foreach ($role as $singleRole) : ?>
                                        <option value="<?php echo $singleRole->id ?>"><?php echo $singleRole->name ?></option>
                                    <?php endforeach ?>

                                </select>
                            </div>

                            <div class="col-12 mt-3">
                                <label for="password"><?php echo lang("Localize.password") ?> <abbr title="Required field">*</abbr></label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="<?php echo lang('Localize.password'); ?>" required />
                            </div>

                            <div class="col-12 mt-3">
                                <label for="confirm"><?php echo lang("Localize.repassword") ?> <abbr title="Required field">*</abbr></label>
                                <input type="password" name="confirm" id="confirm" class="form-control" placeholder="<?php echo lang('Localize.repassword'); ?>" required />
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