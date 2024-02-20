<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>
    
    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('create-coupon')) ?>" id="couponform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>

                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <label for="code" class=""><?php echo lang("Localize.coupon") ?> <?php echo lang("Localize.code") ?></label>
                                <input type="text" id="code" name="code" class="form-control" required />
                            </div>

                            <div class="col-12 mt-3" id="payment_method">
                                <label for="subtrip_id"><?php echo lang("Localize.sub") ?> <?php echo lang("Localize.trip") ?> </label>
                                <select class="form-select" name="subtrip_id" id="subtrip_id" required>

                                    <?php foreach ($tripGroups as $tripVal) : ?>
                                        <optgroup label="<?php echo $tripVal->picklocation . "-" . $tripVal->droplocation  ?>">
                                            <option value="<?php echo $tripVal->id ?>">
                                                <?php echo $tripVal->picklocation . "--" . $tripVal->droplocation  ?>
                                            </option>
                                            
                                            <?php foreach ($tripVal->children as $subTripVal) : ?>
                                                <option value="<?php echo $subTripVal->id ?>">
                                                    <?php echo $subTripVal->picklocation . "--" . $subTripVal->droplocation  ?>
                                                </option>
                                            <?php endforeach ?>
                                        </optgroup>
                                    <?php endforeach ?>

                                </select>
                            </div>

                            <div class="col-12 mt-3">
                                <label for="start_date" class="form-label"><?php echo lang("Localize.start") ?> <?php echo lang("Localize.date") ?> <abbr title="Required field">*</abbr></label>
                                <div class="input-append date datepicker" id="start_date" data-date-format="yyyy-mm-dd">
                                    <input size="16" type="text" name="start_date" class="form-control will-fill-by-plugin" required readonly />
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <label for="end_date" class="form-label"><?php echo lang("Localize.end") ?> <?php echo lang("Localize.date") ?> <abbr title="Required field">*</abbr></label>
                                <div class="input-append date datepicker" id="end_date" data-date-format="yyyy-mm-dd">
                                    <input size="16" type="text" name="end_date" class="form-control will-fill-by-plugin" required readonly />
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <label for="discount" class=""><?php echo lang("Localize.discount") ?> <?php echo lang("Localize.amount") ?>  <abbr title="Required field">*</abbr></label>
                                <input type="number" id="discount" name="discount" value="<?php echo esc(old('discount')) ?>" class="form-control" placeholder="<?php echo lang("Localize.discount") . " " . lang("Localize.amount") ?>" min="0" required />
                            </div>

                            <div class="col-12 mt-3">
                                <label for="condition" class="form-label"><?php echo lang("Localize.terms_conditions") ?> <abbr title="Required field">*</abbr></label>
                                <textarea class="form-control" name="condition" id="condition" rows="3" required><?php echo old('condition') ?></textarea>
                            </div>

                            <div class="text-danger">
                                <?php if (isset($validation)) : ?>
                                    <?= $validation->listErrors(); ?>
                                <?php endif ?>
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php echo $this->endSection() ?>