<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>
    
    <div class="card mb-4">
        <div class="card-body">
            <form action="<?php echo base_url(route_to('create-passanger')) ?>" id="passangerform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>

                <div class="row justify-content-md-center">
                    <div class="col-8 lg-offset-2">
                        <div class="row">
                            <div class="col-3 mt-3">
                                <label for="first_name"><?php echo lang("Localize.first_name") ?> <abbr class="required" title="Required field">*</abbr></label>
                                <input type="text" name="first_name" class="form-control" value="<?php echo old('first_name') ?>" placeholder="<?php echo lang("Localize.first_name") ?>" required />
                            </div>
                            <div class="col-3 mt-3">
                                <label for="last_name"><?php echo lang("Localize.last_name") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" name="last_name" class="form-control" value="<?php echo old('last_name') ?>" placeholder="<?php echo lang("Localize.last_name") ?>" required />
                            </div>

                            <div class="col-3 mt-3">
                                <label for="login_mobile"><?php echo lang("Localize.mobile") ?> <abbr title="Required field">*</abbr></label>
                                <input type="number" name="login_mobile" class="form-control" value="<?php echo old('login_mobile') ?>" placeholder="<?php echo lang("Localize.mobile") ?>" required min="1" />
                            </div>

                            <div class="col-3 mt-3">
                                <label for="login_email"><?php echo lang("Localize.email") ?> <abbr title="Required field">*</abbr></label>
                                <input type="email" name="login_email" class="form-control" value="<?php echo old('login_email') ?>" placeholder="<?php echo lang("Localize.email") ?>" required />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 mt-3">
                                <label for="id_type"><?php echo lang("Localize.id_type") ?></label>
                                <input type="text" name="id_type" class="form-control" value="<?php echo old('id_type') ?>" placeholder="<?php echo lang("Localize.nid_passport") ?>" />
                            </div>

                            <div class="col-3 mt-3">
                                <label for="id_number"><?php echo lang("Localize.nid_passport_number") ?></label>
                                <input type="text" name="id_number" class="form-control" value="<?php echo old('id_number') ?>" placeholder="<?php echo lang("Localize.nid_passport_number") ?>" />
                            </div>

                            <div class="col-3 mt-3">
                                <label for="country_id"><?php echo lang("Localize.country_name") ?> <abbr title="Required field">*</abbr></label>
                                <select class="form-select" name="country_id" id="country_id" required>
                                    <option value="">None</option>

                                    <?php foreach ($country as $countryvalue) : ?>
                                        <option value="<?php echo $countryvalue->id ?>"><?php echo $countryvalue->name ?></option>
                                    <?php endforeach ?>

                                </select>
                            </div>
                            <div class="col-3 mt-3">
                                <label for="city"><?php echo lang("Localize.city_name") ?></label>
                                <input type="text" name="city" class="form-control" value="<?php echo old('city') ?>" placeholder="<?php echo lang("Localize.city_name") ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 mt-3">
                                <label for="zip_code"><?php echo lang("Localize.zip_code") ?></label>
                                <input type="number" name="zip_code" class="form-control" min="1" value="<?php echo old('zip_code') ?>" placeholder="<?php echo lang("Localize.zip_code") ?>">
                            </div>

                            <div class="col-9 mt-3">
                                <label for="address"><?php echo lang("Localize.address") ?> <abbr title="Required field">*</abbr></label>
                                <textarea class="form-control" name="address" id="address" rows="1" required><?php echo old('address') ?></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 mt-3">
                                <label for="password"><?php echo lang("Localize.password") ?> <abbr title="Required field">*</abbr></label>
                                <input type="password" name="password" class="form-control" value="<?php echo old('password') ?>" placeholder="<?php echo lang("Localize.password") ?>" required />
                            </div>

                            <div class="col-3 mt-3">
                                <label for="confirm_password"><?php echo lang("Localize.repassword") ?> <abbr title="Required field">*</abbr></label>
                                <input type="password" name="confirm_password" class="form-control" value="<?php echo old('confirm_password') ?>" placeholder="<?php echo lang("Localize.repassword") ?>" required />
                            </div>
                        </div>

                        <div class="text-danger mt-2">
                            <?php if (isset($validation)) : ?>
                                <?php echo $validation->listErrors(); ?>
                            <?php endif ?>
                        </div>

                        <button type="submit" class="btn btn-success mt-2"><?php echo lang("Localize.submit") ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php echo $this->endSection() ?>