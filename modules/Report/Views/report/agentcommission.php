<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
<?php echo $this->include('common/message') ?>

<div class="card mb-4">
    <div class="card-body">
        <div class="sp3 mb-5">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo base_url(route_to('commissiondata-report')) ?>" id="agentCommissionform" method="post">
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

        <div class="table-responsive mt-3">
            <table class="table display table-bordered basic" id="commissionlist">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"><?php echo lang("Localize.agent") ?> <?php echo lang("Localize.name") ?></th>
                        <th scope="col"><?php echo lang("Localize.booking") ?> <?php echo lang("Localize.id") ?></th>
                        <th scope="col"><?php echo lang("Localize.trip") ?></th>
                        <th scope="col"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.amount") ?></th>
                        <th scope="col"><?php echo lang("Localize.agent") ?> <?php echo lang("Localize.commission") ?></th>
                        <th scope="col"><?php echo lang("Localize.commission") ?> <?php echo lang("Localize.rate") ?></th>
                        <th scope="col"><?php echo lang("Localize.details") ?></th>
                        <th scope="col"><?php echo lang("Localize.date") ?></th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($commission as $kye => $commissionvalue) : ?>
                        <tr>
                            <th scope="row"><?php echo $kye + 1; ?></th>
                            <td><?php echo $commissionvalue->first_name . " " . $commissionvalue->last_name; ?></td>
                            <td><?php echo $commissionvalue->booking_id; ?></td>
                            <td><?php echo $commissionvalue->subtrip_id; ?></td>
                            <td class="text-end"><?php echo $commissionvalue->grandtotal; ?></td>
                            <td class="text-end"><?php echo $commissionvalue->commissionamount; ?></td>
                            <td><?php echo $commissionvalue->rate; ?>%</td>
                            <td><?php echo $commissionvalue->detail; ?></td>
                            <td><?php echo $commissionvalue->date; ?></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
                <tfoot>
                    <tr>
                        <th scope="row" class="text-end" colspan="4"><?php echo lang("Localize.total") ?></th>
                        <th class="text-end"><?php echo $currency_symbol; ?> <?php echo array_sum(array_column($commission, 'grandtotal')); ?></th>
                        <th class="text-end"><?php echo $currency_symbol; ?> <?php echo array_sum(array_column($commission, 'commissionamount')); ?></th>
                        <th colspan="3"></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<?php echo $this->include('common/datatable_default_lang_change') ?>
<?php echo $this->endSection() ?>