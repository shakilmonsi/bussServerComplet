<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">
            <form action="<?php echo base_url(route_to('update-section-four-comment', $secFourComment->id)) ?>" id="sectwohowitwork" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/securityupdate') ?>

                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <label for="person_name"><?php echo lang("Localize.name") ?></label>
                                <input type="text" id="person_name" name="person_name" value="<?php echo esc(old('person_name')) ??  $secFourComment->person_name ?>" class="form-control text-capitalize" placeholder="<?php echo lang("Localize.name") ?>">
                            </div>

                            <div class="col-12 mt-3">
                                <label for="person_detail"><?php echo lang("Localize.designation") ?></label>
                                <input type="text" id="person_detail" name="person_detail" value="<?php echo esc(old('person_detail')) ?? $secFourComment->person_detail  ?>" class="form-control text-capitalize" placeholder="<?php echo lang("Localize.designation") ?>">
                            </div>

                            <div class="col-12 mt-3">
                                <label for="serial"><?php echo lang("Localize.serial") ?></label>
                                <input type="number" id="serial" name="serial" value="<?php echo esc(old('serial')) ?? $secFourComment->serial  ?>" class="form-control text-capitalize" placeholder="<?php echo lang("Localize.serial") ?>" min="1">
                            </div>

                            <div class="col-12 mt-3">
                                <label for="description"><?php echo lang("Localize.description") ?></label>
                                <textarea id="editor1" rows="10" cols="80" type="text" name="description" class="form-control"> <?php echo esc(old('description'))  ?? $secFourComment->description ?> </textarea>
                            </div>

                            <div class="col-12 mt-3">
                                <label for="editsecfourimg" class="form-label"><?php echo lang("Localize.image") ?></label>
                                <div id="editsecfourimg"></div>
                            </div>

                            <div class="text-danger">
                                <?php if (isset($validation)) : ?>
                                    <?= $validation->listErrors(); ?>
                                <?php endif ?>
                            </div>

                            <br>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                            </div>
                        </div>

                        <input type="hidden" id="secfouroldimg" name="secfouroldimg" value="<?php echo $secFourComment->image ?>">
                        <input type="hidden" id="baseurl" name="baseurl" value="<?php echo base_url() ?>">
                    </div>

                    <div class="col-2"></div>
                </div>
            </form>
        </div>
    </div>
<?php echo $this->endSection() ?>

<?php echo $this->section('js') ?>
    <script src="<?php echo base_url('public/ckeditor/ckeditor.js'); ?>"></script>
    <script src="<?php echo base_url('public/ckeditor/ckeditor.active.js'); ?>"></script>
<?php echo $this->endSection() ?>