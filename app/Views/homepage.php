<!DOCTYPE html>
<html lang="en">
    <head>
    <?php echo $this->include('common/css') ?>
    </head>
    <body>
    <body class="fixed sidebar-mini">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
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
                    <div class="content-header">
                    <?php echo $this->include('template/admin/pageheader') ?>
                    </div>
                    <!--/.Content Header (Page header)--> 
                    <div class="body-content">
                        <div class="card mb-4">
                            <?php echo $this->include('template/admin/body') ?>
                                <div class="card-body">
                                </div>
                        </div>

                   
                    </div><!--/.body content-->
                </div><!--/.main content-->
                
            </div><!--/.wrapper-->
        </div>
   
    </body>

    <?php echo $this->include('common/js') ?>
</html>




