<?php foreach ($subaccounthead as $subhead) : ?>
    <?php if ($subhead->chield == 1) : ?>

    <li data-jstree="{opened : true }"><?php echo $subhead->name ?>
            <ul>
                <?php echo view_cell('\Modules\Account\Libraries\Tree::getsubtree','nparent='.$subhead->id.'') ?> 
            </ul>
    </li>

   <?php else : ?>
          <li><?php echo $subhead->name ?> </li>
    
   <?php endif ?>
<?php endforeach ?>
