<label for="filterjourneydate" class="form-label"><?php echo lang("Localize.journey") . " " . lang("Localize.date") ?> <abbr title="Required field">*</abbr></label>
<div class="input-append date datepicker" id="filterjourneydate" data-date-format="yyyy-mm-dd">
    <input size="16" type="text" name="filterjourneydate" class="form-control" value="<?php echo $filterjourneydate ?? date('Y-m-d'); ?>" required readonly />
    <span class="add-on"><i class="icon-th"></i></span>
</div>