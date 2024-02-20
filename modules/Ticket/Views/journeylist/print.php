<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
    </head>
    <body>
    <?php
        $sessiondata = \Config\Services::session(); // Needed for Point 5
        $uri = service('uri');
        $menuname = $uri->getSegment(3);
  
        ?>

     <div class="container-fluid">
        <div class="row">
            <div class="col-12 ">
            <h6 class="text-center"><?php echo $sessiondata->get('logotext') ?></h6>
		<h6 class="text-center"> <?php echo $from ;?> (<small><?php echo $schedule->start_time ;?></small>) -  <?php echo $to ;?> (<small><?php echo $schedule->end_time ;?></small>) </h6>
    <h6 class="text-center" > (<small><?php echo $stopagepoint  ;?></small>)</h6>
    <div class="text-center">
      <journey><?php echo lang("Localize.journey") ?> <?php echo lang("Localize.date") ?> : <b> <?php echo date("Y-F-d",strtotime($journeydate)) ;?> </b></journey>
      (<small><?php echo $facility  ;?></small>)
      <h6><?php echo lang("Localize.driver") ?> <?php echo lang("Localize.name") ?> : <?php echo $drivername  ;?></h6>
      <h6><?php echo lang("Localize.assiatant") ?> <?php echo lang("Localize.name") ?> : <?php echo $assistance  ;?></h6>
  </div>

<table class="table display table-bordered  basic" id="">
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
      <td>
         <small> <?php echo $value->booking_id; ?></small>
        </td>
      <td><?php echo $value->pick_loc_name; ?></td>
      <td><?php echo $value->drop_loc_name; ?></td>
      <td>
      <small> 
          <?php 
          $pos =  strrpos($value->picstand, '(');
          $first = substr($value->picstand, 0, $pos);
          $second = substr($value->picstand, $pos + 1);
          ?>
          <?php echo $first ;  ?>
          <?php echo $second ;  ?>
        </small>
     </td>
      <td>
      <small> 
          <?php 
          $dpos =  strrpos($value->dropstand, '(');
          $dfirst = substr($value->dropstand, 0, $dpos);
          $dsecond = substr($value->dropstand, $dpos + 1);
          ?>
          <?php echo $dfirst ;  ?>
          <?php echo $dsecond ;  ?>
        </small>
          
     </td>
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
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script type="text/javascript">

        $(document).ready(function () {
            window.print();
        });

   </script>
</html>