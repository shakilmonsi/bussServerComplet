<?php echo $this->extend('template/web/main') ?>

<?php $this->section('content') ?>
    <div class="d-flex align-items-center justify-content-center text-center h-100vh login-section">
        <div class="form-wrapper m-auto">
            <div class="form-container my-4">
                <div class="panel">
                    <div class="login-splash">
                        <h2>Admin Login</h2>
                        <h4><?php echo $logo_text; ?></h4>
                    </div>

                    <form action="<?php echo base_url(route_to('auth-login')) ?>" id="logindauth" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                        <?php echo $this->include('common/security') ?>

                        <div class="mb-3">
                            <input type="text" name="userid" class="form-control" id="emial" placeholder="<?php echo lang("Localize.email").' '.lang("Localize.address")?>">
                            <!-- <div class="invalid-feedback text-start">Enter your valid email</div> -->
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" id="password-field" placeholder="<?php echo lang("Localize.sign_up_page_input_password")?>">
                        </div>
                        <button type="submit" class="btn btn-success w-100"><?php echo lang("Localize.sign_in")?></button>
                    </form>
                </div>

                <div class="bottom-text text-center my-3">
                <?php echo lang("Localize.remind")?> <a href="<?php echo base_url(route_to('forgetpassload')) ?>" class="fw-medium"><?php echo lang("Localize.sign_up_page_input_password")?></a>
                </div>
            </div>

            <?php echo $this->include('common/message') ?>
        </div>
    </div>

    <div class="watermark" style="<?php echo htmlentities('background-image: url(\'data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" height="200"><image width="130" height="auto" xlink:href="data:image/png;base64,' . $logo_base64 . '" /></svg>\');'); ?>"></div>
<?php $this->endSection() ?>