<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">
            <div class="sp3 mb-5">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url(route_to('sumedata-report')) ?>" id="agentCommissionform" method="post">
                            <?php echo $this->include('common/security') ?>
                            <div class="row mb-3">
                                <div class="col-3">
                                    <label for="agent_id" class="form-label"><?php echo lang("Localize.agent") ?></label>
                                    <select id="agent_id" name="agent_id" class="form-select" required>
                                        <?php if ($userType == 2) : ?>
                                            <?php foreach ($agentList as $agent) : ?>
                                                <option value="<?php echo $agent->id ?>"><?php echo $agent->first_name ?> <?php echo $agent->last_name ?> </option>
                                            <?php endforeach ?>
                                        <?php else : ?>
                                            <option value="all">All </option>
                                            <?php foreach ($agentList as $agent) : ?>
                                                <option value="<?php echo $agent->id ?>"><?php echo $agent->first_name ?> <?php echo $agent->last_name ?> </option>
                                            <?php endforeach ?>
                                        <?php endif ?>
                                    </select>
                                </div>
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
                </div>
            </div>

            <div class="table-responsive">
                <table class="table display table-bordered basic" id="printDiv">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo lang("Localize.main") ?> <?php echo lang("Localize.trip") ?> </th>
                            <th scope="col"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.seat") ?></th>
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
                                <td>
                                    <?php echo $value->pickup_location_name; ?> - <?php echo $value->drop_location_name; ?>
                                    (<?php echo $value->start_time; ?> - <?php echo $value->end_time; ?>)
                                </td>
                                <td class="text-end"><?php echo $value->totalseat; ?></td>
                                <td class="text-end"><?php echo $currency_symbol . " " . $value->price; ?></td>
                                <td class="text-end"><?php echo $currency_symbol . " " . $value->discount; ?></td>
                                <td class="text-end"><?php echo $currency_symbol . " " . $value->totaltax; ?></td>
                                <td class="text-end"><?php echo $currency_symbol . " " . $value->paidamount; ?></td>
                            </tr>
                        <?php endforeach ?>

                        <tr class="fw-bold">
                            <th scope="row" colspan="2" class="text-end"><?php echo lang("Localize.total") ?></th>
                            <td class="text-end"><?php echo array_sum(array_column($ticket, 'totalseat'));; ?></td>
                            <td class="text-end"><?php echo $currency_symbol . " " . array_sum(array_column($ticket, 'price')); ?></td>
                            <td class="text-end"><?php echo $currency_symbol . " " . array_sum(array_column($ticket, 'discount')); ?></td>
                            <td class="text-end"><?php echo $currency_symbol . " " . array_sum(array_column($ticket, 'totaltax')); ?></td>
                            <td class="text-end"><?php echo $currency_symbol . " " . array_sum(array_column($ticket, 'paidamount')); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <button class="btn btn-warning mt-3 mb-3" id="print"><i class="fas fa-print"></i> Print</button>
        </div>
    </div>
<?php echo $this->endSection() ?>

<?php echo $this->section('js') ?>
    <script src="<?php echo base_url('public/js/print.js'); ?>"></script>
    <script>
        $(document).ready(function() {
            $("#print").click(function() {
                //Hide all other elements other than printarea.
                $("#printDiv").print();
            });
        });
    </script>
<?php echo $this->endSection() ?>