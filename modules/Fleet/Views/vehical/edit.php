<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('update-vehicle', $vehical->id)) ?>" id="vehicalupdate" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/securityupdate') ?>

                <div class="col-3">
                    <label for="reg_no" class="form-label"><?php echo lang("Localize.reg") ?> <?php echo lang("Localize.no") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" placeholder="Reg No" name="reg_no" value="<?php echo esc(old('reg_no')) ?? $vehical->reg_no  ?>" class="form-control" required />
                </div>

                <div class="col-3">
                    <label for="engine_no" class="form-label"><?php echo lang("Localize.eng") ?> <?php echo lang("Localize.no") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" name="engine_no" id="engine_no" placeholder="Eng No" value="<?php echo esc(old('engine_no')) ?? $vehical->engine_no ?>" class="form-control" required />
                </div>


                <div class="col-3">
                    <label for="model_no" class="form-label"><?php echo lang("Localize.model") ?> <?php echo lang("Localize.no") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" name="model_no" id="model_no" placeholder="Model No" value="<?php echo esc(old('model_no')) ?? $vehical->model_no ?>" class="form-control" required />
                </div>


                <div class="col-3">
                    <label for="fleet_id" class="form-label"><?php echo lang("Localize.fleet") ?> <?php echo lang("Localize.type") ?> <abbr title="Required field">*</abbr></label>
                    <select id="fleet_id" name="fleet_id" required="required" class="form-control" required>
                        <option value="" disabled>Fleet Type</option>
                        <?php foreach ($fleet as $value) : ?>
                            <?php if ($vehical->fleet_id == $value->id) : ?>
                                <option value="<?= $value->id ?>" selected><?= $value->type ?></option>
                            <?php else : ?>
                                <option value="<?= $value->id ?>"><?= $value->type ?></option>
                            <?php endif ?>

                        <?php endforeach ?>
                    </select>
                </div>

                <div class="col-3">
                    <label for="chasis_no" class="form-label"><?php echo lang("Localize.chassis") ?> <?php echo lang("Localize.no") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" name="chasis_no" id="chasis_no" placeholder="Chasis No" value="<?php echo esc(old('chasis_no')) ?? $vehical->chasis_no ?>" class="form-control" required />
                </div>

                <div class="col-3">
                    <label for="woner" class="form-label"><?php echo lang("Localize.woner") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" name="woner" id="woner" placeholder="<?php echo lang("Localize.woner") ?>" value="<?php echo esc(old('woner')) ?? $vehical->woner  ?>" class="form-control" required />
                </div>


                <div class="col-3">
                    <label for="woner_mobile" class="form-label"><?php echo lang("Localize.woner") ?> <?php echo lang("Localize.mobile") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" name="woner_mobile" id="woner_mobile" value="<?php echo esc(old('woner_mobile')) ?? $vehical->woner_mobile  ?>" placeholder="<?php echo lang("Localize.woner") . " " . lang("Localize.mobile") ?>" class="form-control" required />
                </div>


                <div class="col-3">
                    <label for="company" class="form-label"><?php echo lang("Localize.company") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" name="company" id="company" value="<?php echo esc(old('company')) ?? $vehical->company ?>" placeholder="Company" class="form-control" required />
                </div>


                <label class="form-group" for="">
                    <?php echo lang("Localize.status") ?>
                    <abbr title="Required field">*</abbr>
                </label>

                <?php if ($vehical->status == 1) : ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status" value="1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            <?php echo lang("Localize.active") ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status" value="0">
                        <label class="form-check-label" for="exampleRadios2">
                            <?php echo lang("Localize.disable") ?>
                        </label>
                    </div>
                <?php else : ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status" value="1">
                        <label class="form-check-label" for="exampleRadios1">
                            <?php echo lang("Localize.active") ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status" value="0" checked>
                        <label class="form-check-label" for="exampleRadios2">
                            <?php echo lang("Localize.disable") ?>
                        </label>
                    </div>
                <?php endif ?>


                <div class="col-12">
                    <label for="buspicedit" class="form-label"><?php echo lang("Localize.bus") ?> <?php echo lang("Localize.image") ?></label>
                    <div id="buspicedit"></div>
                </div>

                <input type="hidden" name="assign" id="assign" value="<?php echo esc($vehical->assign)  ?>" class="form-control">
                <input type="hidden" name="baseurl" id="baseurl" value="<?php echo base_url()  ?>" class="form-control">

                <div class="text-danger">
                    <?php if (isset($validation)) : ?>
                        <?= $validation->listErrors(); ?>
                    <?php endif ?>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                </div>
            </form>

        </div>
    </div>


    <div class="col-12 mt-3" id="newimg">

        <div class="row mb-3" id="imgbus">
            <?php foreach ($imagevehical as $imagepath) : ?>

                <div class="col-md-3 col-sm-3 col-xs-6 mt-1" id="<?php echo $imagepath->id; ?>">
                    <button type="button" class="btn btn-danger close-btn" onclick="remove(<?php echo $imagepath->id; ?>)"><i class="fa fa-times"></i></button>
                    <img src="<?php echo base_url('public/' . $imagepath->img_path); ?>" alt="" height="100" class="img-fluid">
                    <input type="hidden" name="oldphoto[]" value="<?php echo $imagepath->img_path; ?>">

                </div>
            <?php endforeach ?>

        </div>
    </div>
<?php echo $this->endSection() ?>


<?php echo $this->section('js') ?>
    <script src="<?php echo base_url('public/js/ajax.js'); ?>"></script>
<?php echo $this->endSection() ?>