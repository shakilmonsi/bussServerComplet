<label for="end_date" class="form-label"><?php echo lang("Localize.to") ?></label>
<div class="input-append date datepicker" id="end_date" data-date-format="yyyy-mm-dd">
    <input size="16" type="text" name="end_date" class="form-control" value="<?php echo date('Y-m-d');?>"  required readonly>
    <span class="add-on"><i class="icon-th"></i></span>
</div>