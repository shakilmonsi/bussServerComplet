<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('update-fleet', $fleet->id)) ?>" id="fleetupdate" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/securityupdate') ?>

                <div class="col-3">
                    <label for="fleettype" class="form-label"><?php echo lang("Localize.fleet") ?> <?php echo lang("Localize.type") ?> <abbr title="Required field">*</abbr></label>
                    <input type="text" placeholder="Fleet Type" name="type" value="<?php echo old('type') ?? $fleet->type ?>" class="form-control">
                </div>

                <div class="col-3 ">
                    <label for="layout" class="form-label"><?php echo lang("Localize.fleet") ?> <?php echo lang("Localize.layout") ?> <abbr title="Required field">*</abbr></label>
                    <select id="layout" class="form-select" name="layout" required="required">
                        <option value="" disabled selected><?= $fleet->layout ?></option>
                        <option value="2-2">2-2</option>
                        <option value="1-1">1-1</option>
                        <option value="2-1">2-1</option>
                        <option value="1-2">1-2</option>
                        <option value="3-2">3-2</option>
                        <option value="2-3">2-3</option>
                        <option value="1-1-1">1-1-1</option>
                    </select>
                </div>

                <div class="col-2 mt-5">
                    <div class="form-check">

                        <?php if ($fleet->last_seat == 1) : ?>
                            <input class="form-check-input position-static" type="checkbox" id="last_seat" value="1" name="last_seat" checked>
                        <?php else : ?>
                            <input class="form-check-input position-static" type="checkbox" id="last_seat" value="1" name="last_seat">
                        <?php endif ?>

                        <label class="form-check-label" for="last_seat">
                            <?php echo lang("Localize.last_seat_check") ?>
                        </label>
                    </div>
                </div>

                <div class="col-4">
                    <label for="total_seat" class="form-label"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.seat") ?> <abbr title="Required field">*</abbr></label>
                    <input type="number" name="total_seat" id="total_seat" placeholder="Total Seat" class="form-control" value="<?php echo old('total_seat') ?? $fleet->total_seat ?>" onkeyup="myFunction()">
                </div>

                <div class="mb-3">
                    <label for="seat_number" class="form-label"><?php echo lang("Localize.seat") ?> <?php echo lang("Localize.number") ?> <abbr title="Required field">*</abbr></label>
                    <textarea class="form-control" name="seat_number" id="seat_number" rows="3"><?php echo old('total_seat') ?? $fleet->seat_number ?></textarea>
                </div>


                <div class="col-3">

                    <label class="form-label" for="">
                        <?php echo lang("Localize.luggage") ?> <?php echo lang("Localize.service") ?>
                        <abbr title="Required field">*</abbr>
                    </label>
                    <?php if ($fleet->luggage_service == 1) : ?>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="luggage_service" id="luggage_service" value="1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                <?php echo lang("Localize.active") ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="luggage_service" id="luggage_service" value="0">
                            <label class="form-check-label" for="exampleRadios2">
                                <?php echo lang("Localize.disable") ?>
                            </label>
                        </div>
                    <?php else : ?>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="luggage_service" id="luggage_service" value="1">
                            <label class="form-check-label" for="exampleRadios1">
                                <?php echo lang("Localize.active") ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="luggage_service" id="luggage_service" value="0" checked>
                            <label class="form-check-label" for="exampleRadios2">
                                <?php echo lang("Localize.disable") ?>
                            </label>
                        </div>
                    <?php endif ?>
                </div>

                <div class="col-3">
                    <label class="form-label" for="">
                        <?php echo lang("Localize.status") ?>
                        <abbr title="Required field">*</abbr>
                    </label>

                    <?php if ($fleet->status == 1) : ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" value="1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                <?php echo lang("Localize.active") ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" value="0">
                            <label class="form-check-label" for="exampleRadios2">
                                <?php echo lang("Localize.disable") ?>
                            </label>
                        </div>
                    <?php else : ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" value="1">
                            <label class="form-check-label" for="exampleRadios1">
                                <?php echo lang("Localize.active") ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" value="0" checked>
                            <label class="form-check-label" for="exampleRadios2">
                                <?php echo lang("Localize.disable") ?>
                            </label>
                        </div>
                    <?php endif ?>

                </div>

                <div class="text-danger">
                    <?php if (isset($validation)) : ?>
                        <?= $validation->listErrors(); ?>
                    <?php endif ?>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                </div>
            </form>
        </div>
    </div>
<?php echo $this->endSection() ?>

<?php echo $this->section('js') ?>
    <script src="<?php echo base_url('public/js/fleet.js'); ?>"></script>
<?php echo $this->endSection() ?>