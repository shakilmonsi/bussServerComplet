<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('update-schedulefilter', $schedulefilter->id)) ?>" id="employee" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/securityupdate') ?>

                <div class="col-3">
                    <label for="start_time" class="form-label"><?php echo lang("Localize.from") ?> <?php echo lang("Localize.time") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" id="start_time" name="start_time" class="form-control" value="<?php echo old('start_time') ?? $schedulefilter->start_time ?>" placeholder="<?php echo lang("Localize.start") ?> <?php echo lang("Localize.time") ?>" required>
                </div>
                <div class="col-3 ">
                    <label for="end_time" class="form-label"><?php echo lang("Localize.to") ?> <?php echo lang("Localize.time") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" id="end_time" name="end_time" class="form-control" value="<?php echo old('end_time') ?? $schedulefilter->end_time  ?>" placeholder="<?php echo lang("Localize.end") ?> <?php echo lang("Localize.time") ?>" required>
                </div>

                <div class="col-3">
                    <label for="type" class="form-label"><?php echo lang("Localize.filter") ?> <?php echo lang("Localize.type") ?> <abbr title="Required field">*</abbr></label>
                    <select class="form-select" name="type" id="type" required>
                        <?php if ($schedulefilter->type == 1) : ?>
                            <option value="1" selected><?php echo lang("Localize.pick_up") ?></option>
                            <option value="0"><?php echo lang("Localize.drop") ?></option>
                        <?php elseif ($schedulefilter->type == 0) : ?>
                            <option value="1"><?php echo lang("Localize.pick_up") ?></option>
                            <option value="0" selected><?php echo lang("Localize.drop") ?></option>
                        <?php endif ?>

                    </select>
                </div>

                <br>
                <div class="col-3 mt-5">
                    <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                </div>

                <div class="text-danger">
                    <?php if (isset($validation)) : ?>
                        <?= $validation->listErrors(); ?>
                    <?php endif ?>
                </div>
            </form>
        </div>
    </div>
<?php echo $this->endSection() ?>