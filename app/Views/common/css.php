<?php 

$fontfamily = "Roboto";
$appTitle = "BUS365";
$favicon = base_url('public/image/icone/favicon.png');
$local_session = \Config\Services::session(); 

if($local_session->has('fontfamily')) {
    $fontfamily = $local_session->fontfamily ;
}

if($local_session->has('favicon')) {
    $favicon = $local_session->favicon ;
}

if($local_session->has('apptitle')) {
    $appTitle = $local_session->apptitle ;
}

if (isset($pageheading)) {
    $appTitle = sprintf("%s - %s", $pageheading, $appTitle);
}
?>


<title><?php echo $appTitle; ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo $favicon ?>" sizes="10X10">
<link href="<?php echo base_url('public/css/bootstrap/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('public/css/metisMenu/metisMenu.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('public/css/fontawesome/css/all.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('public/css/typicons/src/typicons.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('public/css/themify-icons/themify-icons.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('public/datatables/datatables.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('public/css/css/style.css'); ?>" rel="stylesheet">

<link href="<?php echo base_url('public/css/css/projectstyle.css'); ?>" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url('public/css/clockpicker.min.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('public/css/datepicker.css'); ?>" type="text/css">


<!-- Data Table -->
<link rel="stylesheet" href="<?php echo base_url('public/datatables/datatables.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('public/datatables/Buttons-2.0.1/css/buttons.bootstrap5.min.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('public/datatables/Buttons-2.0.1/css/buttons.dataTables.min.css'); ?>" type="text/css">

<!-- Data Table -->

<link rel="stylesheet" href="<?php echo base_url('public/css/sumoselect.min.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('public/css/customestyle.css'); ?>" type="text/css">

<!-- tree view -->
<link rel="stylesheet" href="<?php echo base_url('public/jstree/dist/themes/default/style.min.css'); ?>" type="text/css">
<!-- tree view -->


<!-- Dashboard -->
<link rel="stylesheet" href="<?php echo base_url('public/css/dashboard/custom.style.css'); ?>" type="text/css">
<!-- Dashboard -->

<!-- font family  -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=<?php echo $fontfamily;?>" type="text/css">
<!-- font family  -->

