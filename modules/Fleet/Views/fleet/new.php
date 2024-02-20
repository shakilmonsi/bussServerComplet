<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="<?php echo base_url(route_to('create-fleet')) ?>" id="fleet" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                        <?php echo $this->include('common/security') ?>
        
                        <div class="row">
                            <div class="col-3">
                                <label for="fleettype" class="form-label"><?php echo lang("Localize.fleet") . " " . lang("Localize.type") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" placeholder="<?php echo lang("Localize.fleet") . " " . lang("Localize.type") ?>" name="type" value="<?php echo esc(old('type')) ?>" class="form-control" required />
                            </div>
            
                            <div class="col-3 ">
                                <label for="layout" class="form-label"><?php echo lang("Localize.fleet") . " " . lang("Localize.layout") ?> <abbr title="Required field">*</abbr></label>
                                <select id="layout" class="form-select" name="layout" required="required">
                                    <option value="" disabled selected><?php echo lang("Localize.seat") ?> <?php echo lang("Localize.type") ?> </option>
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
                                    <input class="form-check-input" type="checkbox" id="last_seat" value="1" name="last_seat">
                                    
                                    <label class="form-check-label" for="last_seat">
                                        <?php echo lang("Localize.last_seat_check") ?>
                                    </label>
                                </div>
                            </div>
            
                            <div class="col-4">
                                <label for="total_seat" class="form-label"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.seat") ?>  <abbr title="Required field">*</abbr></label>
                                <input type="number" placeholder="<?php echo lang("Localize.total") ?> <?php echo lang("Localize.seat") ?>" name="total_seat" id="total_seat" value="<?php echo esc(old('type')) ?>" class="form-control" onkeyup="myFunction()" onchange="myFunction()"  min="4" required />
                            </div>
            
                            <div class="mb-3">
                                <label for="seat_number" class="form-label"><?php echo lang("Localize.seat") . " " . lang("Localize.number") ?> <abbr title="Required field">*</abbr></label>
                                <textarea class="form-control" name="seat_number" id="seat_number" rows="3" required></textarea>
                            </div>
            
                            <div class="col-3">
                                <label class="form-label" for="">
                                    <?php echo lang("Localize.luggage") ?> <?php echo lang("Localize.service") ?>
                                    <abbr title="Required field">*</abbr>
                                </label>
            
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
                            </div>
            
                            <div class="col-3">
                                <label class="form-group" for="">
                                    <?php echo lang("Localize.status") ?>
                                    <abbr title="Required field">*</abbr>
                                </label>
                                
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
                            </div>
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


        </div>
    </div>
<?php echo $this->endSection() ?>

<?php echo $this->section('js') ?>
    <script src="<?php echo base_url('public/js/fleet.js'); ?>"></script>
<?php echo $this->endSection() ?>