<div class="row g-3">
    <div class="col-sm-6 col-md-12 col-lg-6 col-xl-3 d-flex">
        <div class="info-box d-flex position-relative rounded flex-fill w-100 overflow-hidden gradient-five">
            <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l3 opacity-3" style="width: 8rem; height: 8rem;"></div>
            <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l2 opacity-5" style="width: 6.5rem; height: 6.5rem;"></div>
            <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l1 opacity-5" style="width: 5rem; height: 5rem;"></div>
            <span class="info-box-icon d-flex align-self-center text-center">

                <img src="<?php echo base_url() . '/public/image/icone/img/icon/png/supplier.png' ?>" alt="" height="64" width="64">
            </span>
            <div class="info-box-content d-flex flex-column justify-content-center">
                <span class="info-box-text fw-bold fs-17px"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.trip") ?></span>
                <span class="info-box-number d-block fw-black counter"><?php echo $todaytrip ?></span>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <div class="progress-description fs-14"><i class="fa fa-caret-down"></i> <?php echo lang("Localize.today") ?></div>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-sm-6 col-md-12 col-lg-6 col-xl-3 d-flex">
        <div class="info-box d-flex position-relative rounded flex-fill w-100 overflow-hidden gradient-six"">
                          <div class=" position-br mb-n5 mr-n5 radius-round bgc-purple-l3 opacity-3" style="width: 8rem; height: 8rem;"></div>
        <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l2 opacity-5" style="width: 6.5rem; height: 6.5rem;"></div>
        <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l1 opacity-5" style="width: 5rem; height: 5rem;"></div>
        <span class="info-box-icon d-flex align-self-center text-center">
            <img src="<?php echo base_url() . '/public/image/icone/img/icon/png/smartphone.png' ?>" alt="" height="64" width="64">

        </span>
        <div class="info-box-content d-flex flex-column justify-content-center">
            <span class="info-box-text fw-bold fs-17px"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.ticket_booking") ?></span>
            <span class="info-box-number d-block fw-black counter"><?php echo $todaybooking; ?> </span>
            <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
            </div>
            <div class="progress-description fs-14"><i class="fa fa-caret-down"></i> <?php echo lang("Localize.today") ?></div>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>




<div class="col-sm-6 col-md-12 col-lg-6 col-xl-3 d-flex">
    <div class="info-box d-flex position-relative rounded flex-fill w-100 overflow-hidden gradient-seven">
        <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l3 opacity-3" style="width: 8rem; height: 8rem;"></div>
        <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l2 opacity-5" style="width: 6.5rem; height: 6.5rem;"></div>
        <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l1 opacity-5" style="width: 5rem; height: 5rem;"></div>
        <span class="info-box-icon d-flex align-self-center text-center">
            <img src="<?php echo base_url() . '/public/image/icone/img/icon/png/choices.png' ?>" width="64">

        </span>
        <div class="info-box-content d-flex flex-column justify-content-center">
            <span class="info-box-text fw-bold fs-17px"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.booking") ?> <?php echo lang("Localize.amount") ?></span>
            <span class="info-box-number d-block fw-black counter"><?php echo $totalmoney; ?></span>
            <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
            </div>
            <div class="progress-description fs-14"><i class="fa fa-caret-down"></i> <?php echo lang("Localize.today") ?></div>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->
<div class="col-sm-6 col-md-12 col-lg-6 col-xl-3 d-flex">
    <div class="info-box d-flex position-relative rounded flex-fill w-100 overflow-hidden gradient-one">
        <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l3 opacity-3" style="width: 8rem; height: 8rem;"></div>
        <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l2 opacity-5" style="width: 6.5rem; height: 6.5rem;"></div>
        <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l1 opacity-5" style="width: 5rem; height: 5rem;"></div>
        <span class="info-box-icon d-flex align-self-center text-center">
            <img src=" <?php echo base_url() . '/public/image/icone/img/icon/png/choices.png' ?>" width="64">

        </span>
        <div class="info-box-content d-flex flex-column justify-content-center">
            <span class="info-box-text fw-bold fs-17px"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.passanger") ?></span>
            <span class="info-box-number d-block fw-black counter"><?php echo $totalpassanger; ?></span>
            <div class="progress">
                <div class="progress-bar w-75"></div>
            </div>
            <div class="progress-description fs-14"><i class="fa fa-caret-down"></i> <?php echo lang("Localize.today") ?></div>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>



<script type="text/javascript">
        var incomeLabel = "<?php echo lang('Localize.income'); ?>";
        var expenseLabel = "<?php echo lang('Localize.expense'); ?>";
        var saturday = "<?php echo lang('Localize.saturday'); ?>";
        var sunday = "<?php echo lang('Localize.sunday'); ?>";
        var monday = "<?php echo lang('Localize.monday'); ?>";
        var tuesday = "<?php echo lang('Localize.tuesday'); ?>";
        var wednesday = "<?php echo lang('Localize.wednesday'); ?>";
        var thursday = "<?php echo lang('Localize.thursday'); ?>";
        var friday = "<?php echo lang('Localize.friday'); ?>";
        var difference = "<?php echo lang('Localize.difference'); ?>";
        var totalPaid = "<?php echo lang('Localize.total').' '.lang('Localize.paid'); ?>";
        var totalExpece = "<?php echo lang('Localize.total').' '.lang('Localize.expense'); ?>";
        var january = "<?php echo lang('Localize.january'); ?>";
        var february = "<?php echo lang('Localize.february'); ?>";
        var march = "<?php echo lang('Localize.march'); ?>";
        var april = "<?php echo lang('Localize.april'); ?>";
        var may = "<?php echo lang('Localize.may'); ?>";
        var june = "<?php echo lang('Localize.june'); ?>";
        var july = "<?php echo lang('Localize.july'); ?>";
        var august = "<?php echo lang('Localize.august'); ?>";
        var september = "<?php echo lang('Localize.september'); ?>";
        var october = "<?php echo lang('Localize.october'); ?>";
        var november = "<?php echo lang('Localize.november'); ?>";
        var december = "<?php echo lang('Localize.december'); ?>";
        
</script>


<div class="col-xl-6 d-flex">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="fs-17 fw-semi-bold mb-0"> <?php echo lang("Localize.yearly") ?> <?php echo lang("Localize.income_expense") ?></h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div id="apexMixedChart"></div>
        </div>
    </div>
</div>




<div class="col-xl-6 d-flex">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="fs-17 fw-semi-bold mb-0"> <?php echo lang("Localize.weekly") ?> <?php echo lang("Localize.income_expense") ?> </h6>
                </div>

            </div>
        </div>
        <div class="card-body">
            <div id="timelineChart"></div>
        </div>
    </div>
</div>




<div class="col-xl-4 d-flex">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="fs-17 fw-semi-bold mb-0"><?php echo lang("Localize.payment_gateway") ?> <?php echo lang("Localize.tranjection") ?> </h6>
                </div>

            </div>
        </div>
        <div class="card-body">
            <div id="monochromeChart"></div>
        </div>
    </div>
</div>


<div class="col-xl-8 d-flex">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="fs-17 fw-semi-bold mb-0"><?php echo lang("Localize.monthly") ?> <?php echo lang("Localize.income_expense") ?> </h6>
                </div>

            </div>
        </div>
        <div class="card-body">
            <div id="lineChart"></div>
        </div>
    </div>
</div>

<div class="col-xl-6 d-flex">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="fs-17 fw-semi-bold mb-0"><?php echo lang("Localize.monthly") ?> <?php echo lang("Localize.ticket_booking") ?> </h6>
                </div>

            </div>
        </div>
        <div class="card-body">
            <div id="gradientLineArea"></div>
        </div>
    </div>
</div>


<?php if (session()->get('role_id') == 1) : ?>
    <div class="col-xl-6 d-flex">
        <div class="card flex-fill w-100">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="fs-17 fw-semi-bold mb-0"> <?php echo lang("Localize.agent") ?> <?php echo lang("Localize.ticket_booking") ?> </h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="barChart"></div>
            </div>
        </div>
    </div>
<?php endif; ?>






<input type="hidden" id="year" name="year" value="<?php echo $year  ?>">
<input type="hidden" id="yearincome" name="yearincome" value="<?php echo $income  ?>">
<input type="hidden" id="yearexpense" name="yearexpense" value="<?php echo $expense  ?>">

<input type="hidden" id="monthincome" name="monthincome" value="<?php echo $monthincome  ?>">
<input type="hidden" id="monthexpense" name="monthexpense" value="<?php echo $monthexpense  ?>">


<input type="hidden" id="weekincome" name="weekincome" value="<?php echo $weekincome  ?>">
<input type="hidden" id="weekexpense" name="weekexpense" value="<?php echo $weekexpense  ?>">

<input type="hidden" id="paylable" name="paylable" value="<?php echo $paylable  ?>">
<input type="hidden" id="paydata" name="paydata" value="<?php echo $paydata  ?>">

<input type="hidden" id="agentlable" name="agentlable" value="<?php echo $agentLable  ?>">
<input type="hidden" id="agentamount" name="agentamount" value="<?php echo $agentAmount  ?>">

<input type="hidden" id="ticketbook" name="ticketbook" value="<?php echo $bookticket  ?>">