<?php echo $this->extend('template/admin/main') ?>

	<?php echo $this->section('content') ?>

  <div class="card mb-4">
      <div class="card-body">

      <?php
        $sessiondata = \Config\Services::session(); // Needed for Point 5
        $uri = service('uri');
        $menuname = $uri->getSegment(3);
  
        ?>
 
  <?php $print =1 ;?>
    <a target="_blank" href="<?php echo base_url(route_to( 'getJourneylistData-ticket',$tripId,$date,$print)) ?>" class="btn btn-success btn-sm mb-2"><i class="fas fa-print"></i></a>
    
		<h6 class="text-center"><?php echo $sessiondata->get('logotext') ?></h6>
		<h6 class="text-center"> <?php echo $from ;?> (<small><?php echo $schedule->start_time ;?></small>) -  <?php echo $to ;?> (<small><?php echo $schedule->end_time ;?></small>) </h6>
    <h6 class="text-center" > (<small><?php echo $stopagepoint  ;?></small>)</h6>
    <div class="text-center">
      <journey><?php echo lang("Localize.journey") ?> <?php echo lang("Localize.date") ?> : <b> <?php echo date("Y-F-d",strtotime($journeydate)) ;?> </b></journey>
      (<small><?php echo $facility  ;?></small>)
      <h6><?php echo lang("Localize.driver") ?> <?php echo lang("Localize.name") ?> : <?php echo $drivername  ;?></h6>
      <h6><?php echo lang("Localize.assiatant") ?> <?php echo lang("Localize.name") ?>  : <?php echo $assistance  ;?></h6>
  </div>
<div class="table-responsive">
<table class="table display table-bordered table-striped table-hover basic" id="">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><?php echo lang("Localize.booking") ?> <?php echo lang("Localize.id") ?> </th>
      <th scope="col"><?php echo lang("Localize.pick_up") ?> <?php echo lang("Localize.location") ?> </th>
      <th scope="col"><?php echo lang("Localize.drop") ?> <?php echo lang("Localize.location") ?> </th>
      <th scope="col"><?php echo lang("Localize.pick_up") ?> <?php echo lang("Localize.stand") ?>  </th>
      <th scope="col"><?php echo lang("Localize.drop") ?> <?php echo lang("Localize.stand") ?></th>
      <th scope="col"><?php echo lang("Localize.ticket") ?></th>
      <th scope="col"><?php echo lang("Localize.passanger") ?> <?php echo lang("Localize.details") ?> 
    
      </th>
     
     
    </tr>
  </thead>
  <tbody>
      <?php $bookingid = null ;?>
  <?php foreach ($journeylist as $kye =>  $value) : ?>

    <?php 
         $bookid =    $value->booking_id;
        $count = array_count_values(array_column($journeylist, 'booking_id'));
        $rowspan = $count[$value->booking_id] ;
      ?>

   
      
    <tr>
    <th scope="row"><?php echo $kye+1 ;?></th>
      <td><?php echo $value->booking_id; ?></td>
      <td><?php echo $value->pick_loc_name; ?></td>
      <td><?php echo $value->drop_loc_name; ?></td>
      <td><?php echo $value->picstand; ?></td>
      <td><?php echo $value->dropstand; ?></td>
   <?php if ( $bookingid != $value->booking_id ) : ?>
    <td rowspan="<?php echo $rowspan; ?>"><?php echo $value->seatnumbers; ?></td>
   
   <?php endif ?>
  
   

      <td>
        
           <small><?php echo lang("Localize.name") ?>: <?php echo $value->first_name; ?> <?php echo $value->last_name; ?></small><br>
           <small><?php echo lang("Localize.mobile") ?>: <?php echo $value->phone; ?></small><br>
           <small><?php echo lang("Localize.nid_passport") ?>: <?php echo $value->id_number; ?></small>
      
      </td>
      
    </tr>
      
   
    <?php $bookingid = $value->booking_id ;?>
   
       

  <?php endforeach ?>
   
   
  </tbody>
</table>
</div>

</div>
</div>

	<?php echo $this->endSection() ?>