<?php if (session()->getFlashdata('success')) : ?>
 <div class="alert alert-success alert-dismissible fade show" id="successmessage" role="alert">
    <strong><?php echo session()->getFlashdata('success'); ?></strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif ?>


<?php if (session()->getFlashdata('fail')) : ?>
 <div class="alert alert-danger alert-dismissible fade show" id="failmessage" role="alert">
    <strong><?php echo session()->getFlashdata('fail'); ?></strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif ?>
