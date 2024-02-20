<?php foreach ($accounthead as $mainhead) : ?>

    
    
    <?php if ($mainhead->chield == 1) : ?>
       
        <li data-jstree="{opened : true }"><?php echo $mainhead->name ?>
            <ul>
            <?php echo view_cell('\Modules\Account\Libraries\Tree::getsubtree','nparent='.$mainhead->id.'') ?>
                
            </ul>

        </li>
       

   <?php else : ?>

    <li data-jstree="{opened : true }"><?php echo $mainhead->name ?>  </li>
   
   <?php endif ?>
<?php endforeach ?>



