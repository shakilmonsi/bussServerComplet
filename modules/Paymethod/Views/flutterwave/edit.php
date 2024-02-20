<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="card mb-4">
    <div class="card-body">

        <form action="<?php echo base_url(route_to('update-flutterwave', $flutterwave->id)) ?>" id="flutterwaveedit" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
            <?php echo $this->include('common/securityupdate') ?>

            <div class="row">
                <div class="col-4 offset-md-4">
                    <div class="row">
                        <div class="col-12 mt-3">
                            <label for="live_public_key" class=""><?php echo lang("Localize.live") . " " . lang("Localize.public") . " " . lang("Localize.key") ?></label>
                            <input type="text" id="live_public_key" name="live_public_key" value="<?php echo esc(old('live_public_key')) ?? $flutterwave->live_public_key  ?>" class="form-control" placeholder="<?php echo lang("Localize.live") . " " . lang("Localize.public") . " " . lang("Localize.key") ?>">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="live_secret_key" class=""><?php echo lang("Localize.live") . " " . lang("Localize.secret") . " " . lang("Localize.key") ?></label>
                            <input type="text" id="live_secret_key" name="live_secret_key" value="<?php echo esc(old('live_secret_key')) ?? $flutterwave->live_secret_key ?>" class="form-control" placeholder="<?php echo lang("Localize.live") . " " . lang("Localize.secret") . " " . lang("Localize.key") ?>">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="live_encryption_key" class=""><?php echo lang("Localize.live") . " " . lang("Localize.encryption") . " " . lang("Localize.key") ?></label>
                            <input type="text" id="live_encryption_key" name="live_encryption_key" value="<?php echo esc(old('live_encryption_key')) ?? $flutterwave->live_encryption_key ?>" class="form-control" placeholder="<?php echo lang("Localize.live") . " " . lang("Localize.encryption") . " " . lang("Localize.key") ?>">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="test_public_key" class=""><?php echo lang("Localize.test") . " " . lang("Localize.public") . " " . lang("Localize.key") ?></label>
                            <input type="text" id="test_public_key" name="test_public_key" value="<?php echo esc(old('test_public_key')) ?? $flutterwave->test_public_key ?>" class="form-control" placeholder="<?php echo lang("Localize.test") . " " . lang("Localize.public") . " " . lang("Localize.key") ?>">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="test_secret_key" class=""><?php echo lang("Localize.test") . " " . lang("Localize.secret") . " " . lang("Localize.key") ?></label>
                            <input type="text" id="test_secret_key" name="test_secret_key" value="<?php echo esc(old('test_secret_key')) ?? $flutterwave->test_secret_key ?>" class="form-control" placeholder="<?php echo lang("Localize.test") . " " . lang("Localize.secret") . " " . lang("Localize.key") ?>">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="test_encryption_key" class=""><?php echo lang("Localize.test") . " " . lang("Localize.encryption") . " " . lang("Localize.key") ?></label>
                            <input type="text" id="test_encryption_key" name="test_encryption_key" value="<?php echo esc(old('test_encryption_key')) ?? $flutterwave->test_encryption_key ?>" class="form-control" placeholder="<?php echo lang("Localize.test") . " " . lang("Localize.encryption") . " " . lang("Localize.key") ?>">
                        </div>

                        <div class="col-12 mt-3 environment-radio">
                            <label><?php echo lang("Localize.environment") ?></label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="environment" id="env-live" value="1" <?php echo $flutterwave->environment ? 'checked' : '' ?> />
                                <label class="form-check-label" for="env-live">
                                    <?php echo lang("Localize.live") ?>
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="environment" id="env-test" value="0" <?php echo !$flutterwave->environment ? 'checked' : '' ?> />
                                <label class="form-check-label" for="env-test">
                                    <?php echo lang("Localize.test") ?>s
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
            </div>
        </form>
    </div>
</div>

<?php echo $this->endSection(); ?>