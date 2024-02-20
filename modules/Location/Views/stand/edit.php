<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">

        <div class="card-body">

            <form action="<?php echo base_url(route_to('update-stand', $stand->id)) ?>" id="locationedit" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/securityupdate') ?>

                <label for="name"><?php echo lang("Localize.stand") ?> <?php echo lang("Localize.name") ?> <abbr title="Required field">*</abbr></label>
                <div class="col-6 ">
                    <input type="text" name="name" value="<?php echo esc(old('name') ?? $stand->name) ?>" class="form-control" required />

                    <div class="text-danger ">
                        <?php if (isset($validation)) : ?>
                            <?= $validation->listErrors(); ?>
                        <?php endif ?>
                    </div>

                </div>

                <div class="col-4">
                    <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                </div>

            </form>

        </div>
    </div>
<?php echo $this->endSection() ?>