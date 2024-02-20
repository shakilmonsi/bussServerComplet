<?php echo $this->extend('template/admin/main') ?>

<?php $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('create-employeetype')) ?>" id="employee" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>


                <div class="row">

                    <div class="col-4">

                    </div>

                    <div class="col-4">

                        <div class="row">

                            <div class="col-12 mt-3">
                                <label for="type"><?php echo lang("Localize.employee") ?> <?php echo lang("Localize.type") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" name="type" value="<?php echo old('type') ?>" class="form-control" placeholder="<?php echo lang("Localize.employee") ?> <?php echo lang("Localize.type") ?>" required />
                            </div>

                            <div class="col-12 mt-3">
                                <label for="detail"><?php echo lang("Localize.employee") ?> <?php echo lang("Localize.details") ?></label>
                                <input type="text" name="detail" value="<?php echo old('detail') ?>" class="form-control" placeholder="<?php echo lang("Localize.employee") ?> <?php echo lang("Localize.details") ?>">
                            </div>


                        </div>
                        <br>
                        <div class="text-danger">
                            <?php if (isset($validation)) : ?>
                                <?= $validation->listErrors(); ?>
                            <?php endif ?>
                        </div>

                    </div>

                    <br>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                    </div>

                    <div class="col-4">

                    </div>

                </div>


            </form>



        </div>
    </div>

<?php $this->endSection() ?>