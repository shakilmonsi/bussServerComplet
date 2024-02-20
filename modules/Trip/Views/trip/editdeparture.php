<div class="bg-light p-3 my-2">
    <strong class="mb-1"><?php echo lang("Localize.dropping") ?> <?php echo lang("Localize.point") ?></strong>

    <?php foreach ($departure as $key => $departurevalue) : ?>
        <div class="row" id="droping">
            <div class="col-3 mt-2">
                <label for="droptime" class="form-label"><?php echo lang("Localize.select") ?> <?php echo lang("Localize.time") ?> <abbr title="Required field">*</abbr></label>
                <input type="text" id="droptime" name="droptime[]" class="form-control" value="<?php echo esc(old('time')) ?? $departurevalue->time  ?>" placeholder="Select Time">
            </div>

            <div class="col-3 ">
                <label for="dropstand" class="form-label"><?php echo lang("Localize.bus") ?> <?php echo lang("Localize.stand") ?> <abbr title="Required field">*</abbr></label>
                <select name="dropstand[]" class="form-control testselect1" required>
                    <option value="">None</option>
                    <?php foreach ($stand as $standvalue) : ?>

                        <?php if ($departurevalue->stand_id == $standvalue->id) : ?>
                            <option value="<?php echo $standvalue->id ?>" selected><?php echo $standvalue->name ?></option>
                        <?php else : ?>
                            <option value="<?php echo $standvalue->id ?>"><?php echo $standvalue->name ?></option>
                        <?php endif ?>

                    <?php endforeach ?>
                </select>
            </div>

            <div class="col-3 ">
                <label for="dropdetail" class="form-label"><?php echo lang("Localize.details") ?></label>
                <input type="text" id="detail" name="dropdetail[]" class="form-control" value="<?php echo old('details') ?? $departurevalue->detail ?>" placeholder="<?php echo lang("Localize.detail") ?>">
            </div>

            <input type="hidden" name="droptype[]" value="0">

            <div class="col-3 mt-4">
                <?php if (!$key) : ?>
                    <a id="boardingadd" class="btn btn-success mt-1 text-white" onclick="addfielddrop()">+</a>
                <?php else : ?>
                    <a id="removeedit" class="btn btn-danger mt-1 text-white" onclick="removerowedit()">X</a>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="row" id="droppingadd"></div>
</div>