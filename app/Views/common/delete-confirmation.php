<form action="<?php echo base_url($action) ?>" method="post">
    <?php echo $this->include('common/delete') ?>
    <input type="hidden" name="ref" value="<?php echo $ref; ?>">

    <?php foreach ($tdArr as $key => $sdArr) : ?> 
       
        <h5 style="text-transform: capitalize; font-size: 16px; font-weight: bold; background-color: #e8e8e8; padding: 5px 15px;">
        <?php
        if($sdArr['table'] == 'fleets'){
            echo lang("Localize.fleet");
        }elseif($sdArr['table'] == 'vehicles'){
            echo lang("Localize.vehicle");
        }elseif($sdArr['table'] == 'vehicalimages'){
            echo lang("Localize.vehicle").' '.lang("Localize.image");
        }elseif($sdArr['table'] == 'trips'){
            echo lang("Localize.trip");
        }elseif($sdArr['table'] == 'stuffassigns'){
            echo lang("Localize.trip").' '.lang("Localize.stuff").' '.lang("Localize.assign");
        }elseif($sdArr['table'] == 'pickdrops'){
            echo lang("Localize.trip").' '.lang("Localize.pick").' '.lang("Localize.location").' '.lang("Localize.drop");
        }elseif($sdArr['table'] == 'subtrips'){
            echo lang("Localize.sub").''.lang("Localize.trip");
        }elseif($sdArr['table'] == 'tickets'){
            echo lang("Localize.ticket");
        }elseif($sdArr['table'] == 'partialpaids'){
            echo lang("Localize.partial").''.lang("Localize.paid");
        }elseif($sdArr['table'] == 'journeylists'){
            echo lang("Localize.ticket").''.lang("Localize.journey_list");
        }elseif($sdArr['table'] == 'paymethodtotals'){
            echo lang("Localize.payment_method").''.lang("Localize.total").''.lang("Localize.amount");
        }elseif($sdArr['table'] == 'temporarybooks'){
            echo lang("Localize.temporary").''.lang("Localize.book");
        }elseif($sdArr['table'] == 'refunds'){
            echo lang("Localize.book").''.lang("Localize.refund");
        }elseif($sdArr['table'] == 'agenttotals'){
            echo lang("Localize.agent").''.lang("Localize.total");
        }elseif($sdArr['table'] == 'agentcommissions'){
            echo lang("Localize.agent").''.lang("Localize.commission");
        }elseif($sdArr['table'] == 'coupons'){
            echo lang("Localize.coupon");
        }elseif($sdArr['table'] == 'coupondiscounts'){
            echo lang("Localize.coupon").' '.lang("Localize.discount");
        }elseif($sdArr['table'] == 'cancels'){
            echo lang("Localize.ticket").' '.lang("Localize.cancel");
        }elseif($sdArr['table'] == 'locations'){
            echo lang("Localize.location");
        }elseif($sdArr['table'] == 'stands'){
            echo lang("Localize.stand");
        }elseif($sdArr['table'] == 'schedules'){
            echo lang("Localize.schedule");
        }elseif($sdArr['table'] == 'facilitys'){
            echo lang("Localize.facility");
        }elseif($sdArr['table'] == 'employees'){
            echo lang("Localize.employee");
        }elseif($sdArr['table'] == 'users'){
            echo lang("Localize.user");
        }elseif($sdArr['table'] == 'user_details'){
            echo lang("Localize.user").' '.lang("Localize.details");
        }elseif($sdArr['table'] == 'agents'){
            echo lang("Localize.agent");
        }elseif($sdArr['table'] == 'fitnesses'){
            echo lang("Localize.fitness");
        }else{
            echo $sdArr['title'];
        }
        ?>
        </h5>
        
        <ul>
    
            <?php foreach ($sdArr['data'] as $sd) : ?> 
                <li style="list-style-type: none;"><?php echo sprintf('%s (%s)', $sd->name, $sd->id) ; ?></li>
            <?php endforeach ?>
    
        </ul>
        <br />
    <?php endforeach ?>
    
    <div class="text-end">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Confirm</button>
    </div>
</form>
