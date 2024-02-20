<?php echo $this->extend('template/admin/main') ?>
<?php echo $this->section('content') ?>
<form action="<?php echo base_url(route_to('update-tax', $tax->id)) ?>" id="taxedit" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
    <?php echo $this->include('common/securityupdate') ?>


    <div class="col-4 ">
        <label for="name">Tax Name</label>
        <input type="text" name="name" value="<?php echo esc(old('name') ?? $tax->name) ?>" class="form-control text-uppercase">
    </div>


    <div class="col-4">
        <label for="value" class="">Default Value(%)</label>
        <input type="number" id="value" name="value" value="<?php echo esc(old('value') ?? $tax->value)  ?>" class="form-control text-uppercase" placeholder="xxx" step="0.01">
    </div>
    <div class="col-4">
        <label for="name" class="">Reg No</label>
        <input type="text" id="tax_reg" name="tax_reg" value="<?php echo esc(old('tax_reg') ?? $tax->tax_reg)  ?>" class="form-control text-uppercase" placeholder="Reg No">
    </div>


    <label class="form-label" for="">
        STATUS
    </label>

    <?php if ($tax->status == 1) : ?>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status" value="1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Active
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status" value="0">
            <label class="form-check-label" for="exampleRadios2">
                Disable
            </label>
        </div>
    <?php else : ?>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status" value="1">
            <label class="form-check-label" for="exampleRadios1">
                Active
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status" value="0" checked>
            <label class="form-check-label" for="exampleRadios2">
                Disable
            </label>
        </div>
    <?php endif ?>

    <?php if (isset($validation)) : ?>
        <?= $validation->listErrors(); ?>
    <?php endif ?>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?php echo $this->endSection() ?>