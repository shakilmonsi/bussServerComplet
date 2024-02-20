<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('css') ?>
    <link href="<?php echo base_url('public/plugins/select2/select2.min.css'); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('public/css/customestyle.css'); ?>" type="text/css">
<?php echo $this->endSection() ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('create-Subtrip')) ?>" id="subtripfrom" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>
                <input type="hidden" id="id" name="id" value="<?php echo esc($maintripid) ?>">

                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="row form-group mb-2">
                            <div class="col-6">
                                <label for="pick_location_id" class="form-label"><?php echo lang("Localize.pick_up") ?> <abbr title="Required field">*</abbr></label>
                                <select class="form-select select2" name="pick_location_id" id="pick_location_id" required>
                                    <option value="">None</option>

                                    <?php foreach ($location as $locationvalue) : ?>
                                        <option value="<?php echo $locationvalue->id ?>"><?php echo $locationvalue->name ?></option>
                                    <?php endforeach ?>

                                </select>
                            </div>

                            <div class="col-6">
                                <label for="drop_location_id" class="form-label"><?php echo lang("Localize.drop") ?> <abbr title="Required field">*</abbr></label>
                                <select class="form-select select2" name="drop_location_id" id="drop_location_id" required>
                                    <option value="">None</option>

                                    <?php foreach ($location as $locationvalue) : ?>
                                        <option value="<?php echo $locationvalue->id ?>"><?php echo $locationvalue->name ?></option>
                                    <?php endforeach ?>

                                </select>
                            </div>
                        </div>

                        <div class="row form-group mb-2">
                            <div class="col-6">
                                <label for="stoppage" class="form-label"><?php echo lang("Localize.stoppage") ?> <?php echo lang("Localize.point") ?> <abbr title="Required field">*</abbr></label>
                                <select name="stoppage[]" id="stoppage" class="form-control" multiple>

                                    <?php foreach ($location as $locationvalue) : ?>
                                        <option value="<?php echo $locationvalue->id ?>"><?php echo $locationvalue->name ?></option>
                                    <?php endforeach ?>

                                </select>
                            </div>

                            <div class="col-6">
                                <label for="child_fair" class="form-label"><?php echo lang("Localize.children") ?> <?php echo lang("Localize.fair") ?></label>
                                <input type="number" id="child_fair" name="child_fair" class="form-control" value="<?php echo old('child_fair') ?>" placeholder="<?php echo lang("Localize.children") ?> <?php echo lang("Localize.fair") ?>" min="0">
                            </div>
                        </div>

                        <div class="row form-group mb-2">
                            <div class="col-6">
                                <label for="special_fair" class="form-label"><?php echo lang("Localize.special") ?> <?php echo lang("Localize.fair") ?></label>
                                <input type="number" id="special_fair" name="special_fair" class="form-control" value="<?php echo old('special_fair') ?>" placeholder="<?php echo lang("Localize.special") ?>  <?php echo lang("Localize.fair") ?>" min="0">
                            </div>

                            <div class="col-6">
                                <label for="adult_fair" class="form-label"><?php echo lang("Localize.adult") ?> <?php echo lang("Localize.fair") ?> <abbr title="Required field">*</abbr></label>
                                <input type="number" id="adult_fair" name="adult_fair" class="form-control" value="<?php echo old('adult_fair') ?>" placeholder="<?php echo lang("Localize.adult") ?> <?php echo lang("Localize.fair") ?>" min="1" required>
                            </div>
                        </div>

                        <div class="row form-group my-4">
                            <div class="col-6">
                                <label for="show" class="form-label"><?php echo lang("Localize.show_in_home_page") ?></label>
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="checkbox" value="1" id="show" name="show">
                                    <label class="form-check-label" for="show">
                                        <?php echo lang("Localize.show_in_home_page") ?>
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div id="picsection">
                                    <label for="picsection" class="form-label"><?php echo lang("Localize.trip") ?> <?php echo lang("Localize.image") ?> </label>
                                    <div id="subtripimage"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label class="form-label">
                                <?php echo lang("Localize.trip") ?> <?php echo lang("Localize.status") ?>
                                <abbr title="Required field">*</abbr>
                            </label>

                            <div class="status-radio">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="active" value="1" checked>
                                    <label class="form-check-label" for="active"><?php echo lang("Localize.active") ?></label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" value="0" id="disable">
                                    <label class="form-check-label" for="disable"><?php echo lang("Localize.disable") ?></label>
                                </div>
                            </div>

                            <div class="text-danger my-2">
                                <?php if (isset($validation)) : ?>
                                    <?= $validation->listErrors(); ?>
                                <?php endif ?>
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

<?php echo $this->section('js') ?>
    <script src="<?php echo base_url('public/plugins/select2/select2.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/dynamicinput.js'); ?>"></script>
<?php echo $this->endSection() ?>