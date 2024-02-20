<label for="filterjourneylistdate" class="form-label"><?php echo lang("Localize.date") ?> <abbr title="Required field">*</abbr></label>
<div class="input-append date datepicker" id="filterjourneylistdate" data-date-format="yyyy-mm-dd">
    <input size="16" type="text" name="filterjourneylistdate" class="form-control" value="<?php echo empty($filterjourneydate) ? date('Y-m-d') : $filterjourneydate; ?>" required readonly />
    <span class="add-on"><i class="icon-th"></i></span>
</div>