<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">
            <form action="<?php echo base_url(route_to('create-fitness')) ?>" id="fitnessform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>

                <div class="row">
                    <div class="col-2">
                    </div>

                    <div class="col-8">
                        <div class="row">
                            <div class="col-4 mt-2">
                                <label for="fitness_name" class=""><?php echo lang("Localize.fitness") ?> <?php echo lang("Localize.name") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" id="fitness_name" name="fitness_name" value="<?php echo esc(old('fitness_name')) ?>" class="form-control text-capitalize" placeholder="<?php echo lang("Localize.fitness") ?> <?php echo lang("Localize.name") ?>" required>
                            </div>
                            
                            <div class="col-4 mt-2" id="payment_method">
                                <label for="vehicle_id"><?php echo lang("Localize.vehicle") ?> <?php echo lang("Localize.reg") ?> <?php echo lang("Localize.no") ?> <abbr title="Required field">*</abbr></label>
                                <select class="form-select" name="vehicle_id" id="vehicle_id" required>

                                    <?php foreach ($vehicle as $vehicleval) : ?>
                                        <option value="<?php echo $vehicleval->id ?>"><?php echo $vehicleval->reg_no ?></option>
                                    <?php endforeach ?>

                                </select>
                            </div>

                            <div class="col-4">
                                <label for="start_date" class="form-label"><?php echo lang("Localize.fitness") ?> <?php echo lang("Localize.start") ?> <?php echo lang("Localize.date") ?> <abbr title="Required field">*</abbr></label>
                                <div class="input-append date datepicker" id="start_date" data-date-format="yyyy-mm-dd">
                                    <input size="16" type="text" name="start_date" class="form-control" required readonly>
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>

                            </div>

                            <div class="col-4 mt-2">
                                <label for="end_date" class="form-label"><?php echo lang("Localize.fitness") ?> <?php echo lang("Localize.end") ?> <?php echo lang("Localize.date") ?> <abbr title="Required field">*</abbr></label>
                                <div class="input-append date datepicker" id="end_date" data-date-format="yyyy-mm-dd">
                                    <input size="16" type="text" name="end_date" class="form-control" required readonly>
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                            </div>

                            <div class="col-4 mt-3">
                                <label for="start_milage" class=""><?php echo lang("Localize.start") ?> <?php echo lang("Localize.milage") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" id="start_milage" name="start_milage" value="<?php echo esc(old('start_milage')) ?>" class="form-control text-capitalize" placeholder="<?php echo lang("Localize.start") ?> <?php echo lang("Localize.milage") ?>" required>
                            </div>

                            <div class="col-4 mt-3">
                                <label for="end_milage" class=""><?php echo lang("Localize.end") ?> <?php echo lang("Localize.milage") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" id="end_milage" name="end_milage" value="<?php echo esc(old('end_milage')) ?>" class="form-control text-capitalize" placeholder="<?php echo lang("Localize.end") ?> <?php echo lang("Localize.milage") ?>" required>
                            </div>

                            <div class="text-danger">
                                <?php if (isset($validation)) : ?>
                                    <?= $validation->listErrors(); ?>
                                <?php endif ?>
                            </div>
                        </div>

                        <br>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                        </div>

                    </div>

                    <div class="col-2">
                    </div>

                </div>
            </form>

        </div>
    </div>

<?php echo $this->endSection() ?>