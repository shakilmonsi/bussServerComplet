<label for="fleet_id" class="form-label"><?php echo lang("Localize.fleet") ?> <?php echo lang("Localize.type") ?></label>

<?php if ($fleet_id) : ?>
    <select id="fleet_id" name="fleet_id" class="form-select select2">
        <option value="">ALL</option>

        <?php foreach ($fleet_type as $fleet_typevalue) : ?>
            <?php if ((!empty($fleet_id) && ($fleet_typevalue->id == $fleet_id))) : ?>
                <option value="<?php echo $fleet_typevalue->id ?>" selected><?php echo $fleet_typevalue->type ?></option>
            <?php else : ?>
                <option value="<?php echo $fleet_typevalue->id ?>"><?php echo $fleet_typevalue->type ?></option>
            <?php endif ?>
        <?php endforeach ?>

    </select>
<?php else : ?>
    <select id="fleet_id" name="fleet_id" class="form-select select2">
        <option value="">ALL</option>

        <?php foreach ($fleet_type as $fleet_typevalue) : ?>
            <option value="<?php echo $fleet_typevalue->id ?>"><?php echo $fleet_typevalue->type ?></option>
        <?php endforeach ?>

    </select>
<?php endif ?>