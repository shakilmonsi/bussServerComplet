<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('create-employee')) ?>" id="locationform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>

                <div class="row justify-content-center">
                    <div class="col-8">

                        <div class="row">
                            <div class="col-3 mt-3">
                                <label for="first_name"><?php echo lang("Localize.first_name") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" name="first_name" class="form-control" value="<?php echo old('first_name') ?>" placeholder="<?php echo lang("Localize.first_name") ?>" aria-label="First Name" required>
                            </div>

                            <div class="col-3 mt-3">
                                <label for="last_name"><?php echo lang("Localize.last_name") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" name="last_name" class="form-control" value="<?php echo old('last_name') ?>" placeholder="<?php echo lang("Localize.last_name") ?>" aria-label="Last Name" required>
                            </div>

                            <div class="col-3 mt-3">
                                <label for="employeetype_id"><?php echo lang("Localize.employee") . " " . lang("Localize.type") ?> <abbr title="Required field">*</abbr></label>
                                <select class="form-select" name="employeetype_id" id="employeetype_id" required>
                                    <option value="">None</option>
                                    <?php foreach ($employeetype as $employeetypevalue) : ?>
                                        <option value="<?php echo $employeetypevalue->id ?>"><?php echo $employeetypevalue->type ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="col-3 mt-3">
                                <label for="phone"><?php echo lang("Localize.mobile") ?> <abbr title="Required field">*</abbr></label>
                                <input type="number" name="phone" class="form-control" value="<?php echo old('phone') ?>" placeholder="<?php echo lang("Localize.mobile") ?>" aria-label="phone" required>
                            </div>

                            <div class="col-3 mt-3">
                                <label for="email"><?php echo lang("Localize.email") ?> <abbr title="Required field">*</abbr></label>
                                <input type="email" name="email" class="form-control" value="<?php echo old('email') ?>" placeholder="<?php echo lang("Localize.email") ?>" aria-label="Email" required>
                            </div>

                            <div class="col-3 mt-3">
                                <label for="blood"><?php echo lang("Localize.blood") ?></label>
                                <input type="text" name="blood" class="form-control" value="<?php echo old('blood') ?>" placeholder="<?php echo lang("Localize.blood") ?>" aria-label="blood">
                            </div>

                            <div class="col-3 mt-3">
                                <label for="id_type"><?php echo lang("Localize.id_type") ?></label>
                                <input type="text" name="id_type" id="id_type" class="form-control" value="<?php echo old('id_type') ?>" placeholder="<?php echo lang("Localize.id_type") ?>" >
                            </div>

                            <div class="col-3 mt-3">
                                <label for="nid"><?php echo lang("Localize.nid_passport_number") ?></label>
                                <input type="text" name="nid" class="form-control" value="<?php echo old('nid') ?>" placeholder="<?php echo lang("Localize.nid_passport_number") ?>" aria-label="Nid/Passport Number">
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
                                <input type="text" name="city" class="form-control" value="<?php echo old('city') ?>" placeholder="<?php echo lang("Localize.city_name") ?>" aria-label="City Name">
                            </div>

                            <div class="col-3 mt-3">
                                <label for="zip"><?php echo lang("Localize.zip_code") ?></label>
                                <input type="number" name="zip" step="1" class="form-control" value="<?php echo old('zip') ?>" placeholder="<?php echo lang("Localize.zip_code") ?>" aria-label="Zip Code">
                            </div>


                            <div class="col-12 mt-3">
                                <label for="address"><?php echo lang("Localize.address") ?> <abbr title="Required field">*</abbr></label>
                                <textarea class="form-control" name="address" id="address" rows="3" required><?php echo old('address') ?></textarea>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="card">
                                    <div class="card-body bg-light">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="role_id"><?php echo lang("Localize.role") ?> <?php echo lang("Localize.name") ?></label>
                                                <select class="form-select" name="role_id" id="role_id" onchange="$('.toggle-with-role').toggle(($(this).val() !== ''))">
                                                    <option value="">None</option>

                                                    <?php foreach ($role as $rolevalue) : ?>
                                                        <option value="<?php echo $rolevalue->id ?>"><?php echo $rolevalue->name ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>

                                            <div class="col-md-4 toggle-with-role" style="display: none;">
                                                <label for="password"><?php echo lang("Localize.password") ?></label>
                                                <input type="password" name="password" class="form-control" placeholder="<?php echo lang("Localize.password") ?>">
                                            </div>

                                            <div class="col-md-4 toggle-with-role" style="display: none;">
                                                <label for="confirm"><?php echo lang("Localize.repassword") ?></label>
                                                <input type="password" name="confirm" class="form-control" placeholder="<?php echo lang("Localize.repassword") ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 mt-3">
                                <label for="document_pic" class="form-label"><?php echo lang("Localize.nid_passport_image") ?></label>
                                <div id="document"></div>
                            </div>

                            <div class="col-4 mt-3">
                                <label for="profile_pic" class="form-label"><?php echo lang("Localize.profile_image") ?></label>
                                <div id="profile"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-2 text-center">
                        <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php echo $this->endSection() ?>