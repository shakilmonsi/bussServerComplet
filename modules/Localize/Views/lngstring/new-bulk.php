<?php echo $this->extend('template/admin/main'); ?>

<?php $this->section('content') ?>
<?php echo $this->include('common/message') ?>

<div class="card mb-4">
    <div class="card-body">

        <form action="<?php echo base_url(route_to('bulkcreate-langstring')) ?>" id="lagsrtform" method="post" enctype="multipart/form-data">
            <?php echo $this->include('common/security') ?>

            <div class="row justify-content-center mb-2">
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label class="form-label"><?php echo lang('Localize.select_file') ?> <abbr title="Required field">*</abbr></label>
                        <input type="file" class="form-control" name="lngstringFile" id="lngstringFile">

                        <a href="<?php echo base_url(route_to('bulksample-langstring')); ?>" class="form-text">
                            <i class="fas fa-download"></i>
                            <?php echo lang('Localize.download_sample_file'); ?>
                        </a>
                    </div>

                    <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                </div>
            </div>

        </form>
    </div>
</div>
<?php $this->endSection() ?>