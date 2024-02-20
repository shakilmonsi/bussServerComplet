<label for="filterreturndate" class="form-label"><?php echo lang("Localize.return") . " " . lang("Localize.date") ?></label>
<div class="input-append date datepicker" id="filterreturndate" data-date-format="yyyy-mm-dd">
    <input size="16" type="text" name="filterreturndate" class="form-control" value="<?php echo $filterreturndate ?? NULL; ?>" readonly>
    <span class="add-on"><i class="icon-th"></i></span>
</div>