<?php $this->extend('template/admin/main') ?>

<?php $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('create-maxtime')) ?>" id="MaxtimeForm" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>

                <div class="row g-3 justify-content-center">
                    <div class="col-4">
                        <div class="form-group mb-3">
                            <label for="maxtime" class=""> <?php echo lang("Localize.max_time_cancel") ?> <abbr title="Required field">*</abbr></label>
                            <input type="text" id="maxtime" name="maxtime" value="<?php echo esc(old('maxtime'))  ?>" class="form-control text-capitalize" placeholder="<?php echo lang("Localize.max_time_cancel") ?>">
                        </div>

                        <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                    </div>
                </div>

                <div class="text-danger mt-3">
                    <?php if (isset($validation)) : ?>
                        <?= $validation->listErrors(); ?>
                    <?php endif ?>
                </div>
            </form>
        </div>
    </div>
<?php $this->endSection() ?>