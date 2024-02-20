<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('css') ?>
    <link href="<?php echo base_url('public/plugins/select2/select2.min.css'); ?>" rel="stylesheet" />
<?php echo $this->endSection() ?>

<?php echo $this->section('content') ?>
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <form action="<?php echo base_url(route_to('journeylist-findtrip-ticket')) ?>" id="findtrip" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                    <?php echo $this->include('common/security') ?>


                    <?php echo $this->include($filterpath . '\ticket\filter\journeylistfind') ?>

                    <?php if (isset($validation)) : ?>
                        <?= $validation->listErrors(); ?>
                    <?php endif ?>

                </form>
            </div>

            <input type="hidden" id="baseurl" name="baseurl" value="<?php echo base_url() ?>">
            <div class="mt-3 card">


                <?php if (!empty($alltriplist)) : ?>
                    <!-- TRUE -->


                    <?php foreach ($alltriplist as $kye => $tripValue) : ?>



                        <div class="card-body Regular shadow mt-4">
                            <div class="row">
                                <div class="col">
                                    <h6 class=""><?php echo $tripValue->company_name; ?></h6>
                                    <small><?php echo $tripValue->company; ?></small>
                                </div>

                                <div class="col">
                                    <h6>
                                        <?php foreach ($location as $locationvalue) : ?>
                                            <?php if ($locationvalue->id == $tripValue->pick_location_id) : ?>
                                                <?php echo $locationvalue->name; ?>
                                            <?php endif ?>
                                        <?php endforeach ?>

                                    </h6>
                                    <small><?php echo $tripValue->start_time; ?></small>
                                </div>
                                <div class="col">
                                    <h6><?php echo lang("Localize.details") ?> ( <small class="text-center"><?php echo $tripValue->journey_hour; ?> <?php echo lang("Localize.hr") ?></small>)</h6>

                                    <span class="text-center"><?php echo $tripValue->distance; ?> <?php echo lang("Localize.km") ?></span>
                                </div>
                                <div class="col">
                                    <h6>
                                        <?php foreach ($location as $locationvalue) : ?>
                                            <?php if ($locationvalue->id == $tripValue->drop_location_id) : ?>
                                                <?php echo $locationvalue->name; ?>
                                            <?php endif ?>
                                        <?php endforeach ?>

                                    </h6>
                                    <small><?php echo $tripValue->end_time; ?></small>
                                </div>
                                <div class="col">
                                    <h6><?php echo lang("Localize.fair") ?></h6>
                                    <small><?php echo $tripValue->adult_fair; ?></small>
                                </div>
                                <div class="col">
                                    <h6><?php echo lang("Localize.seat") ?></h6>
                                    <small><?php echo (int) ((int) $tripValue->total_seat); ?></small>
                                </div>



                                <div class="col">
                                    <?php $print = 0; ?>
                                    <a target="_blank" href="<?php echo base_url(route_to('getJourneylistData-ticket', $tripValue->trip_id, $filterjourneydate, $print)) ?>" class="btn btn-success" id="<?php echo $tripValue->id; ?>" type="button"> <?php echo lang("Localize.journey_list") ?></a>
                                </div>

                            </div>




                        </div>

                    <?php endforeach ?>

                <?php else : ?>
                    <h3><?php echo lang("Localize.no_trip_found") ?></h3>
                <?php endif ?>



            </div>
        </div>
    </div>

<?php echo $this->endSection() ?>


<?php echo $this->section('js') ?>
    <script src="<?php echo base_url('public/plugins/select2/select2.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/booking.js'); ?>"></script>
<?php echo $this->endSection() ?>
