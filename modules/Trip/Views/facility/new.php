<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('create-facility')) ?>" id="locationform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>

                <label for="facility" class=""><?php echo lang("Localize.facility") ?> <?php echo lang("Localize.name") ?> <abbr title="Required field">*</abbr></label>
                <div class="col-6 ">
                    <input type="text" id="name" name="name" value="<?php echo esc(old('name'))  ?>" class="form-control" placeholder="<?php echo lang("Localize.facility") ?> <?php echo lang("Localize.name") ?>" required />

                    <div class="text-danger">
                        <?php if (isset($validation)) : ?>
                            <?= $validation->listErrors(); ?>
                        <?php endif ?>
                    </div>

                </div>

                <br>
                <div class="col-4">
                    <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                </div>


            </form>
        </div>
    </div>

<?php echo $this->endSection() ?>