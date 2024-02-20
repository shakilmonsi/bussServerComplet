<tbody>
    <?php $infinite = 0; ?>
    <?php foreach ($menudetail as $kye =>  $value) : ?>


        <?php if ($infinite == 0) : ?>
            <tr>
                <td class="text-center"><?php echo $mainmenudetail[0]->menu_title; ?></td>

                <td class="text-center s_create">
                    <input class="form-check-input" type="checkbox" value="1" name="<?php echo $mainmenudetail[0]->menu_title; ?>[]">
                </td>
                <td class="text-center s_read">
                    <input class="form-check-input" type="checkbox" value="2" name="<?php echo $mainmenudetail[0]->menu_title; ?>[]">
                </td>
                <td class="text-center s_edit">
                    <input class="form-check-input" type="checkbox" value="3" name="<?php echo $mainmenudetail[0]->menu_title; ?>[]">
                </td>
                <td class="text-center s_delete">
                    <input class="form-check-input" type="checkbox" value="4" name="<?php echo $mainmenudetail[0]->menu_title; ?>[]">
                </td>

            </tr>
            <?php $infinite = $infinite + 1; ?>
        <?php endif ?>

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