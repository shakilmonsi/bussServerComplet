<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url('public/css/bootstrap/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('public/js/jquery3.6.0.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('public/css/posinvoice.css'); ?>" type="text/css">
</head>

<body>
    <?php
    $sessiondata = \Config\Services::session();
    ?>
    <div class="page-wrapper">
        <div class="invoice-card" id="PrintMe">

            <div class="invoice-head">

                <div class="item-info">
                    <h5 class="item-title"><?php echo  $sessiondata->get('logotext'); ?></h5>
                    <p class="item-title"><?php echo $from; ?> (<small><?php echo $trip_start_time; ?></small>) - <?php echo $to; ?> (<small><?php echo $trip_end_time; ?></small>)</p>
                    <h5 class="item-title"><?php echo lang("Localize.booking") ?> <?php echo lang("Localize.id") ?> : <?php echo $ticket->booking_id; ?></h5>

                    <span class="item-title">
                        <?php echo lang("Localize.payment") ?> <?php echo lang("Localize.status") ?> : <?php echo $ticket->payment_status; ?>
                    </span>
                </div>


                <div class="date-info">

                    <div class="row">

                        <div class="col-sm-6 text-capitalize" align="left">
                            <?php echo lang("Localize.trip") ?> : <?php echo $travelerPick; ?> - <?php echo $travelerDrop; ?>
                        </div>
                        <div class="col-sm-6" align="left">
                            <?php echo lang("Localize.pick_up") ?> <?php echo lang("Localize.location") ?> : <?php foreach ($pickdrop as $pickvalue) : ?>
                                <?php if ($pickvalue->pickdropid == $ticket->pick_stand_id) : ?>
                                    <?php echo  $pickvalue->name; ?> (<small><?php echo  $pickvalue->time; ?></small>)
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>
                        <div class="col-sm-6" align="left">
                            <?php echo lang("Localize.drop") ?> <?php echo lang("Localize.location") ?> : <?php foreach ($pickdrop as $pickvalue) : ?>
                                <?php if ($pickvalue->pickdropid == $ticket->drop_stand_id) : ?>
                                    <?php echo  $pickvalue->name; ?> (<small><?php echo  $pickvalue->time; ?></small>)
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>

                    </div>

                </div>

                <div class="date-info">
                    <div class="row">
                        <div class="col-sm-6" align="left">
                            <?php echo lang("Localize.book_time") ?> : <?php echo (!empty($ticket->created_at) ? date("d-m-Y h:i:s A", strtotime($ticket->created_at)) : null) ?>
                        </div>
                        <div class="col-sm-6" align="left">
                            <?php echo lang("Localize.journey") ?> <?php echo lang("Localize.time") ?> : <?php echo (!empty($ticket->journeydata) ? date("d-m-Y", strtotime($ticket->journeydata)) : null) ?>
                        </div>

                    </div>
                    <hr>
                </div>


            </div>

            <div class="invoice-details">
                <div class="invoice-list">
                    <div class="invoice-data">
                        <div class="row-data">
                            <div class="item-info">
                                <p class="item-title"><span class="bolder"><?php echo lang("Localize.name") ?> :</span><span><?php echo $ticket->first_name; ?> <?php echo $ticket->last_name; ?></span></p>
                                <p class="item-title"><span class="bolder"><?php echo lang("Localize.mobile") ?> :</span><span><?php echo $ticket->login_mobile ?></span></p>
                                <p class="item-title"><span class="bolder"><?php echo lang("Localize.email") ?> :</span><span><?php echo $ticket->login_email ?></span></p>
                                <p class="item-title"><span class="bolder"><?php echo lang("Localize.facility") ?> :</span><span><?php echo $facility ?></span></p>
                            </div>
                        </div>

                        <div class="row-data">
                            <div class="pack-info">
                                <div class="item-title">
                                    <p class="bolder"><?php echo lang("Localize.seat") ?> <?php echo lang("Localize.number") ?> </p>
                                    <p><?php echo $ticket->seatnumber  ?> = <?php echo $ticket->totalseat  ?></p>
                                </div>

                                <div class="item-title text-end">
                                    <p class="bolder"><?php echo lang("Localize.amount") ?> </p>
                                    <p> <?php echo  $sessiondata->get('currency_symbol'); ?> <?php echo $ticket->price ?></p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="invoice-details">

                <div class="row-data">

                    <div class="item-info">
                        <h6 class="item-title"><?php echo lang("Localize.discount") ?></h6>
                    </div>

                    <div class="">
                        <h6 class="item-title"><?php echo  $sessiondata->get('currency_symbol'); ?> <?php echo $ticket->discount ?></h6>
                    </div>
                </div>

                <?php if ((!empty($ticket->roundtrip_discount)) && ($ticket->roundtrip_discount > 0)) : ?>
                    <div class="row-data">

                        <div class="item-info">
                            <?php echo lang("Localize.discount_round_trip") ?>
                        </div>

                        <div class="">
                            <h6 class="item-title"><?php echo  $sessiondata->get('currency_symbol'); ?> <?php echo $ticket->roundtrip_discount ?></h6>
                        </div>
                    </div>
                <?php endif ?>

                <div class="row-data">

                    <div class="item-info">
                        <h6 class="item-title"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.tax") ?></h6>
                    </div>

                    <div class="">
                        <h6 class="item-title"> <?php echo  $sessiondata->get('currency_symbol'); ?> <?php echo $ticket->totaltax ?></h6>
                    </div>
                </div>

                <div class="row-data">

                    <div class="item-info">
                        <h6 class="item-title"><?php echo lang("Localize.grand") ?> <?php echo lang("Localize.total") ?></h6>
                    </div>

                    <div class="">
                        <h6 class="item-title"><?php echo  $sessiondata->get('currency_symbol'); ?> <?php echo $ticket->paidamount ?></h6>
                    </div>
                </div>

                <div class="row-data">

                    <div class="item-info">
                        <h6 class="item-title"><?php echo lang("Localize.due") ?></h6>
                    </div>

                    <div class="">
                        <h6 class="item-title"><?php echo  $sessiondata->get('currency_symbol'); ?> <?php echo $due ?></h6>
                    </div>
                </div>

            </div>


            <div class="invoice-footer">
                <div class="row-data">
                    <div class="item-info">
                        <small>

                            <br>
                            ** This is computer generated copy. No signature required.

                        </small>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>

<script src="<?php echo base_url('public/js/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        window.print();
    });
</script>

</html>