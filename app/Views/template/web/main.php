<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $this->include('common/css') ?>
    <?php echo $this->include('common/headerjs') ?>
</head>

<body>
    <div class="container-fluid">
        <?php echo $this->renderSection('content') ?>
    </div>
</body>

<?php echo $this->include('common/js') ?>

</html>