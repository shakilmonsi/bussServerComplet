<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php
    $sessiondata = \Config\Services::session();
    ?>

    <div class="card mb-4">
        <div class="card-body">

            <a target="_blank" href="<?php echo base_url(route_to('print-ticketinvoice', $ticket->booking_id)) ?>" class="btn btn-success btn-sm mb-2"><i class="fas fa-print"></i></a>
            <a target="_blank" href="<?php echo base_url(route_to('posinvoice-ticketinvoice', $ticket->booking_id)) ?>" class="btn btn-primary btn-sm mb-2"> <?php echo lang("Localize.pos") ?> <?php echo lang("Localize.invoice") ?> </a>
            <h6 class="text-center"><?php echo  $sessiondata->get('logotext'); ?></h6>

            <h6 class="text-center"> <?php echo $from; ?> (<small><?php echo $trip_start_time ?></small>) - <?php echo $to; ?> (<small><?php echo $trip_start_time; ?></small>) </h6>

            <div class="table-responsive">
                <table class="table table-bordered" id="">

                    <tbody>

                        <tr>
                            <td>
                                <b><?php echo lang("Localize.pick_up") ?> <?php echo lang("Localize.location") ?> : </b>
                                <?php foreach ($pickdrop as $pickvalue) : ?>
                                    <?php if ($pickvalue->pickdropid == $ticket->pick_stand_id) : ?>
                                        <?php echo  $pickvalue->name; ?> (<small><?php echo  $pickvalue->time; ?></small>)
                                    <?php endif ?>
                                <?php endforeach ?>
                            </td>
                            <td>
                                <b><?php echo lang("Localize.drop") ?> <?php echo lang("Localize.location") ?> : </b>
                                <?php foreach ($pickdrop as $pickvalue) : ?>
                                    <?php if ($pickvalue->pickdropid == $ticket->drop_stand_id) : ?>
                                        <?php echo  $pickvalue->name; ?> (<small><?php echo  $pickvalue->time; ?></small>)
                                    <?php endif ?>
                                <?php endforeach ?>
                            </td>
                            <td>
                                <b><?php echo lang("Localize.booking") ?> <?php echo lang("Localize.date") ?> :</b>
                                <?php echo date("Y-F-d", strtotime($ticket->bookingdate)); ?>

                            </td>
                            <td>
                                <b><?php echo lang("Localize.journey") ?> <?php echo lang("Localize.date") ?> :</b>
                                <?php echo date("Y-F-d", strtotime($ticket->journeydata)); ?>
                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col text-start">
                    <h6><b><?php echo lang("Localize.passanger") ?> <?php echo lang("Localize.name") ?> : </b><?php echo $ticket->first_name; ?> <?php echo $ticket->last_name; ?></h6>
                    <h6><b><?php echo lang("Localize.mobile") ?> : </b> <?php echo $ticket->login_mobile; ?> </h6>
                    <h6><b><?php echo lang("Localize.email") ?> : </b> <?php echo $ticket->login_email; ?> </h6>
                    <h6><b><?php echo lang("Localize.facility") ?> : </b><?php echo $facility; ?></h6>

                </div>
                <div class="col text-end">
                    <h6><b><?php echo lang("Localize.booking") ?> <?php echo lang("Localize.id") ?> : </b><?php echo $ticket->booking_id; ?></h6>
                    <h6><b><?php echo lang("Localize.trip") ?> <?php echo lang("Localize.start") ?> : </b>
                        <?php echo $travelerPick; ?>
                    </h6>
                    <h6><b><?php echo lang("Localize.trip") ?> <?php echo lang("Localize.end") ?> : </b>
                        <?php echo $travelerDrop; ?>
                    </h6>
                    <h6><b><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.status") ?> : </b> <?php echo $ticket->payment_status; ?> </h6>

                </div>

            </div>


            <div class="table-responsive">
                <table class="table table-bordered" id="">
                    <thead>
                        <tr>
                            <th scope="col"><?php echo lang("Localize.adult") ?> </th>
                            <th scope="col"><?php echo lang("Localize.child") ?> </th>
                            <th scope="col"><?php echo lang("Localize.special") ?> </th>
                            <th scope="col"><?php echo lang("Localize.seat") ?> <?php echo lang("Localize.number") ?> </th>
                            <th scope="col"><?php echo lang("Localize.amount") ?> </th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <?php echo  $ticket->adult; ?>
                            </td>
                            <td>
                                <?php echo  $ticket->chield; ?>
                            </td>
                            <td>
                                <?php echo  $ticket->special; ?>
                            </td>
                            <td>
                                <?php echo  $ticket->seatnumber; ?>
                            </td>
                            <td class="text-end">
                                <?php echo  $sessiondata->get('currency_symbol'); ?> <?php echo  round($ticket->price, 2); ?>
                            </td>

                        </tr>

                        <tr>
                            <td colspan="4" class="text-end">
                                <?php echo lang("Localize.discount") ?>
                            </td>
                            <td class="text-end">
                                <?php echo  $sessiondata->get('currency_symbol'); ?> <?php echo  $ticket->discount; ?>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="4" class="text-end">
                                <?php echo lang("Localize.total") ?> <?php echo lang("Localize.tax") ?>
                            </td>
                            <td class="text-end">
                                <?php echo  $sessiondata->get('currency_symbol'); ?> <?php echo  $ticket->totaltax; ?>
                            </td>
                        </tr>

                        <?php if ((!empty($ticket->roundtrip_discount)) && ($ticket->roundtrip_discount > 0)) : ?>
                            <tr>
                                <td colspan="4" class="text-end">
                                    <?php echo lang("Localize.discount_round_trip") ?>
                                </td>
                                <td class="text-end">
                                    <?php echo  $sessiondata->get('currency_symbol'); ?> <?php echo $ticket->roundtrip_discount; ?>
                                </td>
                            </tr>
                        <?php endif ?>
                        <tr>
                            <td colspan="4" class="text-end">
                                <?php echo lang("Localize.grand") ?> <?php echo lang("Localize.total") ?>
                            </td>
                            <td class="text-end">
                                <?php echo  $sessiondata->get('currency_symbol'); ?> <?php echo  $ticket->paidamount; ?>
                            </td>
                        </tr>

                        <?php if ($ticket->payment_status != "paid") : ?>

                            <tr>
                                <td colspan="4" class="text-end">
                                    <?php echo lang("Localize.total") ?> <?php echo lang("Localize.paid") ?>
                                </td>
                                <td class="text-end">
                                    <?php echo  $sessiondata->get('currency_symbol'); ?> <?php echo ((int)$ticket->paidamount - (int)$due); ?>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="4" class="text-end">
                                    <?php echo lang("Localize.total") ?> <?php echo lang("Localize.due") ?>
                                </td>
                                <td class="text-end">
                                    <?php echo  $sessiondata->get('currency_symbol'); ?> <?php echo  $due; ?>
                                </td>
                            </tr>

                        <?php endif ?>

                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-12">
                    <small><?php echo  $policy; ?></small>
                </div>

            </div>
        </div>
    </div>
<?php echo $this->endSection() ?>