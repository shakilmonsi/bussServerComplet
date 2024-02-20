<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('css') ?>
    <link href="<?php echo base_url('public/plugins/select2/select2.min.css'); ?>" rel="stylesheet" />
<?php echo $this->endSection() ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">
            <form action="<?php echo base_url(route_to('update-trip', $trip->id)) ?>" id="employee" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/securityupdate') ?>

                <div class="bg-light p-3 my-2">
                    <strong class="mb-1"><?php echo lang("Localize.trip") ?> <?php echo lang("Localize.section") ?></strong>

                    <div class="row">
                        <div class="col-3 ">
                            <label for="pick_location_id" class="form-label"><?php echo lang("Localize.pick_up") ?> <abbr title="Required field">*</abbr></label>
                            <select class="form-select select2" name="pick_location_id" id="pick_location_id" required>
                                <option value="">None</option>

                                <?php
                                foreach ($location as $locationvalue) :
                                    $checkSelected = ($locationvalue->id == $trip->pick_location_id) ? 'selected' : '';
                                    $checkDisabled = ($locationvalue->id == $trip->drop_location_id) ? 'disabled' : '';
                                ?>

                                    <option value="<?php echo $locationvalue->id ?>" <?php echo $checkSelected . " " . $checkDisabled ?>>
                                        <?php echo $locationvalue->name ?>
                                    </option>
                                <?php endforeach ?>

                            </select>
                        </div>
                        <div class="col-3 ">
                            <label for="drop_location_id" class="form-label"><?php echo lang("Localize.drop") ?> <abbr title="Required field">*</abbr></label>
                            <select class="form-select select2" name="drop_location_id" id="drop_location_id" required>
                                <option value="">None</option>

                                <?php
                                foreach ($location as $locationvalue) :
                                    $checkSelected = ($locationvalue->id == $trip->drop_location_id) ? 'selected' : '';
                                    $checkDisabled = ($locationvalue->id == $trip->pick_location_id) ? 'disabled' : '';
                                ?>
                                    <option value="<?php echo $locationvalue->id ?>" <?php echo $checkSelected . " " . $checkDisabled ?>>
                                        <?php echo $locationvalue->name ?>
                                    </option>
                                <?php endforeach ?>

                            </select>
                        </div>
                        <div class="col-3 ">
                            <label for="stoppage" class="form-label"><?php echo lang("Localize.stoppage") ?> <?php echo lang("Localize.point") ?> <abbr title="Required field">*</abbr></label>
                            <select name="stoppage[]" id="stoppage" class="form-control" multiple>

                                <?php
                                foreach ($location as $dropkye => $dlocationvalue) :
                                    $checkSelected = in_array($dlocationvalue->id, $stoppage) ? 'selected' : '';
                                    $checkDisabled = in_array($dlocationvalue->id, [$trip->pick_location_id, $trip->drop_location_id]) ? 'disabled' : '';
                                ?>

                                    <option value="<?php echo $dlocationvalue->id ?>" <?php echo $checkSelected . " " . $checkDisabled ?>>
                                        <?php echo $dlocationvalue->name ?>
                                    </option>

                                <?php endforeach ?>

                            </select>
                        </div>
                        <div class="col-3 ">
                            <label for="schedule_id" class="form-label"><?php echo lang("Localize.schedule") ?> <?php echo lang("Localize.time") ?> <abbr title="Required field">*</abbr></label>
                            <select name="schedule_id" class="testselect1" required>
                                <option value="">None</option>
                                <?php foreach ($schedule as $schedulevalue) : ?>

                                    <?php if ($schedulevalue->id == $trip->schedule_id) : ?>
                                        <option value="<?php echo $schedulevalue->id ?>" selected><?php echo $schedulevalue->start_time ?> - <?php echo $schedulevalue->end_time ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $schedulevalue->id ?>"><?php echo $schedulevalue->start_time ?> - <?php echo $schedulevalue->end_time ?></option>
                                    <?php endif ?>


                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>

                <?php echo $this->include($viewpath . '/trip/editarrival') ?>
                <?php echo $this->include($viewpath . '/trip/editdeparture') ?>

                <div class="bg-light p-3 my-2">
                    <strong class="mb-1"><?php echo lang("Localize.seat") . ', ' . lang("Localize.fair") . ', ' . lang("Localize.time") ?></strong>

                    <div class="row">
                        <div class="col-3">
                            <label for="child_seat" class="form-label"><?php echo lang("Localize.children") ?> <?php echo lang("Localize.seat") ?> </label>
                            <input type="number" id="child_seat" name="child_seat" class="form-control" value="<?= old('child_seat') ?? $trip->child_seat ?>" placeholder="<?php echo lang("Localize.children") ?> <?php echo lang("Localize.seat") ?>" min="0">
                        </div>

                        <div class="col-3">
                            <label for="child_fair" class="form-label"><?php echo lang("Localize.children") ?> <?php echo lang("Localize.fair") ?></label>
                            <input type="number" id="child_fair" name="child_fair" class="form-control" value="<?= old('child_fair') ?? $trip->child_fair ?>" placeholder="<?php echo lang("Localize.children") ?> <?php echo lang("Localize.fair") ?>" min="0">
                        </div>

                        <div class="col-3">
                            <label for="special_seat" class="form-label"><?php echo lang("Localize.special") ?> <?php echo lang("Localize.seat") ?></label>
                            <input type="number" id="special_seat" name="special_seat" class="form-control" value="<?= old('special_seat') ?? $trip->special_seat ?>" placeholder="<?php echo lang("Localize.special") ?> <?php echo lang("Localize.seat") ?>" min="0">
                        </div>

                        <div class="col-3">
                            <label for="special_fair" class="form-label"><?php echo lang("Localize.special") ?> <?php echo lang("Localize.fair") ?> </label>
                            <input type="number" id="special_fair" name="special_fair" class="form-control" value="<?= old('special_fair') ?? $trip->special_fair ?>" placeholder="<?php echo lang("Localize.special") ?> <?php echo lang("Localize.seat") ?> <?php echo lang("Localize.fair") ?>" min="0">
                        </div>

                        <div class="col-3 mt-2">
                            <label for="adult_fair" class="form-label"><?php echo lang("Localize.adult") ?> <?php echo lang("Localize.fair") ?> <abbr title="Required field">*</abbr></label>
                            <input type="number" id="adult_fair" name="adult_fair" class="form-control" value="<?= old('adult_fair') ?? $trip->adult_fair ?>" placeholder="<?php echo lang("Localize.adult") ?> <?php echo lang("Localize.seat") ?> <?php echo lang("Localize.fair") ?> *" min="1" required>
                        </div>

                        <div class="col-3 mt-2">
                            <label for="adult_fair" class="form-label"><?php echo lang("Localize.distance") ?> <abbr title="Required field">*</abbr></label>
                            <input type="number" id="distance" name="distance" class="form-control" value="<?= old('distance') ?? $trip->distance ?>" placeholder="<?php echo lang("Localize.distance") ?>" min="1" required />
                        </div>

                        <div class="col-3 mt-2">
                            <label for="journey_hour" class="form-label"><?php echo lang("Localize.approximate") ?> <?php echo lang("Localize.time") ?> <abbr title="Required field">*</abbr></label>
                            <input type="number" id="journey_hour" name="journey_hour" class="form-control" value="<?= old('journey_hour') ?? $trip->journey_hour ?>" placeholder="<?php echo lang("Localize.approximate") ?> <?php echo lang("Localize.time") ?>" step=any>
                        </div>

                        <div class="col-3 mt-2">
                            <label for="weekend" class="form-label"><?php echo lang("Localize.weekend") ?> </label>

                            <select multiple="multiple" name="weekend[]" class="testselect3">

                                <?php foreach ($weekday as  $key =>  $weekdayvalue) : ?>

                                    <?php if (in_array($key, $weekoff)) : ?>
                                        <option value="<?php echo $key ?>" selected><?php echo $weekdayvalue ?> </option>

                                    <?php else : ?>
                                        <option value="<?php echo $key ?>"><?php echo $weekdayvalue ?> </option>
                                    <?php endif ?>

                                <?php endforeach ?>

                            </select>
                        </div>

                        <div class="col-3 mt-2">
                            <label for="startdate" class="form-label"><?php echo lang("Localize.trip") ?> <?php echo lang("Localize.start") ?> <?php echo lang("Localize.date") ?> <abbr title="Required field">*</abbr></label>
                            <div class="input-group date datepicker" id="startdate">
                                <input type="text" class="form-control" name="startdate" value="<?php echo date("Y-m-d", strtotime($trip->startdate)) ?>" readonly required />
                                <div class="input-group-addon"></div>
                            </div>
                        </div>

                        <div class="col-3 mt-2">
                            <label for="facility" class="form-label"><?php echo lang("Localize.facility") ?> </label>
                            <select multiple="multiple" name="facility[]" class="testselect3">
                                <option value="">None</option>
                                <?php foreach ($facility as $fkye => $facilityvalue) : ?>

                                    <?php if (in_array($facilityvalue->id, $facilityold)) : ?>
                                        <option value="<?php echo $facilityvalue->id ?>" selected><?php echo $facilityvalue->name ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $facilityvalue->id ?>"><?php echo $facilityvalue->name ?></option>

                                    <?php endif ?>

                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="bg-light p-3 my-2">
                    <strong class="mb-1"><?php echo lang("Localize.vehicle") ?></strong>
                    <div class="row">

                        <div class="col-3 ">
                            <label for="fleet_id" class="form-label"><?php echo lang("Localize.fleet") ?> <?php echo lang("Localize.type") ?> <abbr title="Required field">*</abbr></label>
                            <select id="fleet_id" name="fleet_id" class="form-select select2" required>
                                <option value="">None</option>
                                <?php foreach ($fleet_type as $fleet_typevalue) : ?>

                                    <?php if ($fleet_typevalue->id == $trip->fleet_id) : ?>
                                        <option value="<?php echo $fleet_typevalue->id ?>" selected><?php echo $fleet_typevalue->type ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $fleet_typevalue->id ?>"><?php echo $fleet_typevalue->type ?></option>
                                    <?php endif ?>

                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="col-3 ">
                            <label for="vehicle_id" class="form-label"><?php echo lang("Localize.vehicle") ?> <?php echo lang("Localize.list") ?> <abbr title="Required field">*</abbr></label>

                            <div class="inline-loader-wrapper" id="vehicle-id-wrapper">
                                <select id="vehicle_id" name="vehicle_id" class="form-select select2" required>

                                    <?php foreach ($vehicle_id as $vehiclevalue) : ?>
                                        <?php if ($vehiclevalue->id == $trip->vehicle_id) : ?>
                                            <option value="<?php echo $vehiclevalue->id ?>" selected><?php echo $vehiclevalue->reg_no ?></option>
                                        <?php endif ?>
                                    <?php endforeach ?>

                                </select>
                            </div>
                        </div>

                        <div class="col-3 ">
                            <label for="driver" class="form-label"><?php echo lang("Localize.driver") ?> <?php echo lang("Localize.list") ?> <abbr title="Required field">*</abbr></label>

                            <select multiple="multiple" name="driver[]" class="testselect3" required>
                                <option value="">None</option>
                                <?php foreach ($driver as $drivervalue) : ?>
                                    <?php if (in_array($drivervalue->id, $olddriver)) : ?>
                                        <option value="<?php echo $drivervalue->id ?>" selected><?php echo $drivervalue->first_name ?> <?php echo $drivervalue->last_name ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $drivervalue->id ?>"><?php echo $drivervalue->first_name ?> <?php echo $drivervalue->last_name ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="col-3 ">
                            <label for="assistant" class="form-label"><?php echo lang("Localize.assistant") ?> <?php echo lang("Localize.list") ?> <abbr title="Required field">*</abbr></label>
                            <select multiple="multiple" name="assistant[]" class="testselect3" required>
                                <option value="">None</option>

                                <?php foreach ($assistant as $assistantvalue) : ?>

                                    <?php if (in_array($assistantvalue->id, $olddassistant)) : ?>
                                        <option value="<?php echo $assistantvalue->id ?>" selected><?php echo $assistantvalue->first_name ?> <?php echo $assistantvalue->last_name ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $assistantvalue->id ?>"><?php echo $assistantvalue->first_name ?> <?php echo $assistantvalue->last_name ?></option>
                                    <?php endif ?>

                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="col-3 mt-2">
                            <label for="company_name" class="form-label"><?php echo lang("Localize.company") ?> <?php echo lang("Localize.name") ?> <abbr title="Required field">*</abbr></label>
                            <input type="text" id="company_name" name="company_name" class="form-control" value="<?= old('company_name') ?? $trip->company_name ?>" placeholder="<?php echo lang("Localize.company") ?> <?php echo lang("Localize.name") ?>" required />
                        </div>
                    </div>
                </div>

                <label for="status" class="form-label"><?php echo lang("Localize.trip") ?> <?php echo lang("Localize.status") ?></label>

                <?php if ($trip->status == 1) : ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="active" value="1" checked>
                        <label class="form-check-label" for="active">
                            <?php echo lang("Localize.active") ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="0" id="disable">
                        <label class="form-check-label" for="disable">
                            <?php echo lang("Localize.disable") ?>
                        </label>
                    </div>
                <?php else : ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="active" value="1">
                        <label class="form-check-label" for="active">
                            <?php echo lang("Localize.active") ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="0" id="disable" checked>
                        <label class="form-check-label" for="disable">
                            <?php echo lang("Localize.disable") ?>
                        </label>
                    </div>
                <?php endif ?>

                <div class="text-danger">
                    <?php if (isset($validation)) : ?>
                        <?= $validation->listErrors(); ?>
                    <?php endif ?>
                </div>

                <input type="hidden" name="id" value="<?= esc($trip->id) ?>">
                <input type="hidden" id="baseurl" name="baseurl" value="<?php echo esc(base_url()) ?>">

                <div class="col-12">
                    <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                </div>

            </form>

        </div>
    </div>
<?php echo $this->endSection() ?>

<?php echo $this->section('js') ?>
    <script src="<?php echo base_url('public/js/ajax.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/dynamicinput.js'); ?>"></script>
    <script src="<?php echo base_url('public/plugins/select2/select2.min.js'); ?>"></script>
<?php echo $this->endSection() ?>