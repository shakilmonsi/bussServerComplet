<?php
$sessiondata = \Config\Services::session(); // Needed for Point 5
$uri = service('uri');
$menuname = $uri->getSegment(3);

?>



<?php if ($menuname == "admin") : ?>
     <!-- TRUE -->
<?php else : ?>
     <div class="card-header">
          <h6 class="fs-17 fw-semi-bold mb-0"><?php echo !empty($pageheading) ? $pageheading : null ?></h6>
     </div>
<?php endif ?>