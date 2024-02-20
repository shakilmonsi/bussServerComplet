<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $this->include('common/css') ?>
    <?php echo $this->renderSection('css') ?>
    <?php echo $this->include('common/headerjs') ?>
</head>

<body class="fixed sidebar-mini">
    <!-- Page Loader -->
    <div class="page-loader-wrapper" id="main-loader">
        <div class="loader" id="page-loader">
            <div class="preloader">
                <div class="spinner-layer pl-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- #END# Page Loader -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav class="sidebar sidebar-bunker">
            <!-- sidebar-body -->
            <?php echo $this->include('template/admin/sidebar') ?>
        </nav>
        <!-- Page Content  -->
        <div class="content-wrapper">
            <div class="main-content">
                <!--Navbar-->
                <nav class="navbar-custom-menu navbar navbar-expand-xl m-0">
                    <?php echo $this->include('template/admin/navbar') ?>
                </nav><!--/.navbar-->

                <!--Content Header (Page header)-->
                <!-- <div class="content-header"> -->
                <?php //echo $this->include('template/admin/pageheader') 
                ?>
                <!-- </div> -->
                <!--/.Content Header (Page header)-->



                <div class="body-content">
                    <!-- <div class="card mb-4"> -->
                    <?php echo $this->include('template/admin/body') ?>
                    <!-- <div class="card-body"> -->

                    <?php echo $this->renderSection('content') ?>

                    <!-- </div> -->
                    <!-- </div> -->


                </div><!--/.body content-->
            </div><!--/.main content-->

        </div><!--/.wrapper-->
    </div>

    <?php
    $local_session = \Config\Services::session();
    if ($local_session->has('fontfamily')) {
        $fontfamily = $local_session->fontfamily;
        $textlogo = $local_session->logotext;
    } else {
        $fontfamily = "Robot";
        $textlogo = "Set UP Your Logo";
    }

    ?>
    <input type="hidden" id="fontfamily" value="<?php echo $fontfamily; ?>">
    <input type="hidden" id="logotext" value="<?php echo $textlogo; ?>">
</body>

<?php echo $this->include('common/js') ?>

<?php echo $this->renderSection('js') ?>

</html>