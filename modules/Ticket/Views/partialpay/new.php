<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('create-partialpaid')) ?>" id="MaxtimeForm" onsubmit="return this.checkValidity()" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>

                <input type="hidden" name="booking_id" id="booking_id" value="<?php echo  $ticket->booking_id; ?>">
                <input type="hidden" name="trip_id" id="trip_id" value="<?php echo $ticket->trip_id; ?>">
                <input type="hidden" name="subtrip_id" id="subtrip_id" value="<?php echo $ticket->subtrip_id; ?>">
                <input type="hidden" name="passanger_id" id="passanger_id" value="<?php echo $ticket->passanger_id; ?>">
                <input type="hidden" name="ticket_id" id="passanger_id" value="<?php echo $ticket->id; ?>">

                <div class="col-2" id="payment_method">
                    <label for="pay_method"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.type") ?> <abbr title="Required field">*</abbr></label>
                    <select class="form-select" name="pay_method" id="pay_method" required>

                        <?php foreach ($paymethod as $paymethodvalue) : ?>
                            <option value="<?php echo $paymethodvalue->id ?>"><?php echo $paymethodvalue->name ?></option>
                        <?php endforeach ?>

                    </select>
                </div>

                <div class="col-2" id="grand">
                    <label for="grandtotal"><?php echo lang("Localize.amount") ?> <?php echo lang("Localize.to") ?> <?php echo lang("Localize.pay") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" name="grandtotal" id="grandtotal" class="form-control" value="<?php echo $amountToPay ?>" readonly>
                </div>

                <div class="col-3" id="partial">
                    <label for="paidamount"><?php echo lang("Localize.partial") . ' ' . lang("Localize.payment") . ' ' . lang("Localize.amount") ?> <abbr title="Required field">*</abbr></label>
                    <input type="number" name="paidamount" id="paidamount" class="form-control" placeholder="<?php echo lang("Localize.partial") . ' ' . lang("Localize.payment") . ' ' . lang("Localize.amount") ?>" max="<?php echo $amountToPay ?>" autocomplete="off" required />
                </div>

                <div class="col-3" id="detailpay">
                    <label for="paydetail"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.details") ?></label>
                    <input type="text" name="paydetail" class="form-control" value="<?php echo old('paydetail') ?>" placeholder="Payment Detail" aria-label="Payment Detail">
                </div>

                <div class="col-2">
                    <br>
                    <button type="submit" class=" btn btn-success"><?php echo lang("Localize.submit") ?></button>
                </div>

                <div class="text-danger">
                    <?php if (isset($validation)) : ?>
                        <?php echo $validation->listErrors(); ?>
                    <?php endif ?>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h6 class="fs-17 fw-semi-bold mb-0"><?php echo lang("Localize.payment") . ' ' . lang("Localize.details"); ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table display table-bordered table-striped table-hover basic" id="paydetaillist">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.type") ?></th>
                            <th scope="col"><?php echo lang("Localize.amount") ?></th>
                            <th scope="col"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.details") ?></th>
                            <th scope="col"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.create_by") ?></th>
                            <th scope="col"><?php echo lang("Localize.date") ?></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($allPayment as $key =>  $value) : ?>
                            <tr>
                                <th scope="row"><?php echo $key + 1; ?></th>
                                <td><?php echo $value->name ?: $value->gatewayname; ?></td>
                                <td><?php echo $value->paidamount; ?></td>
                                <td><?php echo $value->payment_detail; ?></td>
                                <td><?php echo $value->first_name; ?> <?php echo $value->last_name; ?></td>
                                <td><?php echo $value->date; ?></td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php echo $this->include('common/datatable_default_lang_change') ?>
<?php echo $this->endSection() ?>