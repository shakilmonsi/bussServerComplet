<?php
$sessiondata = \Config\Services::session(); // Needed for Point 5

if ($sessiondata->has('grandtotal')) {
    $singleTripTotal  = $sessiondata->grandtotal;
    $rouondTripTotal = (float) $singleTripTotal + (float) $grandtotal;
}

$isrountripPost  = $sessiondata->has('isrountrip') ? $sessiondata->isrountrip : 0;
?>

<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
<div class="card mb-4">
    <div class="card-body">
        <form action="<?php echo $isrountripPost ? base_url(route_to('roundcreate-ticket')) : base_url(route_to('create-ticket')) ?>" method="post" id="createbooking" accept-charset="utf-8" enctype="multipart/form-data">
            <?php echo $this->include('common/security') ?>

            <input type="hidden" name="baseurl" id="baseurl" value="<?php echo base_url(); ?>">
            <input type="hidden" name="subtripId" id="subtripId" value="<?php echo $subtripId; ?>">
            <input type="hidden" name="seatnumbers" id="seatnumbers" value="<?php echo $seatnumbers; ?>">
            <input type="hidden" name="aseat" id="aseat" value="<?php echo $aseat; ?>">
            <input type="hidden" name="spseat" id="spseat" value="<?php echo $spseat; ?>">
            <input type="hidden" name="cseat" id="cseat" value="<?php echo $cseat; ?>">
            <input type="hidden" name="totalprice" id="totalprice" value="<?php echo $totalprice; ?>">
            <input type="hidden" name="tax" id="tax" value="<?php echo $tax; ?>">

            <?php if ($sessiondata->has('grandtotal')) : ?>
                <input type="hidden" name="oldgrandtotal" id="oldgrandtotal" value="<?php echo $rouondTripTotal; ?>">
            <?php else : ?>
                <input type="hidden" name="oldgrandtotal" id="oldgrandtotal" value="<?php echo $grandtotal; ?>">
            <?php endif ?>

            <input type="hidden" name="pickstand" id="pickstand" value="<?php echo $pickstand; ?>">
            <input type="hidden" name="dropstand" id="dropstand" value="<?php echo $dropstand; ?>">
            <input type="hidden" name="totalseat" id="totalseat" value="<?php echo $totalseat; ?>">
            <input type="hidden" name="journeydate" id="journeydate" value="<?php echo $journeydate; ?>">
            <input type="hidden" name="roundtrip_discount" id="roundtrip_discount" value="<?php echo $roundtrip_discount; ?>">

            <div class="booking-passangers mb-4">
                <div class="row">
                    <div class="col-7">
                        <h5 class="card-title"><?php echo lang('Localize.customer') . " " . lang('Localize.details') ?></h5>
                        <?php echo $this->include($filterpath . '\ticket\passanger') ?>
                    </div>

                    <?php if ($dynamicfield) :  ?>
                        <div class="col-5">
                            <h5 class="card-title"><?php echo lang('Localize.passanger') . " " . lang('Localize.details') ?></h5>

                            <?php for ($i = 1; $i <= $dynamicfield; $i++) { ?>
                                <div class="mb-3">
                                    <label class="fw-bold"><?php echo lang("Localize.passanger") ?> <?php echo $i + 1; ?> </label>
                                    
                                    <div class="row mb-2">
                                        <div class="col-6 ">
                                            <label for="first_name"><?php echo lang("Localize.first_name") ?></label>
                                            <input type="text" name="first_name_new[]" class="form-control" value="" placeholder="<?php echo lang("Localize.first_name") ?>" aria-label="First name">
                                        </div>
                                        <div class="col-6">
                                            <label for="last_name"><?php echo lang("Localize.last_name") ?></label>
                                            <input type="text" name="last_name_new[]" class="form-control" value="" placeholder="<?php echo lang("Localize.last_name") ?>" aria-label="Last name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="login_mobile"><?php echo lang("Localize.mobile") ?></label>
                                            <input type="number" name="login_mobile_new[]" class="form-control" value="" placeholder="<?php echo lang("Localize.mobile") ?>" aria-label="Mobile">
                                        </div>
    
                                        <div class="col-6">
                                            <label for="id_number"><?php echo lang("Localize.nid_passport_number") ?></label>
                                            <input type="text" name="id_number_new[]" class="form-control" value="" placeholder="<?php echo lang("Localize.nid_passport_number") ?>" aria-label="Nid/Passport Number">
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    <?php endif ?>

                </div>
            </div>

            <div class="booking-payments mb-4">
                <h5 class="card-title"><?php echo lang('Localize.payment') . " " . lang('Localize.details')  ?></h5>

                <div class="row">
                    <div class="col-4 form-group">
                        <label for="payment_status"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.status") ?> <abbr class="required" title="Required field">*</abbr></label>
                        <select class="form-select" name="payment_status" id="payment_status" required>
                            <option value="paid"><?php echo lang("Localize.paid") ?></option>
                            <option value="partial"><?php echo lang("Localize.partial") ?></option>
                            <option value="unpaid"><?php echo lang("Localize.unpaid") ?></option>
                        </select>
                    </div>

                    <div class="col-4 form-group" id="payment_method">
                        <label for="pay_method"><?php echo lang("Localize.pay") ?> <?php echo lang("Localize.type") ?> <abbr class="required" title="Required field">*</abbr></label>
                        <select class="form-select" name="pay_method" id="pay_method" required>

                            <?php foreach ($paymethod as $paymethodvalue) : ?>
                                <option value="<?php echo $paymethodvalue->id ?>"><?php echo $paymethodvalue->name ?></option>
                            <?php endforeach ?>

                        </select>
                    </div>

                    <div class="col-4 form-group" id="grand">
                        <label for="grandtotal"><?php echo lang("Localize.amount") ?> <?php echo lang("Localize.to") ?> <?php echo lang("Localize.pay") ?></label>
                        <input type="text" name="grandtotal" id="grandtotal" class="form-control" value="<?php echo $rouondTripTotal ?? $grandtotal; ?>" autocomplete="off" readonly>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4 form-group" id="couponcode">
                        <label for="coupon"><?php echo lang("Localize.apply") ?> <?php echo lang("Localize.coupon") ?></label>
                        <input type="text" name="offerer" id="coupon" class="form-control" placeholder="<?php echo lang("Localize.coupon") ?>">
                        <small id="couponmessage"></small>
                    </div>

                    <?php if ($discount == 1) : ?>
                        <div class="col-4 form-group" id="less">
                            <label for="discount"><?php echo lang("Localize.discount") ?> </label>
                            <input type="text" name="discount" id="discount" class="form-control" value="0">
                        </div>
                    <?php else : ?>
                        <div class="col-4 form-group" id="less">
                            <label for="discount"><?php echo lang("Localize.discount") ?> </label>
                            <input type="text" name="discount" id="discount" class="form-control" value="0" readonly>
                        </div>
                    <?php endif ?>

                    <div class="col-4 form-group" id="partial">
                        <label for="partialpay"><?php echo lang("Localize.partial") ?> <?php echo lang("Localize.payment") ?> <?php echo lang("Localize.amount") ?> </label>
                        <input type="number" name="partialpay" id="partialpay" class="form-control" max="<?php echo $rouondTripTotal ?? $grandtotal; ?>" placeholder="<?php echo lang("Localize.partial") ?> <?php echo lang("Localize.payment") ?> <?php echo lang("Localize.amount") ?>" aria-label="Partial Payment Amount">
                    </div>

                    <div class="col-4 form-group" id="detailpay">
                        <label for="paydetail"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.details") ?></label>
                        <input type="text" name="paydetail" class="form-control" value="<?php echo old('paydetail') ?>" placeholder="<?php echo lang("Localize.payment") ?> <?php echo lang("Localize.details") ?>" aria-label="Payment Detail">
                    </div>
                </div>
            </div>

            <div class="text-danger">
                <?php if (isset($validation)) : ?>
                    <?= $validation->listErrors(); ?>
                <?php endif ?>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success" id="submit-booking"><?php echo lang("Localize.submit") ?></button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php echo $this->endSection() ?>

<?php echo $this->section('js') ?>
<script src="<?php echo base_url('public/js/booking.js'); ?>"></script>
<script src="<?php echo base_url('public/js/ajax.js'); ?>"></script>
<?php echo $this->endSection() ?>