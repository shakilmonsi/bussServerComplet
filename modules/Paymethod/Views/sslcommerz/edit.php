<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="card mb-4">
    <div class="card-body">

        <form action="<?php echo base_url(route_to('update-sslcommerz', $sslcommerz->id)) ?>" id="sslcommerzedit" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
            <?php echo $this->include('common/securityupdate') ?>


            <div class="row">
                <div class="col-4"></div>

                <div class="col-4">

                    <div class="row">
                        <div class="col-12 mt-3">
                            <label for="store_id" class=""><?php echo "SSL Commerz" . lang("Localize.store") . " " . lang("Localize.id"); ?> </label>
                            
                            <input type="text" id="store_id" name="store_id" class="form-control"
                                value="<?php echo esc(old('store_id') ?? $sslcommerz->ssl_store_id)  ?>"
                                placeholder="<<?php echo "SSL Commerz" . lang("Localize.store") . " " . lang("Localize.id") ?>">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="store_password" class=""><?php echo "SSL Commerz" . lang("Localize.store") . " " . lang("Localize.password") ?></label>
                            
                            <input type="text" id="store_password" name="store_password" class="form-control"
                                value="<?php echo esc(old('store_password') ?? $sslcommerz->ssl_store_password)  ?>"
                                placeholder="<?php echo "SSL Commerz" . lang("Localize.store") . " " . lang("Localize.password"); ?>">
                        </div>

                        <div class="col-12 mt-3 environment-radio">
                            <label><?php echo lang("Localize.environment") ?></label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="environment" id="env-live" value="1"
                                    <?php echo $sslcommerz->environment ? 'checked' : '' ?> />
                                <label class="form-check-label" for="env-live">
                                    <?php echo lang("Localize.live") ?>
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="environment" id="env-test" value="0"
                                    <?php echo !$sslcommerz->environment ? 'checked' : '' ?> />
                                <label class="form-check-label" for="env-test">
                                    <?php echo lang("Localize.test") ?>
                                </label>
                            </div>
                        </div>

                        <div class="text-danger">
                            <?php if (isset($validation)) : ?>
                                <?php echo $validation->listErrors(); ?>
                            <?php endif ?>
                        </div>
                    </div>

                    <br>
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