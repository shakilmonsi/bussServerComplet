<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('css') ?>
    <link href="<?php echo base_url('public/plugins/select2/select2.min.css'); ?>" rel="stylesheet" />
<?php echo $this->endSection() ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('findtrip-ticket')) ?>" id="findtrip" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>
                <?php echo $this->include($filterpath . '\ticket\filter\find') ?>

                <div class="text-danger">
                    <?php if (isset($validation)) : ?>
                        <?= $validation->listErrors(); ?>
                    <?php endif ?>
                </div>
            </form>

        </div>
    </div>
<?php echo $this->endSection() ?>

<?php echo $this->section('js') ?>
    <script src="<?php echo base_url('public/plugins/select2/select2.min.js'); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#pick_location_id').on('select2:selecting', function () {
                $('#drop_location_id').select2('open');
            });

            $('#drop_location_id').on('select2:select', function () {
                $('#search-ticket').focus();
            });

            $(document).on('keyup', function(e) {
                if (event.key === 'P' && event.shiftKey) {
                    $('#drop_location_id').select2('close');
                    $('#pick_location_id').select2('open');
                }

                if (event.key === 'D' && event.shiftKey) {
                    $('#pick_location_id').select2('close');
                    $('#drop_location_id').select2('open');
                }

                if (event.key === 'S' && event.shiftKey) {
                    $('#search-ticket').trigger('click');
                }
            });
        });
    </script>
<?php echo $this->endSection() ?>