<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>
    
    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('create-socialmedia')) ?>" id="socialmediaform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>

                <div class="row">
                    <div class="col-4"></div>
                    
                    <div class="col-4">
                        <div class="row">

                            <div class="col-12 mt-3">
                                <label for="link" class=""><?php echo lang("Localize.link") ?></label>
                                <input type="text" id="link" name="link" value="<?php echo esc(old('link'))  ?>" class="form-control" placeholder="<?php echo lang("Localize.link") ?>">
                            </div>

                            <div class="col-4 mt-3">
                                <label for="social" class="form-label"><?php echo lang("Localize.logo_picture") ?> </label>
                                <div id="social"></div>
                            </div>

                            <div class="text-danger">
                                <?php if (isset($validation)) : ?>
                                    <?= $validation->listErrors(); ?>
                                <?php endif ?>
                            </div>

                            <br>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-4"></div>

                </div>
            </form>

        </div>
    </div>
<?php echo $this->endSection() ?>