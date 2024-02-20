<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>
    <div class="container-fluid">
        <div class="row">

            <!-- tree view for account -->
            <div class="col-8">
                <div class="card card-body shadow-none border mb-4">
                    <h5 class="fw-semi-bold border-bottom pb-2 mb-3">HTML demo</h5>
                    <div id="html" class="demo">
                        <ul> <?php echo view_cell('\Modules\Account\Libraries\Tree::getTree', 'parent=parent') ?> </ul>
                    </div>
                </div>
            </div>
            <!-- tree view for account -->

        </div>
    </div>
<?php echo $this->endSection() ?>

<?php echo $this->section('js') ?>
    <script src="<?php echo base_url('public/jstree/dist/jstree.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/jstree/tree-view.active.js'); ?>"></script>
<?php echo $this->endSection() ?>