<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<div class="card mb-4">
    <div class="card-body">

        <form action="<?php echo base_url(route_to('create-flutterwave')) ?>" id="razorform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
            <?php echo $this->include('common/security') ?>

            <div class="row">
                <div class="col-4 offset-md-4">
                    <div class="row">
                        <div class="col-12 mt-3">
                            <label for="live_public_key" class=""><?php echo lang("Localize.live") . " " . lang("Localize.public") . " " . lang("Localize.key") ?></label>
                            <input type="text" id="live_public_key" name="live_public_key" value="<?php echo esc(old('live_public_key'))  ?>" class="form-control" placeholder="<?php echo lang("Localize.live") . " " . lang("Localize.public") . " " . lang("Localize.key") ?>">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="live_secret_key" class=""><?php echo lang("Localize.live") . " " . lang("Localize.secret") . " " . lang("Localize.key") ?></label>
                            <input type="text" id="live_secret_key" name="live_secret_key" value="<?php echo esc(old('live_secret_key'))  ?>" class="form-control" placeholder="<?php echo lang("Localize.live") . " " . lang("Localize.secret") . " " . lang("Localize.key") ?>">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="live_encryption_key" class=""><?php echo lang("Localize.live") . " " . lang("Localize.encryption") . " " . lang("Localize.key") ?></label>
                            <input type="text" id="live_encryption_key" name="live_encryption_key" value="<?php echo esc(old('live_encryption_key'))  ?>" class="form-control" placeholder="<?php echo lang("Localize.live") . " " . lang("Localize.encryption") . " " . lang("Localize.key") ?>">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="test_public_key" class=""><?php echo lang("Localize.test") . " " . lang("Localize.public") . " " . lang("Localize.key") ?></label>
                            <input type="text" id="test_public_key" name="test_public_key" value="<?php echo esc(old('test_public_key'))  ?>" class="form-control" placeholder="<?php echo lang("Localize.test") . " " . lang("Localize.public") . " " . lang("Localize.key") ?>">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="test_secret_key" class=""><?php echo lang("Localize.test") . " " . lang("Localize.secret") . " " . lang("Localize.key") ?></label>
                            <input type="text" id="test_secret_key" name="test_secret_key" value="<?php echo esc(old('test_secret_key'))  ?>" class="form-control" placeholder="<?php echo lang("Localize.test") . " " . lang("Localize.secret") . " " . lang("Localize.key") ?>">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="test_encryption_key" class=""><?php echo lang("Localize.test") . " " . lang("Localize.encryption") . " " . lang("Localize.key") ?></label>
                            <input type="text" id="test_encryption_key" name="test_encryption_key" value="<?php echo esc(old('test_encryption_key'))  ?>" class="form-control" placeholder="<?php echo lang("Localize.test") . " " . lang("Localize.encryption") . " " . lang("Localize.key") ?>">
                        </div>

                        <div class="col-12 mt-3 environment-radio">
                            <label><?php echo lang("Localize.environment") ?></label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="environment" id="environment" value="1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    <?php echo lang("Localize.live") ?>
                                </label>
                            </div>
    
                            <div class="form-check">
                                <label class="form-check-label" for="exampleRadios2">
                                    <input class="form-check-input" type="radio" name="environment" id="environment" value="0">
                                    <?php echo lang("Localize.test") ?>
                                </label>
                            </div>
                        </div>

                        <div class="text-danger">
                            <?php if (isset($validation)) : ?>
                                <?= $validation->listErrors(); ?>
                            <?php endif ?>
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                    </div>
                </div>

                <div class="col-4"></div>
            </div>
        </form>
    </div>
</div>

<?php echo $this->endSection() ?>