<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('create-add')) ?>" id="addfrom" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>

                <div class="row">
                    <div class="col-2"></div>

                    <div class="col-8">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <label for="link" class="form-label"><?php echo lang("Localize.link") ?></label>
                                <input type="text" id="link" name="link" class="form-control" value="<?php echo esc(old('link'))  ?>" placeholder="Link">
                            </div>

                            <div class="col-12 mt-3">
                                <label for="pagename" class="form-label"><?php echo lang("Localize.page") ?> <?php echo lang("Localize.name") ?></label>
                                <select class="form-select" name="pagename" id="pagename" required>
                                    <option value="">None</option>
                                    <option value="checkout"><?php echo lang("Localize.check_out") ?> <?php echo lang("Localize.page") ?> </option>
                                    <option value="ticket"><?php echo lang("Localize.ticket") ?> <?php echo lang("Localize.page") ?> </option>
                                    <option value="customer"><?php echo lang("Localize.customer") ?> <?php echo lang("Localize.page") ?> </option>
                                </select>
                            </div>

                            <div class="col-12 mt-3">
                                <label for="add" class="form-label"><?php echo lang("Localize.picture") ?></label>
                                <div id="add">

                                </div>
                                <span>max 384X600 px</span>
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

                    <div class="col-2"></div>
                </div>
            </form>
        </div>
    </div>

<?php echo $this->endSection() ?>