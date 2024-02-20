<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('update-agent', $agentdetail->userid, $agentdetail->agentid)) ?>" id="employee" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/securityupdate') ?>
                <input type="hidden" id="baseurl" name="baseurl" value="<?php echo base_url(); ?>">
                <input type="hidden" id="agentId" name="agentId" value="<?php echo $agentdetail->agentid; ?>">
                <input type="hidden" id="userId" name="userId" value="<?php echo $agentdetail->userid; ?>">

                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="row">
                            <div class="col-3 mt-3">
                                <label for="first_name"><?php echo lang("Localize.first_name") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" name="first_name" class="form-control" value="<?php echo old('first_name') ?? $agentdetail->first_name ?>" placeholder="<?php echo lang("Localize.first_name") ?>" aria-label="First Name" required>
                            </div>

                            <div class="col-3 mt-3">
                                <label for="last_name"><?php echo lang("Localize.last_name") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" name="last_name" class="form-control" value="<?php echo old('last_name') ?? $agentdetail->last_name  ?>" placeholder="<?php echo lang("Localize.last_name") ?>" aria-label="Last Name" required>
                            </div>

                            <div class="col-3 mt-3">
                                <label for="location_id"><?php echo lang("Localize.location") ?> <abbr title="Required field">*</abbr></label>
                                <select class="form-select" name="location_id" id="location_id" required>
                                    <?php foreach ($location as $locationvalue) : ?>
                                        <?php if ($locationvalue->id == $agentdetail->location_id) : ?>
                                            <option value="<?php echo $locationvalue->id ?>" selected><?php echo $locationvalue->name ?></option>
                                        <?php else : ?>
                                            <option value="<?php echo $locationvalue->id ?>"><?php echo $locationvalue->name ?></option>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="col-3 mt-3">
                                <label for="login_mobile"><?php echo lang("Localize.mobile") ?> <abbr title="Required field">*</abbr></label>
                                <input type="number" name="login_mobile" class="form-control" value="<?php echo old('login_mobile') ?? $agentdetail->login_mobile ?>" placeholder="<?php echo lang("Localize.mobile") ?>" aria-label="Mobile" required>
                            </div>

                            <div class="col-3 mt-3">
                                <label for="login_email"><?php echo lang("Localize.email") ?> <abbr title="Required field">*</abbr></label>
                                <input type="email" name="login_email" class="form-control" value="<?php echo old('login_email') ?? $agentdetail->login_email ?>" placeholder="<?php echo lang("Localize.email") ?>" aria-label="Email" required>
                            </div>

                            <div class="col-3 mt-3">
                                <label for="blood"><?php echo lang("Localize.blood") ?></label>
                                <input type="text" name="blood" class="form-control" value="<?php echo old('blood') ?? $agentdetail->blood ?>" placeholder="<?php echo lang("Localize.blood") ?>" aria-label="blood">
                            </div>
                            
                            <div class="col-3 mt-3">
                                <label for="id_type"><?php echo lang("Localize.id_type") ?></label>
                                <input type="text" name="id_type" class="form-control" value="<?php echo old('id_type') ?? $agentdetail->id_type ?>" placeholder="<?php echo lang("Localize.id_type") ?>" aria-label="Id Type">
                            </div>

                            <div class="col-3 mt-3">
                                <label for="id_number"><?php echo lang("Localize.nid_passport_number") ?></label>
                                <input type="text" name="id_number" class="form-control" value="<?php echo old('id_number') ?? $agentdetail->id_number ?>" placeholder="<?php echo lang("Localize.nid_passport_number") ?>" aria-label="Nid/Passport Number">
                            </div>

                            <div class="col-3 mt-3">
                                <label for="commission"><?php echo lang("Localize.commission") ?> % <abbr title="Required field">*</abbr></label>
                                <input type="number" name="commission" class="form-control" step=any value="<?php echo old('commission') ?? $agentdetail->commission ?>" placeholder="<?php echo lang("Localize.commission") ?> %" aria-label="commission" required>
                            </div>

                            <div class="col-3 mt-3">
                                <label for="country_id"><?php echo lang("Localize.country_name") ?> <abbr title="Required field">*</abbr></label>
                                <select class="form-select" name="country_id" id="country_id" required>
                                    <?php foreach ($country as $countryvalue) : ?>
                                        <?php if ($countryvalue->id == $agentdetail->country_id) : ?>
                                            <option value="<?php echo $countryvalue->id ?>" selected><?php echo $countryvalue->name ?></option>
                                        <?php else : ?>
                                            <option value="<?php echo $countryvalue->id ?>"><?php echo $countryvalue->name ?></option>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="col-3 mt-3">
                                <label for="city"><?php echo lang("Localize.city_name") ?></label>
                                <input type="text" name="city" class="form-control" value="<?php echo old('city') ?? $agentdetail->city ?>" placeholder="<?php echo lang("Localize.city_name") ?>" aria-label="City Name">
                            </div>

                            <div class="col-3 mt-3">
                                <label for="zip"><?php echo lang("Localize.zip_code") ?></label>
                                <input type="number" name="zip" class="form-control" value="<?php echo old('zip') ?? $agentdetail->zip ?>" placeholder="<?php echo lang("Localize.zip_code") ?>" aria-label="Zip Code">
                            </div>

                            <div class="col-3 mt-3">
                                <label class="form-label" for="">
                                    <?php echo lang("Localize.discount") ?>
                                    <abbr title="Required field">*</abbr>
                                </label>

                                <?php if ($agentdetail->discount == "1") : ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="discount" id="discount" value="1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            <?php echo lang("Localize.active") ?>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="discount" id="discount" value="0">
                                        <label class="form-check-label" for="exampleRadios2">
                                            <?php echo lang("Localize.disable") ?>
                                        </label>
                                    </div>
                                <?php else : ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="discount" id="discount" value="1">
                                        <label class="form-check-label" for="exampleRadios1">
                                            <?php echo lang("Localize.active") ?>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="discount" id="discount" value="0" checked>
                                        <label class="form-check-label" for="exampleRadios2">
                                            <?php echo lang("Localize.disable") ?>
                                        </label>
                                    </div>
                                <?php endif ?>

                            </div>

                            <div class="col-12 mt-3">
                                <label for="address"><?php echo lang("Localize.address") ?> <abbr title="Required field">*</abbr></label>
                                <textarea class="form-control" name="address" id="address" rows="3" required><?php echo old('address') ?? $agentdetail->address ?></textarea>
                            </div>

                            <div class="col-3 mt-3">
                                <label for="documentedit" class="form-label"><?php echo lang("Localize.nid_passport_image") ?></label>
                                <div id="documentedit">

                                </div>
                                <input type="hidden" id="documentoldpic" name="documentoldpic" value="<?php echo $agentdetail->nid_picture ?>">
                            </div>

                            <div class="col-3 mt-3">
                                <label for="document" class="form-label"><?php echo lang("Localize.profile_image") ?></label>
                                <div id="profileedit">

                                </div>
                                <input type="hidden" id="profileoldpic" name="profileoldpic" value="<?php echo $agentdetail->profile_picture ?>">
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php echo $this->endSection() ?>