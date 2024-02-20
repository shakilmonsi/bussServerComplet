<?php

use App\Libraries\Rolepermission;

$uri = service('uri');
$menuname = $uri->getSegment(3);
$submenupath = implode('/', array_slice($uri->getSegments(), 3));

$rolepermissionLibrary = new Rolepermission();
$sessiondata = \Config\Services::session();
?>

<div class="sidebar-header">
    <a href="<?php echo base_url(route_to('admin-home')) ?>" class="sidebar-brand">
        <img class="img-fluid" src="<?php echo $sessiondata->get('logo'); ?>" alt="">
    </a>
</div>

<div class="profile-element d-flex align-items-center flex-shrink-0">
    <div class="avatar online">
        <img src="<?php echo $sessiondata->get('profile_pic'); ?>" class="img-fluid rounded-circle" alt="">
    </div>
    <div class="profile-text">
        <h6 class="m-0"><?php echo $sessiondata->get('first_name'); ?>
            <?php echo $sessiondata->get('last_name'); ?>
        </h6>
    </div>
</div>
<div class="sidebar-body">
    <nav class="sidebar-nav">
        <ul class="metismenu">
            <li class="<?php echo ($menuname == "admin") ? "mm-active" : "" ?>">
                <a href="<?php echo base_url(route_to('admin-home')) ?>">
                    <i class="fab fa-slack"></i>
                    <?php echo lang("Localize.dashboard") ?>
                </a>
            </li>

            <?php
            
            // map all module menu files
            $moduleConfigMenuFiles = glob(ROOTPATH . 'modules/*/Config/Menu.php');
            
            if ($moduleConfigMenuFiles) {
                // custome menu files exists
                // soft alphabatically
                sort($moduleConfigMenuFiles);
                
                foreach ($moduleConfigMenuFiles as $value) {
                    if (file_exists($value)) {
                        // include sidebar menu file
                        @include($value);
                    }
                }
            }
            ?>

        </ul>
    </nav>
</div>