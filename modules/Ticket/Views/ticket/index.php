<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('css') ?>
    <link href="<?php echo base_url('public/plugins/select2/select2.min.css'); ?>" rel="stylesheet" />
<?php echo $this->endSection() ?>

<?php echo $this->section('content') ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">

                    <form action="<?php echo base_url(route_to('findtrip-ticket')) ?>" id="findtrip" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                        <?php echo $this->include('common/security') ?>
                        <?php echo $this->include($filterpath . '\ticket\filter\find') ?>

                        <?php if (isset($validation)) : ?>
                            <?= $validation->listErrors(); ?>
                        <?php endif ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="baseurl" name="baseurl" value="<?php echo base_url() ?>">

    <div class="mt-3 card">
        <div class="card-body">
            <h4 class="book-title mb-4"><?php echo lang("Localize.showing_result_for") ?>: <span><?php echo $filterjourneydate ?> ( <?php echo $triptype ?> )</span></h4>
        
            <?php if (!empty($trips)) : ?>
                <input type="hidden" id="tax_type" name="tax_type" value="<?php echo $taxtype; ?>">
        
                <?php foreach ($trips as $tripValue) : ?>
                    <div class="card-body Regular search-trip-single shadow-sm border mb-4">
                        <div class="row">
                            <div class="col text-center">
                                <h6><?php echo $tripValue->company_name; ?></h6>
                                <small><?php echo $tripValue->company; ?></small>
                            </div>
        
                            <div class="col text-center">
                                <h6>
                                    <?php foreach ($location as $locationvalue) : ?>
                                        <?php if ($locationvalue->id == $tripValue->pick_location_id) : ?>
                                            <?php echo $locationvalue->name; ?>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </h6>
                                <small><?php echo $tripValue->start_time; ?></small>
                            </div>
        
                            <div class="col text-center">
                                <h6>
                                    <?php foreach ($location as $locationvalue) : ?>
                                        <?php if ($locationvalue->id == $tripValue->drop_location_id) : ?>
                                            <?php echo $locationvalue->name; ?>
                                        <?php endif ?>
                                    <?php endforeach ?>
        
                                </h6>
                                <small><?php echo $tripValue->end_time; ?></small>
                            </div>

                            <div class="col text-center">
                                <h6 class=""><?php echo lang("Localize.distance") ?> ( <small class="text-center"><?php echo $tripValue->journey_hour; ?> hr</small>)</h6>
                                <span class="text-center"><?php echo $tripValue->distance; ?> km</span>
                            </div>
        
                            <div class="col text-center">
                                <h6><?php echo lang("Localize.fair") ?></h6>
                                <small><?php echo $tripValue->adult_fair; ?></small>
                            </div>
        
                            <div class="col text-center">
                                <h6><?php echo lang("Localize.seat") ?></h6>
                                <small><?php echo (int) $tripValue->total_seat + (int) $tripValue->last_seat ?></small>
                            </div>
        
                            <div class="col text-center toggle-seat-select" data-bs-toggle="collapse" href="#expand_<?php echo $tripValue->id; ?>" role="button" aria-expanded="false" aria-controls="expand_<?php echo $tripValue->id; ?>">
                                <button class="btn btn-success" id="<?php echo $tripValue->id; ?>" type="button" tabindex="1"><?php echo lang("Localize.details") ?></button>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="collapse" id="expand_<?php echo $tripValue->id; ?>">
                                <div class="card card-body booking-area">
                                    <div id="dynamicbooking_<?php echo $tripValue->id; ?>">
                                        <div class="row mt-3">
                                            <div class="col-4" id="seat_<?php echo $tripValue->id; ?>"></div>
                                            <div class="col-8" id="form_<?php echo $tripValue->id; ?>"></div>
                                        </div>
                                        <hr>
                                        <div class="col-12 text-center">
                                            <a href="#" onclick="formsubmit(this,<?php echo $tripValue->id; ?>)" class="btn btn-success btn-block btn-process-book" tabindex="1"><?php echo lang("Localize.process_book") ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
        
            <?php else : ?>
                <h3><?php echo lang("Localize.no_trip_found") ?></h3>
                
                <?php if ($in_holiday) : ?>
                    <h3><?php echo 'Some trips are in holiday!' ?></h3>
                <?php endif ?>
                
                <?php if ($to_open) : ?>
                    <h3><?php echo 'Some trips yet not started!' ?></h3>
                <?php endif ?>
            <?php endif ?>
        </div>

        <div class="card-body">
            <?php if($you_may_like) :  ?>
                <h4 class="book-title mb-4">Alternate journey approach :</h4>
                
                <?php foreach ($you_may_like as $tripValue) : ?>
                    <div class="card-body Regular search-trip-single shadow-sm border mb-4">
                        <div class="row">
                            <div class="col text-center">
                                <h6><?php echo $tripValue->company_name; ?></h6>
                                <small><?php echo $tripValue->company; ?></small>
                            </div>

                            <div class="col text-center">
                                <h6>
                                    <?php foreach ($location as $locationvalue) : ?>
                                        <?php if ($locationvalue->id == $tripValue->pick_location_id) : ?>
                                            <?php echo $locationvalue->name; ?>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </h6>
                                <small><?php echo $tripValue->start_time; ?></small>
                            </div>

                            <div class="col text-center">
                                <h6>
                                    <?php foreach ($location as $locationvalue) : ?>
                                        <?php if ($locationvalue->id == $tripValue->drop_location_id) : ?>
                                            <?php echo $locationvalue->name; ?>
                                        <?php endif ?>
                                    <?php endforeach ?>

                                </h6>
                                <small><?php echo $tripValue->end_time; ?></small>
                            </div>

                            <div class="col text-center">
                                <h6 class=""><?php echo lang("Localize.distance") ?> ( <small class="text-center"><?php echo $tripValue->journey_hour; ?> hr</small>)</h6>
                                <span class="text-center"><?php echo $tripValue->distance; ?> km</span>
                            </div>

                            <div class="col text-center">
                                <h6><?php echo lang("Localize.fair") ?></h6>
                                <small><?php echo $tripValue->adult_fair; ?></small>
                            </div>

                            <div class="col text-center">
                                <h6><?php echo lang("Localize.seat") ?></h6>
                                <small><?php echo (int) $tripValue->total_seat + (int) $tripValue->last_seat ?></small>
                            </div>

                            <div class="col text-center toggle-seat-select" data-bs-toggle="collapse" href="#expand_<?php echo $tripValue->id; ?>" role="button" aria-expanded="false" aria-controls="expand_<?php echo $tripValue->id; ?>">
                                <button class="btn btn-success" id="<?php echo $tripValue->id; ?>" type="button" tabindex="1"><?php echo lang("Localize.details") ?></button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="collapse" id="expand_<?php echo $tripValue->id; ?>">
                                <div class="card card-body booking-area">
                                    <div id="dynamicbooking_<?php echo $tripValue->id; ?>">
                                        <div class="row mt-3">
                                            <div class="col-4" id="seat_<?php echo $tripValue->id; ?>"></div>
                                            <div class="col-8" id="form_<?php echo $tripValue->id; ?>"></div>
                                        </div>
                                        <hr>
                                        <div class="col-12 text-center">
                                            <a href="#" onclick="formsubmit(this,<?php echo $tripValue->id; ?>)" class="btn btn-success btn-block btn-process-book" tabindex="1"><?php echo lang("Localize.process_book") ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php endif; ?>
        
            <div id="hidden">
                <form action="<?php echo base_url(route_to('booking-ticket')) ?>" id="booking" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                    <?php echo $this->include('common/security') ?>
        
                    <input type="hidden" id="subtripId" name="subtripId">
                    <input type="hidden" id="seatnumbers" name="seatnumbers">
                    <input type="hidden" id="aseat" name="aseat">
                    <input type="hidden" id="cseat" name="cseat">
                    <input type="hidden" id="spseat" name="spseat">
                    <input type="hidden" id="totalprice" name="totalprice">
                    <input type="hidden" id="tax" name="tax">
                    <input type="hidden" id="grandtotal" name="grandtotal">
                    <input type="hidden" id="pickstand" name="pickstand">
                    <input type="hidden" id="dropstand" name="dropstand">
        
                    <input type="hidden" id="journeydate" name="journeydate" value="<?php echo $filterjourneydate ?>">
                    <input type="hidden" id="returndate" name="returndate" value="<?php echo $filterreturndate ?>">
        
        
                    <?php if (!empty($totalseat)) : ?>
                        <input type="hidden" id="totalseat" name="totalseat" value="<?php echo $totalseat ?>">
                    <?php endif ?>
        
                    <div class="text-danger">
                        <?php if (isset($validation)) : ?>
                            <?= $validation->listErrors(); ?>
                        <?php endif ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php echo $this->endSection() ?>

<?php echo $this->section('js') ?>
    <script src="<?php echo base_url('public/plugins/select2/select2.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/booking.js'); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var quickSeatSelectString = '';

            $('#pick_location_id').on('select2:selecting', function () {
                $('#drop_location_id').select2('open');
            });

            $('#drop_location_id').on('select2:select', function () {
                $('#search-ticket').focus();
            });

            $(document).on('keydown', function(event) {
                if (!event.ctrlKey && !event.altKey && event.shiftKey) {
                    var $openedSubtrip = $('.collapse.show');

                    if ($openedSubtrip.length) {
                        if (event.key == 'Enter') {
                            // SHIFT + ENTER Pressed
                            $('.btn-process-book', $openedSubtrip).trigger('click');
                            event.preventDefault();
                            return true;
                        }

                        if (event.key == ' ') {
                            // SHIFT + SPACE Pressed
                            $('.to-select').each(function () {
                                $(this).trigger('click');
                            });

                            quickSeatSelectString = '';
                            event.preventDefault();
                        } 
                        
                        if (/^[A-Z]$/.test(event.key)) {
                            // SHIFT + ALPHABET Pressed
                            quickSeatSelectString += event.key.toLowerCase();
                            event.preventDefault();
                        } else if (/^Digit[1-9]$/.test(event.code) || /^Numpad[1-9]$/.test(event.code)) {
                            // SHIFT + NUMERIC Pressed
                            quickSeatSelectString += event.code.slice(-1);
                            event.preventDefault();
                        }

                        $('.col-4 ul li div', $openedSubtrip).each(function () {
                            var seatName = $(this).data('seatnumber');

                            if (quickSeatSelectString && seatName.toLowerCase().startsWith(quickSeatSelectString.toLowerCase())) {
                                $(this).addClass('to-select').css('border', '1px dashed');
                            } else {
                                $(this).removeClass('to-select').css('border', 'none');
                            }
                        });

                        if (!$('.to-select').length) {
                            quickSeatSelectString = '';
                        }                       
                    }
                }
            });
        });
    </script>
<?php echo $this->endSection() ?>