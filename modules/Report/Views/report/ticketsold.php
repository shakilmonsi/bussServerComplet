<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
<?php echo $this->include('common/message') ?>

<div class="card mb-4">
    <div class="card-body">
        <div class="sp3 mb-5">
            <form action="<?php echo base_url(route_to('datatickesell-report')) ?>" id="ticketSoldReport" method="post">
                <?php echo $this->include('common/security') ?>
                <input type="hidden" name="baseurl" id="baseurl" value="<?php echo base_url() ?>" />
    
                <div class="row mb-2">
                    <div class="col-4">
                        <label for="trip_id" class="form-label"><?php echo lang("Localize.main") ?> <?php echo lang("Localize.trip") ?></label>
                        <select id="trip_id" name="trip_id" class="testselect1" required>
                            <option value="all"><?php echo lang("Localize.all") ?></option>
    
                            <?php foreach ($trip as $tripvalue) : ?>
                                <option value="<?php echo $tripvalue->tripid ?>">
                                    <?php echo $tripvalue->pickup_location_name ?> - <?php echo $tripvalue->drop_location_name  ?>
                                    (<?php echo $tripvalue->start_time ?> - <?php echo $tripvalue->end_time ?>)
                                </option>
                            <?php endforeach ?>
    
                        </select>
                    </div>
    
                    <div class="col-4">
                        <label for="subtrip_id" class="form-label"><?php echo lang("Localize.sub") ?> <?php echo lang("Localize.trip") ?></label>
                        <select id="subtrip_id" name="subtrip_id" class="form-select" required></select>
                    </div>
    
                    <div class="col-4">
                        <label for="type" class="form-label"><?php echo lang("Localize.ticket") ?> <?php echo lang("Localize.type") ?></label>
                        <select id="type" name="type" class="form-select" required>
                            <option value="normal"><?php echo lang("Localize.sold") ?> <?php echo lang("Localize.ticket") ?> </option>
                            <option value="refund"><?php echo lang("Localize.refund") ?> <?php echo lang("Localize.ticket") ?> </option>
                            <option value="cancel"><?php echo lang("Localize.cancel") ?> <?php echo lang("Localize.ticket") ?> </option>
                        </select>
                    </div>
                </div>
    
                <div class="row mb-3">
                    <div class="col-3">
                        <?php echo $this->include('common/filter/daterangefrom') ?>
                    </div>
                    <div class="col-3">
                        <?php echo $this->include('common/filter/daterangeto') ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
            </form>
        </div>

        <div class="table-responsive">
            <table class="table display table-bordered table-striped table-hover basic" id="ticketsoldreport">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"><?php echo lang("Localize.booking") ?> <?php echo lang("Localize.date") ?></th>
                        <th scope="col"><?php echo lang("Localize.booking") ?> <?php echo lang("Localize.id") ?> </th>
                        <th scope="col"><?php echo lang("Localize.journey") ?> <?php echo lang("Localize.date") ?></th>
                        <th scope="col"><?php echo lang("Localize.main") ?> <?php echo lang("Localize.trip") ?> </th>
                        <th scope="col"><?php echo lang("Localize.sub") ?> <?php echo lang("Localize.trip") ?> </th>
                        <th scope="col"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.seat") ?></th>
                        <th scope="col"><?php echo lang("Localize.seat") ?> <?php echo lang("Localize.number") ?></th>
                        <th scope="col"><?php echo lang("Localize.price") ?></th>
                        <th scope="col"><?php echo lang("Localize.discount") ?></th>
                        <th scope="col"><?php echo lang("Localize.tax") ?></th>
                        <th scope="col"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.price") ?></th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($ticket as $kye =>  $value) : ?>
                        <tr>
                            <th scope="row"><?php echo $kye + 1; ?></th>
                            <td><?php echo $value->date; ?></td>
                            <td><?php echo $value->booking_id; ?></td>
                            <td><?php echo date('Y-m-d', strtotime($value->journeydata)); ?></td>
                            <td>
                                <?php echo $value->pickup_location_name; ?> - <?php echo $value->drop_location_name; ?>
                                (<?php echo $value->start_time; ?> - <?php echo $value->end_time; ?>)
                            </td>
                            <td><?php echo $value->sub_pickup_location_name; ?> - <?php echo $value->sub_drop_location_name; ?></td>
                            <td class="text-end"><?php echo $value->totalseat; ?></td>
                            <td><?php echo $value->seatnumber; ?></td>
                            <td class="text-end"><?php echo $value->price; ?></td>
                            <td class="text-end"><?php echo $value->discount; ?></td>
                            <td class="text-end"><?php echo $value->totaltax; ?></td>
                            <td class="text-end"><?php echo $value->paidamount; ?></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
                <tfoot>
                    <tr>
                        <th scope="row" colspan="6" class="text-end"><?php echo lang("Localize.total") ?></th>
                        <td class="text-end"> <?php echo array_sum(array_column($ticket, 'totalseat'));; ?></td>
                        <td></td>
                        <td class="text-end"><?php echo $currency_symbol; ?> <?php echo array_sum(array_column($ticket, 'price'));; ?></td>
                        <td class="text-end"><?php echo $currency_symbol; ?> <?php echo array_sum(array_column($ticket, 'discount'));; ?></td>
                        <td class="text-end"><?php echo $currency_symbol; ?> <?php echo array_sum(array_column($ticket, 'totaltax'));; ?></td>
                        <td class="text-end"><?php echo $currency_symbol; ?> <?php echo array_sum(array_column($ticket, 'paidamount'));; ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<?php echo $this->include('common/datatable_default_lang_change') ?>
<?php echo $this->endSection() ?>