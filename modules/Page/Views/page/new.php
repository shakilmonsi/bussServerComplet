<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('create-question')) ?>" id="questioncreate" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>


                <div class="row">
                    <div class="col-2"></div>

                    <div class="col-8">

                        <div class="row">



                            <div class="col-12">
                                <label for="question"><?php echo lang("Localize.question") ?></label>
                                <input type="text" id="question" name="question" value="<?php echo esc(old('question'))  ?>" class="form-control text-capitalize" placeholder="<?php echo lang("Localize.question") ?>">
                            </div>

                            <div class="col-12 mt-3">
                                <label for="description"><?php echo lang("Localize.answer") ?></label>
                                <textarea id="editor1" rows="10" cols="80" type="text" name="description" class="form-control"> <?php echo esc(old('description'))  ?> </textarea>

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