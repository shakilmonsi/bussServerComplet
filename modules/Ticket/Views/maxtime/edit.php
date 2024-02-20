<?php $this->extend('template/admin/main') ?>

<?php $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">
            <form action="<?php echo base_url(route_to('update-maxtime', $maxtime->id)) ?>" id="languageform" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/securityupdate') ?>

                <div class="row g-3 justify-content-center">
                    <div class="col-4">
                        <div class="form-group mb-3">
                            <label for="maxtime"><?php echo lang("Localize.max_time_cancel") ?> <abbr title="Required field">*</abbr></label>
                            <input type="text" name="maxtime" value="<?php echo esc(old('maxtime') ?? $maxtime->maxtime) ?>" class="form-control text-capitalize">
                        </div>

                        <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                    </div>

                    <div class="text-danger mt-2">
                        <?php if (isset($validation)) : ?>
                            <?php echo $validation->listErrors(); ?>
                        <?php endif ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $this->endSection() ?>