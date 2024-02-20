<?php echo $this->extend('template/admin/main') ?>

<?php
    $local_session = \Config\Services::session(); // Needed for Point 5
?>

    <?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>
   


    <?php echo $this->include('common/chart/chart') ?>






    <!-- <h1><?php echo var_dump($local_session->get('role_id')) ?></h1>
    <h1><?php echo var_dump($local_session->get('user_id')) ?></h1> -->
   
    

<?php echo $this->endSection() ?>


<?php echo $this->section('js') ?>

<!-- <script src="<?php echo base_url('public/chartjs/package/dist/chart.min.js'); ?>"></script> -->


<script src="<?php echo base_url('public/apexcharts/dist/apexcharts.min.js'); ?>"></script>



<!-- <script src="<?php echo base_url('public/js/displaychart.js'); ?>"></script> -->
<script src="<?php echo base_url('public/js/newchart.js'); ?>"></script>




  


<?php echo $this->endSection() ?>