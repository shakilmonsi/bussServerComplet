<?php $this->extend('template/admin/main') ?>

<?php $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">
            <form action="<?php echo base_url(route_to('create-account')) ?>" id="accountform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>

                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <label for="detail" class=""><?php echo lang("Localize.details") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" id="detail" name="detail" value="<?php echo esc(old('detail'))  ?>" class="form-control text-capitalize" placeholder="<?php echo lang("Localize.details") ?>" required />
                            </div>

                            <div class="col-12 mt-3">
                                <label for="type"><?php echo lang("Localize.type") ?> <abbr title="Required field">*</abbr></label>
                                <select class="form-select" name="type" id="type" required>
                                    <option value="">None</option>
                                    <option value="income"><?php echo lang("Localize.income") ?></option>
                                    <option value="expense"><?php echo lang("Localize.expense") ?></option>
                                </select>
                            </div>

                            <div class="col-12 mt-3">
                                <label for="amount" class=""><?php echo lang("Localize.amount") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" id="amount" name="amount" value="<?php echo esc(old('amount'))  ?>" class="form-control text-capitalize" placeholder="<?php echo lang("Localize.amount") ?>" required />
                            </div>

                            <div class="col-12 mt-3">
                                <label for="invoice" class="form-label"><?php echo lang("Localize.document") ?></label>
                                <div id="invoice"></div>
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                            </div>

                            <div class="text-danger mt-3">
                                <?php if (isset($validation)) : ?>
                                    <?= $validation->listErrors(); ?>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $this->endSection() ?>