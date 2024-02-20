<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('update-paymentgateway', $paymentgateway->id)) ?>" id="paymentmethod" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/securityupdate') ?>


                <div class="row">
                    <div class="col-4"></div>

                    <div class="col-4">

                        <div class="row">
                            <div class="col-12">
                                <label for="name" class=""><?php echo lang("Localize.payment_gateway") ?> <?php echo lang("Localize.name") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" name="name" value="<?php echo esc(old('name') ?? $paymentgateway->name) ?>" class="form-control" readonly required />
                            </div>


                            <label class="form-label mt-3" for="">
                                <?php echo lang("Localize.status") ?>
                                <abbr title="Required field">*</abbr>
                            </label>

                            <?php if ($paymentgateway->status == 1) : ?>
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

                    <div class="col-4"></div>

                </div>
            </form>
        </div>
    </div>
<?php echo $this->endSection() ?>