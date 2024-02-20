<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('update-tax', $tax->id)) ?>" id="taxedit" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/securityupdate') ?>

                <div class="row">
                    <div class="col-2"></div>

                    <div class="col-8">

                        <div class="row">

                            <div class="col-4 ">
                                <label for="name" class=""><?php echo lang("Localize.tax") ?> <?php echo lang("Localize.name") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" name="name" value="<?php echo esc(old('name') ?? $tax->name) ?>" class="form-control" required />
                            </div>


                            <div class="col-4">
                                <label for="value" class=""><?php echo lang("Localize.tax") ?> <?php echo lang("Localize.value") ?> (%) <abbr title="Required field">*</abbr></label>
                                <input type="number" id="value" name="value" value="<?php echo esc(old('value') ?? $tax->value) ?>" class="form-control" placeholder="xxx" step="0.01" required />
                            </div>
                            <div class="col-4">
                                <label for="name" class=""><?php echo lang("Localize.reg") ?> <?php echo lang("Localize.no") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" id="tax_reg" name="tax_reg" value="<?php echo esc(old('tax_reg') ?? $tax->tax_reg) ?>" class="form-control" placeholder="Reg No" required />
                            </div>


                            <label class="form-label mt-2" for="">
                                <?php echo lang("Localize.status") ?>
                                <abbr title="Required field">*</abbr>
                            </label>

                            <?php if ($tax->status == 1) : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status" value="1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        <?php echo lang("Localize.active") ?>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        <?php echo lang("Localize.disable") ?>
                                    </label>
                                </div>
                            <?php else : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status" value="1">
                                    <label class="form-check-label" for="exampleRadios1">
                                        <?php echo lang("Localize.active") ?>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status" value="0" checked>
                                    <label class="form-check-label" for="exampleRadios2">
                                        <?php echo lang("Localize.disable") ?>
                                    </label>
                                </div>
                            <?php endif ?>

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

                    </div>

                    <div class="col-2"></div>

                </div>
            </form>
        </div>
    </div>
<?php echo $this->endSection() ?>