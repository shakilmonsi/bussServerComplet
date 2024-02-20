<div class="table-responsive">
    <table class="table display table-bordered table-striped table-hover basic ">
        <thead>
            <tr>
                <th scope="col" class="text-center">
                    <?php echo lang("Localize.menu") ?> <?php echo lang("Localize.title") ?>
                    <label class="select-all-chck">
                        <input type="checkbox" class="check_all full">
                        <?php echo lang("Localize.full_privilege") ?>
                    </label>
                </th>
                <th scope="col" class="text-center">
                    <?php echo lang("Localize.create") ?>
                    <label class="select-all-chck">
                        <input type="checkbox" class="check_all create">
                        <?php echo lang("Localize.all_create") ?>
                    </label>
                </th>
                <th scope="col" class="text-center">
                    <?php echo lang("Localize.read") ?>
                    <label class="select-all-chck">
                        <input type="checkbox" class="check_all read">
                        <?php echo lang("Localize.all_read") ?>
                    </label>
                </th>
                <th scope="col" class="text-center">
                    <?php echo lang("Localize.edit") ?>
                    <label class="select-all-chck">
                        <input type="checkbox" class="check_all edit">
                        <?php echo lang("Localize.all_edit") ?>
                    </label>
                </th>
                <th scope="col" class="text-center">
                    <?php echo lang("Localize.delete") ?>
                    <label class="select-all-chck">
                        <input type="checkbox" class="check_all delete">
                        <?php echo lang("Localize.all_delete") ?>
                    </label>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $mt = 0; ?>

            <?php foreach ($menudetail as $kye =>  $value) : ?>
                <?php if (($mt == 0) && !empty($mainmenudetail)) : ?>
                    <tr>
                        <td class="text-center"><?php echo $mainmenudetail->menu_title; ?></td>
                        <td class="text-center s_create">
                            <input class="form-check-input" type="checkbox" value="1" name="<?php echo $mainmenudetail->menu_title; ?>[]">
                        </td>
                        <td class="text-center s_read">
                            <input class="form-check-input" type="checkbox" value="2" name="<?php echo $mainmenudetail->menu_title; ?>[]">
                        </td>
                        <td class="text-center s_edit">
                            <input class="form-check-input" type="checkbox" value="3" name="<?php echo $mainmenudetail->menu_title; ?>[]">
                        </td>
                        <td class="text-center s_delete">
                            <input class="form-check-input" type="checkbox" value="4" name="<?php echo $mainmenudetail->menu_title; ?>[]">
                        </td>
                    </tr>
                    <?php $mt = $mt + 1; ?>
                <?php endif; ?>

                <tr>
                    <?php if ($value->have_chield == 1) : ?>
                        <?php echo view_cell('\App\Libraries\Permission::callBackPermission', 'menuid=' . $value->id . '') ?>
                    <?php else : ?>
                        <td class="text-center"><?php echo $value->menu_title; ?></td>

                        <td class="text-center s_create">
                            <input class="form-check-input" type="checkbox" value="1" name="<?php echo $value->menu_title; ?>[]">
                        </td>
                        <td class="text-center s_read">
                            <input class="form-check-input" type="checkbox" value="2" name="<?php echo $value->menu_title; ?>[]">
                        </td>
                        <td class="text-center s_edit">
                            <input class="form-check-input" type="checkbox" value="3" name="<?php echo $value->menu_title; ?>[]">
                        </td>
                        <td class="text-center s_delete">
                            <input class="form-check-input" type="checkbox" value="4" name="<?php echo $value->menu_title; ?>[]">
                        </td>
                    <?php endif ?>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
</div>