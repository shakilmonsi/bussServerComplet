<?php

/**
 * @var \App\Libraries\Rolepermission $rolepermissionLibrary
 * @var string $menuname Current menuname
 */

$fleet = "fleet";
$fleet = $rolepermissionLibrary->menu($fleet);

$fitness = "fitness";
$fitness = $rolepermissionLibrary->menu($fitness);

$location = "location";
$location = $rolepermissionLibrary->menu($location);

$schedule = "schedule";
$schedule = $rolepermissionLibrary->menu($schedule);

$tax = "tax";
$tax = $rolepermissionLibrary->menu($tax);

$payment_method = "payment_method";
$payment_method = $rolepermissionLibrary->menu($payment_method);

$trip = "trip";
$trip = $rolepermissionLibrary->menu($trip);

$coupon = "coupon";
$coupon = $rolepermissionLibrary->menu($coupon);

$rating = "rating";
$rating = $rolepermissionLibrary->menu($rating);

$role = "role";
$role = $rolepermissionLibrary->menu($role);
?>

<?php if (($fleet == true) || ($fitness == true)  || ($location == true)  || ($schedule == true)  || ($tax == true)  || ($payment_method == true)  || ($trip == true)  || ($coupon == true) || ($rating == true) || ($role == true)) : ?>
    <li>
        <a class="has-arrow material-ripple" href="#">
            <i class="fas fa-cogs"></i>
            <?php echo lang("Localize.software_settings") ?>
        </a>

        <?php if ($fleet == true) : ?>
            <!-- Fleet menu  -->
            <ul class="nav-second-level">
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <?php echo lang("Localize.fleet") ?>
                    </a>

                    <ul class="nav-third-level">
                        <?php
                        $fleet_list = "fleet_list";
                        $fleet_list_result = $rolepermissionLibrary->read($fleet_list);
                        ?>

                        <?php if ($fleet_list_result == true) : ?>
                            <li class="<?php echo ($menuname == "fleets") ? "mm-active" : ""  ?>">
                                <a href="<?php echo base_url(route_to('index-fleet')) ?>">
                                    <?php echo lang("Localize.fleet_list") ?>
                                </a>
                            </li>
                        <?php endif ?>

                        <?php
                        $vehicle_list = "vehicle_list";
                        $vehicle_list_result = $rolepermissionLibrary->read($vehicle_list);
                        ?>
                        <?php if ($vehicle_list_result == true) : ?>
                            <li class="<?php echo ($menuname == "vehicles") ? "mm-active" : ""  ?>">
                                <a href="<?php echo base_url(route_to('index-vehicle')) ?>">
                                    <?php echo lang("Localize.vehicle_list") ?>
                                </a>
                            </li>
                        <?php endif ?>
                    </ul>
                </li>
            </ul>
            <!-- Fleet menu  -->
        <?php endif ?>

        <?php if ($fitness == true) : ?>
            <!-- Fitness Menu -->
            <ul class="nav-second-level">
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <?php echo lang("Localize.fitness") ?>
                    </a>

                    <ul class="nav-third-level">
                        <?php
                        $fitness_list = "fitness_list";
                        $fitness_list_result = $rolepermissionLibrary->read($fitness_list);
                        ?>
                        <?php if ($fitness_list_result == true) : ?>
                            <li class="<?php echo ($menuname == "fitnesss") ? "mm-active" : ""  ?>">
                                <a href="<?php echo base_url(route_to('index-fitness')) ?>">
                                    <?php echo lang("Localize.fitness_list") ?>
                                </a>
                            </li>
                        <?php endif ?>
                    </ul>
                </li>
            </ul>
        <?php endif ?>

        <?php if ($location == true) : ?>
            <ul class="nav-second-level">
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <?php echo lang("Localize.location") ?>
                    </a>

                    <ul class="nav-third-level">
                        <?php
                        $location_list = "location_list";
                        $location_list_result = $rolepermissionLibrary->read($location_list);
                        ?>
                        <?php if ($location_list_result == true) : ?>
                            <li class="<?php echo ($menuname == "locations") ? "mm-active" : "" ?>">
                                <a href="<?php echo base_url(route_to('index-location')) ?>">
                                    <?php echo lang("Localize.location_list") ?>
                                </a>
                            </li>
                        <?php endif ?>

                        <?php
                        $stand_list = "stand_list";
                        $stand_list_result = $rolepermissionLibrary->read($stand_list);
                        ?>
                        <?php if ($stand_list_result == true) : ?>
                            <li class="<?php echo ($menuname == "stands") ? "mm-active" : "" ?>">
                                <a href="<?php echo base_url(route_to('index-stand')) ?>">
                                    <?php echo lang("Localize.stand_list") ?>
                                </a>
                            </li>
                        <?php endif ?>
                    </ul>
                </li>
            </ul>
            <!-- location menu  -->
        <?php endif ?>

        <?php if ($schedule == true) : ?>
            <!-- schedule menu  -->
            <ul class="nav-second-level">
                <li class=" <?php echo ($menuname == "schedules" || $menuname == "filters") ? "mm-active" : "" ?>">
                    <a class="has-arrow" href="#" aria-expanded="false"> <?php echo lang("Localize.schedule") ?> </a>
                    <ul class="nav-third-level">
                        <?php
                        $schedule_list = "schedule_list";
                        $schedule_list_result = $rolepermissionLibrary->read($schedule_list);
                        ?>
                        <?php if ($schedule_list_result == true) : ?>
                            <li><a href="<?php echo base_url(route_to('index-schedule')) ?>"><?php echo lang("Localize.schedule_list") ?></a></li>
                        <?php endif ?>

                        <?php
                        $schedule_filter_list = "schedule_filter_list";
                        $schedule_filter_list_result = $rolepermissionLibrary->read($schedule_filter_list);
                        ?>
                        <?php if ($schedule_filter_list_result == true) : ?>
                            <li><a href="<?php echo base_url(route_to('index-schedulefilter')) ?>"><?php echo lang("Localize.schedule_filter_list") ?></a></li>
                        <?php endif ?>

                    </ul>
                </li>

            </ul>
            <!-- schedule menu  -->
        <?php endif ?>

        <?php if ($tax == true) : ?>
            <!-- Tax menu -->
            <ul class="nav-second-level">
                <li class=" <?php echo ($menuname == "taxs") ? "mm-active" : "" ?>">
                    <a class="has-arrow" href="#" aria-expanded="false"> <?php echo lang("Localize.tax") ?></a>
                    <ul class="nav-third-level">
                        <?php
                        $tax_list = "tax_list";
                        $tax_list_result = $rolepermissionLibrary->read($tax_list);
                        ?>
                        <?php if ($tax_list_result == true) : ?>
                            <li><a href="<?php echo base_url(route_to('index-tax')) ?>"><?php echo lang("Localize.tax_list") ?></a></li>
                        <?php endif ?>
                    </ul>
                </li>
            </ul>
            <!-- Tax menu -->
        <?php endif ?>

        <?php if ($payment_method == true) : ?>
            <!-- payment method menu -->
            <ul class="nav-second-level">
                <li class=" <?php echo ($menuname == "paymethods" || $menuname == "paymentgateways") ? "mm-active" : "" ?>">
                    <a class="has-arrow" href="#" aria-expanded="false"> <?php echo lang("Localize.payment_method") ?> </a>
                    <ul class="nav-third-level">
                        <?php
                        $payment_method_list = "payment_method_list";
                        $payment_method_list_result = $rolepermissionLibrary->read($payment_method_list);
                        ?>
                        <?php if ($payment_method_list_result == true) : ?>
                            <li><a href="<?php echo base_url(route_to('index-paymethod')) ?>"><?php echo lang("Localize.payment_method_list") ?> </a></li>
                        <?php endif ?>

                        <?php
                        $payment_gateway_list = "payment_gateway_list";
                        $payment_gateway_list_result = $rolepermissionLibrary->read($payment_gateway_list);
                        ?>
                        <?php if ($payment_gateway_list_result == true) : ?>
                            <li><a href="<?php echo base_url(route_to('index-paymentgateway')) ?>"><?php echo lang("Localize.payment_gateway_list") ?> </a></li>
                        <?php endif ?>
                    </ul>
                </li>
            </ul>
            <!-- payment method menu -->
        <?php endif ?>

        <?php if ($trip == true) : ?>
            <!-- Trip menu -->
            <ul class="nav-second-level">
                <li class="<?php echo ($menuname == "trips" || $menuname == "facilitys" || $menuname == "subtrips" || $menuname == "discountround") ? "mm-active" : ""  ?>">
                    <a class="has-arrow" href="#" aria-expanded="false"> <?php echo lang("Localize.trip") ?> </a>
                    <ul class="nav-third-level">
                        <?php
                        $facility_list = "facility_list";
                        $facility_list_result = $rolepermissionLibrary->read($facility_list);
                        ?>
                        <?php if ($facility_list_result == true) : ?>
                            <li><a href="<?php echo base_url(route_to('index-facility')) ?>"><?php echo lang("Localize.facility_list") ?></a></li>
                        <?php endif ?>

                        <?php
                        $add_trip = "add_trip";
                        $add_trip_result = $rolepermissionLibrary->read($add_trip);
                        ?>
                        <?php if ($add_trip_result == true) : ?>
                            <li><a href="<?php echo base_url(route_to('new-trip')) ?>"><?php echo lang("Localize.add_trip") ?></a></li>
                        <?php endif ?>

                        <?php
                        $trip_list = "trip_list";
                        $trip_list_result = $rolepermissionLibrary->read($trip_list);
                        ?>
                        <?php if ($trip_list_result == true) : ?>
                            <li><a href="<?php echo base_url(route_to('index-trip')) ?>"><?php echo lang("Localize.trip_list") ?></a></li>
                        <?php endif ?>

                        <?php
                        $discount_round_trip = "discount_round_trip";
                        $discount_round_trip_result = $rolepermissionLibrary->read($discount_round_trip);
                        ?>

                        <?php if ($discount_round_trip_result == true) : ?>
                            <li><a href="<?php echo base_url(route_to('index-roundtripdiscount')) ?>"><?php echo lang("Localize.discount_round_trip") ?></a></li>
                        <?php endif ?>

                    </ul>
                </li>

            </ul>
            <!-- Trip menu -->
        <?php endif ?>

        <?php if ($coupon == true) : ?>
            <!-- Coupon menu -->
            <ul class="nav-second-level">
                <li class="<?php echo ($menuname == "coupons") ? "mm-active" : ""  ?>">
                    <a class="has-arrow" href="#" aria-expanded="false"> <?php echo lang("Localize.coupon") ?> </a>
                    <ul class="nav-third-level">
                        <?php
                        $coupon_list = "coupon_list";
                        $coupon_list_result = $rolepermissionLibrary->read($coupon_list);
                        ?>
                        <?php if ($coupon_list_result == true) : ?>
                            <li><a href="<?php echo base_url(route_to('index-coupon')) ?>"><?php echo lang("Localize.coupon_list") ?></a></li>
                        <?php endif ?>
                    </ul>
                </li>
            </ul>
            <!-- Coupon menu -->
        <?php endif ?>

        <?php if ($rating == true) : ?>
            <!-- Rating menu -->
            <ul class="nav-second-level">
                <li class="<?php echo ($menuname == "ratings") ? "mm-active" : ""  ?>">
                    <a class="has-arrow" href="#" aria-expanded="false"> <?php echo lang("Localize.rating") ?> </a>
                    <ul class="nav-third-level">
                        <?php
                        $rating_list = "rating_list";
                        $rating_list_result = $rolepermissionLibrary->read($rating_list);
                        ?>
                        <?php if ($rating_list_result == true) : ?>
                            <li> <a href="<?php echo base_url(route_to('index-rating')) ?>"><?php echo lang("Localize.rating_list") ?></a></li>
                        <?php endif ?>

                    </ul>
                </li>
            </ul>
            <!-- Rating menu -->
        <?php endif ?>

        <?php if ($role == true) : ?>
            <!-- Role menu  -->
            <ul class="nav-second-level">
                <li class="<?php echo ($menuname == "roles" || $menuname == "permissions") ? "mm-active" : ""  ?>">
                    <a class="has-arrow" href="#" aria-expanded="false"> <?php echo lang("Localize.role") ?> </a>
                    <ul class="nav-third-level">
                        <?php
                        $role_list = "role_list";
                        $role_list_result = $rolepermissionLibrary->read($role_list);
                        ?>
                        <?php if ($role_list_result == true) : ?>
                            <li><a href="<?php echo base_url(route_to('index-role')) ?>"><?php echo lang("Localize.role_list") ?></a></li>
                        <?php endif ?>

                        <?php
                        $permission_list = "permission_list";
                        $permission_list_result = $rolepermissionLibrary->read($permission_list);
                        ?>
                        <?php if ($permission_list_result == true) : ?>
                            <li><a href="<?php echo base_url(route_to('index-permission')) ?>"><?php echo lang("Localize.permission_list") ?></a></li>
                        <?php endif ?>

                    </ul>
                </li>
            </ul>
            <!-- Role menu  -->
        <?php endif ?>

        <?php
        $menu_list = "menu_list";
        $menu_list_result = $rolepermissionLibrary->read($menu_list);
        ?>
        <?php if ($menu_list_result == true) : ?>
            <ul class="nav-second-level">
                <li class="<?php echo ($menuname == "menus") ? "mm-active" : ""  ?>">
                    <a href="<?php echo base_url(route_to('index-menu')) ?>"><?php echo lang("Localize.menu_list") ?></a>
                </li>
            </ul>
        <?php endif ?>
    </li>

<?php endif ?>