<div class="bg-light p-3 my-2">
    <strong class="mb-1"><?php echo lang("Localize.boarding") ?> <?php echo lang("Localize.point") ?></strong>

    <?php foreach ($arrival as $key => $arrivalvalue) : ?>
        <input type="hidden" name="type[]" value="1">

        <div class="row" id="boarding">
            <div class="col-3 mt-2">
                <label for="picktime" class="form-label"><?php echo lang("Localize.select") ?> <?php echo lang("Localize.time") ?> <abbr title="Required field">*</abbr></label>
                <input type="text" id="picktime" name="picktime[]" class="form-control" value="<?php echo esc(old('time')) ?? $arrivalvalue->time  ?>" placeholder="Select Time">
            </div>

            <div class="col-3 mt-2">
                <label for="stand" class="form-label"><?php echo lang("Localize.bus") ?> <?php echo lang("Localize.stand") ?> <abbr title="Required field">*</abbr></label>
                <select name="picstand[]" class="form-control testselect1" required>
                    <option value="">None</option>

                    <?php foreach ($stand as $standvalue) : ?>

                        <?php if ($arrivalvalue->stand_id == $standvalue->id) : ?>
                            <option value="<?php echo $standvalue->id ?>" selected><?php echo $standvalue->name ?></option>
                        <?php else : ?>
                            <option value="<?php echo $standvalue->id ?>"><?php echo $standvalue->name ?></option>
                        <?php endif ?>

                    <?php endforeach ?>

                </select>
            </div>

            <div class="col-3 mt-2">
                <label for="detail" class="form-label"><?php echo lang("Localize.details") ?> </label>
                <input type="text" id="detail" name="detail[]" class="form-control" value="<?php echo old('detail') ?? $arrivalvalue->detail ?>" placeholder="<?php echo lang("Localize.details") ?>">
            </div>

            <div class="col-3 mt-2">
                <label class="d-block">&nbsp;</label>
                
                <?php if (!$key) : ?>
                    <a id="boardingadd" class="btn btn-success mt-1 text-white" onclick="addfieldboard()">+</a>
                <?php else : ?>
                    <a id="remove" class="btn btn-danger mt-1 text-white" onclick="removerow()">X</a>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="row" id="boardinadd"></div>
</div>