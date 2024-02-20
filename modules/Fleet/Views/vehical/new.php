<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('create-vehicle')) ?>" id="vehical" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>
                <input type="hidden" name="assign" id="assign" value="0" class="form-control">

                <div class="col-3">
                    <label for="reg_no" class="form-label"><?php echo lang("Localize.reg") ?> <?php echo lang("Localize.no") ?>  <abbr title="Required field">*</abbr></label>
                    <input type="text" placeholder="<?php echo lang("Localize.reg") ?> <?php echo lang("Localize.no") ?>" name="reg_no" value="<?php echo esc(old('reg_no'))  ?>" class="form-control" required />
                </div>


                <div class="col-3">
                    <label for="engine_no" class="form-label"><?php echo lang("Localize.eng") ?> <?php echo lang("Localize.no") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" name="engine_no" id="engine_no" placeholder="<?php echo lang("Localize.eng") ?> <?php echo lang("Localize.no") ?>" value="<?php echo esc(old('engine_no')) ?>" class="form-control" required />
                </div>

                <div class="col-3">
                    <label for="model_no" class="form-label"><?php echo lang("Localize.model") ?> <?php echo lang("Localize.no") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" name="model_no" id="model_no" placeholder="<?php echo lang("Localize.model") ?> <?php echo lang("Localize.no") ?>" value="<?php echo esc(old('model_no'))  ?>" class="form-control" required />
                </div>

                <div class="col-3">
                    <label for="fleet_id" class="form-label"><?php echo lang("Localize.fleet") ?> <?php echo lang("Localize.type") ?> <abbr title="Required field">*</abbr></label>
                    <select id="fleet_id" name="fleet_id" required="required" class="form-control">
                        <option value="" disabled selected><?php echo lang("Localize.fleet") ?> <?php echo lang("Localize.type") ?></option>
                        <?php foreach ($fleet as $value) : ?>
                            <option value="<?= $value->id ?>"><?= $value->type ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="col-3">
                    <label for="chasis_no" class="form-label"><?php echo lang("Localize.chassis") ?> <?php echo lang("Localize.no") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" name="chasis_no" id="chasis_no" placeholder="<?php echo lang("Localize.chassis") ?> <?php echo lang("Localize.no") ?>" value="<?php echo esc(old('chasis_no'))  ?>" class="form-control" required />
                </div>

                <div class="col-3">
                    <label for="woner" class="form-label"><?php echo lang("Localize.woner") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" name="woner" id="woner" placeholder="<?php echo lang("Localize.woner") ?>" value="<?php echo esc(old('woner'))  ?>" class="form-control" required />
                </div>

                <div class="col-3">
                    <label for="woner_mobile" class="form-label"><?php echo lang("Localize.woner") ?> <?php echo lang("Localize.mobile") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" name="woner_mobile" id="woner_mobile" value="<?php echo esc(old('woner_mobile'))  ?>" placeholder="<?php echo lang("Localize.woner") . " " . lang("Localize.mobile") ?>" class="form-control" required />
                </div>

                <div class="col-3">
                    <label for="company" class="form-label"><?php echo lang("Localize.company") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" name="company" id="company" value="<?php echo esc(old('company'))  ?>" placeholder="<?php echo lang("Localize.company") ?>" class="form-control" required />
                </div>

                <label class="form-group" for="">
                    <?php echo lang("Localize.status") ?>
                    <abbr title="Required field">*</abbr>
                </label>

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

                <div class="col-12">
                    <label for="buspic" class="form-label"><?php echo lang("Localize.bus") ?> <?php echo lang("Localize.image") ?> </label>
                    <div id="buspic"></div>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                </div>
            </form>
        </div>
    </div>
<?php echo $this->endSection() ?>