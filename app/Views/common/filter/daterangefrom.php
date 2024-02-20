<label for="start_date" class="form-label"><?php echo lang("Localize.from") ?></label>
<div class="input-append date datepicker" id="start_date"  data-date-format="yyyy-mm-dd">
    <input size="16" type="text" name="start_date" class="form-control" value="<?php echo date('Y-m-01');?>"  required readonly>
    <span class="add-on"><i class="icon-th"></i></span>
</div>