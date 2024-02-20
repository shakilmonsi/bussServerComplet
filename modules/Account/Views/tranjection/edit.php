<?php $this->extend('template/admin/main') ?>

<?php $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('update-account', $account->id)) ?>" id="accountedit" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/securityupdate') ?>

                <div class="row">
                    <div class="col-4">

                    </div>

                    <div class="col-4">

                        <div class="row">

                            <div class="col-12 mt-3">
                                <label for="detail" class=""><?php echo lang("Localize.details") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" id="detail" name="detail" value="<?php echo esc(old('detail') ?? $account->detail)  ?>" class="form-control text-capitalize" placeholder="<?php echo lang("Localize.details") ?>">
                            </div>

                            <div class="col-12 mt-3">
                                <label for="type"><?php echo lang("Localize.type") ?> <abbr title="Required field">*</abbr></label>
                                <select class="form-select" name="type" id="type" required disabled>
                                    <option value="">None</option>
                                    <option value="income" <?php echo ($account->type == "income") ? "selected" : ""; ?>><?php echo lang("Localize.income") ?></option>
                                    <option value="expense" <?php echo ($account->type == "expense") ? "selected" : ""; ?>><?php echo lang("Localize.expense") ?></option>
                                </select>

                            </div>

                            <div class="col-12 mt-3">
                                <label for="amount" class=""><?php echo lang("Localize.amount") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" id="amount" name="amount" value="<?php echo esc(old('amount') ?? $account->amount)  ?>" class="form-control text-capitalize" placeholder="<?php echo lang("Localize.amount") ?>">
                            </div>

                            <div class="col-12 mt-3">
                                <label for="invoiceedit" class="form-label"><?php echo lang("Localize.document") ?></label>
                                <div id="invoiceedit"></div>
                                <input type="hidden" id="invoiceold" name="invoiceold" value="<?php echo $account->doc_location ?>">
                            </div>

                            <div class="text-danger">
                                <?php if (isset($validation)) : ?>
                                    <?= $validation->listErrors(); ?>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-4"></div>
                </div>

                <br>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                </div>

                <input type="hidden" id="baseurl" name="baseurl" value="<?php echo base_url(); ?>">
                <input type="hidden" id="type" name="type" value="<?php echo $account->type; ?>">
            </form>
        </div>
    </div>


<?php echo $this->endSection() ?>