<?php

// Needed for Point 5
$sessiondata = \Config\Services::session();
?>

<div class="sidebar-toggle-icon" id="sidebarCollapse">
    <span></span>
</div>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-expanded="true" aria-label="Toggle navigation"><span></span> <span></span></button>
    <ul class="navbar-nav">

    </ul>
</div>



<div class="navbar-icon d-flex">
    <ul class="navbar-nav flex-row align-items-center">
        <li class="nav">
            <?php echo view_cell('\App\Libraries\Language::getAllLanguage') ?>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#" id="btnFullscreen"><i class="full-screen_icon typcn typcn-arrow-move-outline"></i></a>
        </li>

        <li class="nav-item dropdown user-menu">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="typcn typcn-user-outline"></i>
            </a>
            <div class="dropdown-menu">
                <div class="dropdown-header d-sm-none">
                    <a href="" class="header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="user-header">
                    <div class="img-user">
                        <img src="<?php echo $sessiondata->get('profile_pic'); ?>" alt="">
                    </div>
                    <h6><?php echo  $sessiondata->get('first_name'); ?> <?php echo  $sessiondata->get('last_name'); ?></h6>

                </div>
                <a href="<?php echo base_url(route_to('editprofile-user')) ?>" class="dropdown-item">
                    <i class="typcn typcn-cog-outline"></i>
                    <?php echo lang("Localize.application_setting") ?>
                </a>
                <a href="<?php echo base_url(route_to('auth-logout')) ?>" class="dropdown-item">
                    <i class="typcn typcn-key-outline"></i>
                    <?php echo lang("Localize.sign_out") ?>
                </a>
            </div>
        </li>
    </ul>

    <div class="nav-clock">
        <div class="time">
            <span class="time-hours"></span>
            <span class="time-min"></span>
            <span class="time-sec"></span>
        </div>
    </div>
</div>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="typcn typcn-th-menu-outline"></i>
</button>

<input type="hidden" name="baseurl" id="baseurl" value="<?php echo base_url(); ?>">