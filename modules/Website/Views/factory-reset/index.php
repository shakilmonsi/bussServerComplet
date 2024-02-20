<?php echo $this->extend('template/admin/main') ?>

<?php $this->section('content') ?>
<?php echo $this->include('common/message') ?>

<div class="card mb-4">
    <div class="card-body">
        <p class="fw-bold">Select modules to reset</p>
        <ul class="tree">
            <li>
                <a href="#"><?php echo $session->get('logotext'); ?></a>
                <ul>
                    <li class="module-item active active-location lock"> <a href="" data-menu="agent" data-relative='[]'>agents</a>
                        <ul>
                            <li> <a href="#">agent commissions</a> </li>
                            <li> <a href="#">agent totals</a> </li>
                            <li> <a href="#">agent payments</a> </li>
                            <li> <a href="#">tickets</a>
                                <ul>
                                    <li> <a href="#">agent commissions</a> </li>
                                    <li> <a href="#">agent totals</a> </li>
                                    <li> <a href="#">cancels</a> </li>
                                    <li> <a href="#">coupon discounts</a> </li>
                                    <li> <a href="#">payment gateway total amount</a> </li>
                                    <li> <a href="#">payment method total amount</a> </li>
                                    <li> <a href="#">ticket journey lists</a> </li>
                                    <li> <a href="#">partial paids</a> </li>
                                    <li> <a href="#">ratings</a> </li>
                                    <li> <a href="#">refunds</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="module-item active"> <a href="" data-menu="account" data-relative='[]'>accounts</a> </li>

                    <li class="module-item active"> <a href="" data-menu="fleet" data-relative='["vehicle"]'>fleets</a>
                        <ul>
                            <li> <a href="#">vehicles</a>
                                <ul>
                                    <li> <a href="#">fitnesses</a> </li>
                                    <li> <a href="#">trips</a>
                                        <ul>
                                            <li> <a href="#">subtrips</a>
                                                <ul>
                                                    <li> <a href="#">coupons</a>
                                                        <ul>
                                                            <li> <a href="#">coupon discounts</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li> <a href="#">tickets</a>
                                                        <ul>
                                                            <li> <a href="#">agent commissions</a> </li>
                                                            <li> <a href="#">agent totals</a> </li>
                                                            <li> <a href="#">cancels</a> </li>
                                                            <li> <a href="#">coupon discounts</a> </li>
                                                            <li> <a href="#">payment gateway total amount</a> </li>
                                                            <li> <a href="#">payment method total amount</a> </li>
                                                            <li> <a href="#">ticket journey lists</a> </li>
                                                            <li> <a href="#">partial paids</a> </li>
                                                            <li> <a href="#">ratings</a> </li>
                                                            <li> <a href="#">refunds</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li> <a href="#">temporary books</a> </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#">pick drop locations</a>
                                                <ul>
                                                    <li> <a href="#">tickets</a>
                                                        <ul>
                                                            <li> <a href="#">agent commissions</a> </li>
                                                            <li> <a href="#">agent totals</a> </li>
                                                            <li> <a href="#">cancels</a> </li>
                                                            <li> <a href="#">coupon discounts</a> </li>
                                                            <li> <a href="#">payment gateway total amount</a> </li>
                                                            <li> <a href="#">payment method total amount</a> </li>
                                                            <li> <a href="#">ticket journey lists</a> </li>
                                                            <li> <a href="#">partial paids</a> </li>
                                                            <li> <a href="#">ratings</a> </li>
                                                            <li> <a href="#">refunds</a> </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#">staff assigns</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">vehical images</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="module-item active active-fleet lock"> <a href="" data-menu="vehicle" data-relative='["fitness", "trip"]'>vehicles</a>
                        <ul>
                            <li> <a href="#">fitnesses</a> </li>
                            <li> <a href="#">trips</a>
                                <ul>
                                    <li> <a href="#">sub trips</a>
                                        <ul>
                                            <li> <a href="#">coupons</a>
                                                <ul>
                                                    <li> <a href="#">coupon discounts</a> </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#">tickets</a>
                                                <ul>
                                                    <li> <a href="#">agent commissions</a> </li>
                                                    <li> <a href="#">agent totals</a> </li>
                                                    <li> <a href="#">cancels</a> </li>
                                                    <li> <a href="#">coupon discounts</a> </li>
                                                    <li> <a href="#">payment gateway total amount</a> </li>
                                                    <li> <a href="#">payment method total amount</a> </li>
                                                    <li> <a href="#">ticket journey lists</a> </li>
                                                    <li> <a href="#">partial paids</a> </li>
                                                    <li> <a href="#">ratings</a> </li>
                                                    <li> <a href="#">refunds</a> </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#">temporary books</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">pick drop locations</a>
                                        <ul>
                                            <li> <a href="#">tickets</a>
                                                <ul>
                                                    <li> <a href="#">agent commissions</a> </li>
                                                    <li> <a href="#">agent totals</a> </li>
                                                    <li> <a href="#">cancels</a> </li>
                                                    <li> <a href="#">coupon discounts</a> </li>
                                                    <li> <a href="#">payment gateway total amount</a> </li>
                                                    <li> <a href="#">payment method total amount</a> </li>
                                                    <li> <a href="#">ticket journey lists</a> </li>
                                                    <li> <a href="#">partial paids</a> </li>
                                                    <li> <a href="#">ratings</a> </li>
                                                    <li> <a href="#">refunds</a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">staff assigns</a> </li>
                                </ul>
                            </li>
                            <li> <a href="#">vehical images</a> </li>
                        </ul>
                    </li>

                    <li class="module-item active active-vehicle lock"> <a href="" data-menu="fitness" data-relative='[]'>fitness</a> </li>

                    <li class="module-item active"> <a href="" data-menu="location" data-relative='["agent", "trip"]'>locations</a>
                        <ul>
                            <li> <a href="#">agents</a>
                                <ul>
                                    <li> <a href="#">agent commissions</a> </li>
                                    <li> <a href="#">agent totals</a> </li>
                                    <li> <a href="#">agent payments</a> </li>
                                    <li> <a href="#">tickets</a>
                                        <ul>
                                            <li> <a href="#">agent commissions</a> </li>
                                            <li> <a href="#">agent totals</a> </li>
                                            <li> <a href="#">cancels</a> </li>
                                            <li> <a href="#">coupon discounts</a> </li>
                                            <li> <a href="#">payment gateway total amount</a> </li>
                                            <li> <a href="#">payment method total amount</a> </li>
                                            <li> <a href="#">ticket journey lists</a> </li>
                                            <li> <a href="#">partial paids</a> </li>
                                            <li> <a href="#">ratings</a> </li>
                                            <li> <a href="#">refunds</a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li> <a href="#">trips</a>
                                <ul>
                                    <li> <a href="#">subtrips</a>
                                        <ul>
                                            <li> <a href="#">coupons</a>
                                                <ul>
                                                    <li> <a href="#">coupon discounts</a> </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#">tickets</a>
                                                <ul>
                                                    <li> <a href="#">agent commissions</a> </li>
                                                    <li> <a href="#">agent totals</a> </li>
                                                    <li> <a href="#">cancels</a> </li>
                                                    <li> <a href="#">coupon discounts</a> </li>
                                                    <li> <a href="#">payment gateway total amount</a> </li>
                                                    <li> <a href="#">payment method total amount</a> </li>
                                                    <li> <a href="#">ticket journey lists</a> </li>
                                                    <li> <a href="#">partial paids</a> </li>
                                                    <li> <a href="#">ratings</a> </li>
                                                    <li> <a href="#">refunds</a> </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#">temporary books</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">pick drop locations</a>
                                        <ul>
                                            <li> <a href="#">tickets</a>
                                                <ul>
                                                    <li> <a href="#">agent commissions</a> </li>
                                                    <li> <a href="#">agent totals</a> </li>
                                                    <li> <a href="#">cancels</a> </li>
                                                    <li> <a href="#">coupon discounts</a> </li>
                                                    <li> <a href="#">payment gateway total amount</a> </li>
                                                    <li> <a href="#">payment method total amount</a> </li>
                                                    <li> <a href="#">ticket journey lists</a> </li>
                                                    <li> <a href="#">partial paids</a> </li>
                                                    <li> <a href="#">ratings</a> </li>
                                                    <li> <a href="#">refunds</a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">staff assigns</a> </li>
                                </ul>
                            </li>
                            <li> <a href="#">subtrips</a>
                                <ul>
                                    <li> <a href="#">coupons</a>
                                        <ul>
                                            <li> <a href="#">coupon discounts</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">tickets</a>
                                        <ul>
                                            <li> <a href="#">agent commissions</a> </li>
                                            <li> <a href="#">agent totals</a> </li>
                                            <li> <a href="#">cancels</a> </li>
                                            <li> <a href="#">coupon discounts</a> </li>
                                            <li> <a href="#">payment gateway total amount</a> </li>
                                            <li> <a href="#">payment method total amount</a> </li>
                                            <li> <a href="#">ticket journey lists</a> </li>
                                            <li> <a href="#">partial paids</a> </li>
                                            <li> <a href="#">ratings</a> </li>
                                            <li> <a href="#">refunds</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">temporary books</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="module-item active"> <a href="" data-menu="stand" data-relative='[]'>stands</a>
                        <ul>
                            <li> <a href="#">pick drop locations</a>
                                <ul>
                                    <li> <a href="#">tickets</a>
                                        <ul>
                                            <li> <a href="#">agent commissions</a> </li>
                                            <li> <a href="#">agent totals</a> </li>
                                            <li> <a href="#">cancels</a> </li>
                                            <li> <a href="#">coupon discounts</a> </li>
                                            <li> <a href="#">payment gateway total amount</a> </li>
                                            <li> <a href="#">payment method total amount</a> </li>
                                            <li> <a href="#">ticket journey lists</a> </li>
                                            <li> <a href="#">partial paids</a> </li>
                                            <li> <a href="#">ratings</a> </li>
                                            <li> <a href="#">refunds</a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="module-item active"> <a href="" data-menu="schedule" data-relative='["trip"]'>schedules</a>
                        <ul>
                            <li> <a href="#">trips</a>
                                <ul>
                                    <li> <a href="#">subtrips</a>
                                        <ul>
                                            <li> <a href="#">coupons</a>
                                                <ul>
                                                    <li> <a href="#">coupon discounts</a> </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#">tickets</a>
                                                <ul>
                                                    <li> <a href="#">agent commissions</a> </li>
                                                    <li> <a href="#">agent totals</a> </li>
                                                    <li> <a href="#">cancels</a> </li>
                                                    <li> <a href="#">coupon discounts</a> </li>
                                                    <li> <a href="#">payment gateway total amount</a> </li>
                                                    <li> <a href="#">payment method total amount</a> </li>
                                                    <li> <a href="#">ticket journey lists</a> </li>
                                                    <li> <a href="#">partial paids</a> </li>
                                                    <li> <a href="#">ratings</a> </li>
                                                    <li> <a href="#">refunds</a> </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#">temporary books</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">pick drop locations</a>
                                        <ul>
                                            <li> <a href="#">tickets</a>
                                                <ul>
                                                    <li> <a href="#">agent commissions</a> </li>
                                                    <li> <a href="#">agent totals</a> </li>
                                                    <li> <a href="#">cancels</a> </li>
                                                    <li> <a href="#">coupon discounts</a> </li>
                                                    <li> <a href="#">payment gateway total amount</a> </li>
                                                    <li> <a href="#">payment method total amount</a> </li>
                                                    <li> <a href="#">ticket journey lists</a> </li>
                                                    <li> <a href="#">partial paids</a> </li>
                                                    <li> <a href="#">ratings</a> </li>
                                                    <li> <a href="#">refunds</a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">staff assigns</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="module-item active"> <a href="" data-menu="schedulefilter" data-relative='[]'>schedule filters</a> </li>

                    <li class="module-item active"> <a href="" data-menu="tax" data-relative='[]'>tax list</a> </li>

                    <li class="module-item active active-vehicle active-location active-schedule lock"> <a href="" data-menu="trip" data-relative='["subtrip"]'>trips</a>
                        <ul>
                            <li> <a href="#">subtrips</a>
                                <ul>
                                    <li> <a href="#">coupons</a>
                                        <ul>
                                            <li> <a href="#">coupon discounts</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">tickets</a>
                                        <ul>
                                            <li> <a href="#">agent commissions</a> </li>
                                            <li> <a href="#">agent totals</a> </li>
                                            <li> <a href="#">cancels</a> </li>
                                            <li> <a href="#">coupon discounts</a> </li>
                                            <li> <a href="#">payment gateway total amount</a> </li>
                                            <li> <a href="#">payment method total amount</a> </li>
                                            <li> <a href="#">ticket journey lists</a> </li>
                                            <li> <a href="#">partial paids</a> </li>
                                            <li> <a href="#">ratings</a> </li>
                                            <li> <a href="#">refunds</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">temporary books</a> </li>
                                </ul>
                            </li>
                            <li> <a href="#">pick drop locations</a>
                                <ul>
                                    <li> <a href="#">tickets</a>
                                        <ul>
                                            <li> <a href="#">agent commissions</a> </li>
                                            <li> <a href="#">agent totals</a> </li>
                                            <li> <a href="#">cancels</a> </li>
                                            <li> <a href="#">coupon discounts</a> </li>
                                            <li> <a href="#">payment gateway total amount</a> </li>
                                            <li> <a href="#">payment method total amount</a> </li>
                                            <li> <a href="#">ticket journey lists</a> </li>
                                            <li> <a href="#">partial paids</a> </li>
                                            <li> <a href="#">ratings</a> </li>
                                            <li> <a href="#">refunds</a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li> <a href="#">staff assigns</a> </li>
                        </ul>
                    </li>

                    <li class="module-item active active-trip lock"> <a href="" data-menu="subtrip" data-relative='["coupon", "ticket", "rating"]'>sub trips</a>
                        <ul>
                            <li> <a href="#">coupons</a>
                                <ul>
                                    <li> <a href="#">coupon discounts</a> </li>
                                </ul>
                            </li>
                            <li> <a href="#">tickets</a>
                                <ul>
                                    <li> <a href="#">agent commissions</a> </li>
                                    <li> <a href="#">agent totals</a> </li>
                                    <li> <a href="#">cancels</a> </li>
                                    <li> <a href="#">coupon discounts</a> </li>
                                    <li> <a href="#">payment gateway total amount</a> </li>
                                    <li> <a href="#">payment method total amount</a> </li>
                                    <li> <a href="#">ticket journey lists</a> </li>
                                    <li> <a href="#">partial paids</a> </li>
                                    <li> <a href="#">ratings</a> </li>
                                    <li> <a href="#">refunds</a> </li>
                                </ul>
                            </li>
                            <li> <a href="#">temporary books</a> </li>
                        </ul>
                    </li>

                    <li class="module-item active active-subtrip lock"> <a href="" data-menu="ticket" data-relative='[]'>tickets</a>
                        <ul>
                            <li> <a href="#">agent commissions</a> </li>
                            <li> <a href="#">agent totals</a> </li>
                            <li> <a href="#">cancels</a> </li>
                            <li> <a href="#">coupon discounts</a> </li>
                            <li> <a href="#">payment gateway total amount</a> </li>
                            <li> <a href="#">payment method total amount</a> </li>
                            <li> <a href="#">ticket journey lists</a> </li>
                            <li> <a href="#">partial paids</a> </li>
                            <li> <a href="#">ratings</a> </li>
                            <li> <a href="#">refunds</a> </li>
                        </ul>
                    </li>

                    <li class="module-item active active-subtrip lock"> <a href="" data-menu="coupon" data-relative="[]">coupons</a>
                        <ul>
                            <li> <a href="#">coupon discounts</a> </li>
                        </ul>
                    </li>

                    <li class="module-item active"> <a href="" data-menu="user" data-relative="[]">users</a>
                        <ul>
                            <li> <a href="#" data-menu="user_details">user details</a></li>
                            <li> <a href="#">tickets</a>
                                <ul>
                                    <li> <a href="#">agent commissions</a> </li>
                                    <li> <a href="#">agent totals</a> </li>
                                    <li> <a href="#">cancels</a> </li>
                                    <li> <a href="#">coupon discounts</a> </li>
                                    <li> <a href="#">payment gateway total amount</a> </li>
                                    <li> <a href="#">payment method total amount</a> </li>
                                    <li> <a href="#">ticket journey lists</a> </li>
                                    <li> <a href="#">partial paids</a> </li>
                                    <li> <a href="#">ratings</a> </li>
                                    <li> <a href="#">refunds</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="module-item active"> <a href="" data-menu="employee" data-relative="[]">employee</a>
                        <ul>
                            <li> <a href="#">staff assings</a> </li>
                        </ul>
                    </li>

                    <li class="module-item active active-subtrip lock"> <a href="" data-menu="rating" data-relative="[]">ratings</a> </li>
                </ul>
            </li>
        </ul>

        <div class="agreement-section mt-4">
            <p class="alert alert-warning ">
                <i class="fas fa-exclamation-triangle"></i>
                <strong>Warning:</strong> This action will delete all data from the database and cannot be undone. Please
                make sure you have a backup of your data before proceeding and don't refresh the page
                until the process is complete.
            </p>
            <div class="form-group mb-2">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="resetCheckbox">
                    <label class="form-check-label text-danger" for="resetCheckbox">I understand that performing a factory reset will erase all data and settings.</label>
                </div>
            </div>
            <button class="btn btn-danger" id="resetSubmit" disabled>Factory Reset</button>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content confirmation-form">
            <div class="modal-body">
                <p class="alert alert-danger" style="text-align: justify;">
                    <b>Caution</b>: Are you certain about initiating a factory reset?
                    This action is irreversible. If you are absolutely sure, kindly enter your password and click the button below to proceed with the factory reset process.
                    Alternatively, you can click the close button to cancel the process.
                    <br><br>
                    Please ensure that you have created a backup of your data. It is crucial not to refresh the page during the process until it is fully completed.
                </p>

                <input type="hidden" id="password_verify_endpoint" value="<?php echo base_url(route_to('info-passangerdata')); ?>">
                <input type="hidden" id="factory_reset_endpoint" value="<?php echo base_url(route_to('process-factory-reset')); ?>">
                <input type="hidden" id="redirect_url" value="<?php echo base_url(route_to('admin-home')); ?>">
                <input type="password" class="form-control" id="factory_reset_password" name="factory_reset_password" placeholder="Enter Your password" autocomplete="off">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger" id="factory_reset_anyway">Factory Reset Anyway</button>
            </div>
        </div>
        <div class="modal-content reset-processing-loader" style="display: none;">
            <div class="processing-container">
                <div class="text-center">
                    <h2 class="mb-3">Factory Reset Processing</h2>
                    <div class="spinner-border text-primary processing-spinner" role="status" style="width: 3em; height: 3em;">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <p class="mt-3 mb-1">Please wait while the factory reset is in progress.</p>
                    <p class="m-0" id="process-placeholder"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>

<?php $this->section('css') ?>
<style>
    .tree {
        max-height: 50vh;
        overflow: auto;
        padding: 1rem;
        border: 1px solid #ddd;
        box-shadow: inset 2px 2px 6px -3px #ccc;
    }

    .tree li a {
        text-transform: capitalize;
    }

    .tree>li>ul>li::before {
        content: '\2610';
        width: auto;
        height: auto;
        top: 0;
        left: -5px;
        border-top: 0;
        background-color: #fff;
    }

    .tree>li>ul>li:last-child::before {
        top: 0;
    }

    .tree>li>ul>li.active::before,
    .tree>li>ul>li[class*="active-"]::before {
        content: '\2705';
        left: -7px;
    }

    .tree>li>ul>li.lock::before {
        filter: grayscale(1);
    }

    .tree>li>a {
        font-weight: 500;
    }

    .tree>li>ul>li>ul {
        opacity: .4;
    }

    .tree>li>ul>li.active>ul {
        opacity: .8;
    }

    .processing-container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 3rem 0;
    }

    .processing-spinner {
        margin-right: 10px;
    }
</style>
<?php $this->endSection() ?>

<?php $this->section('js') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script>
    var factoryReset = {
        resetModules: null,
        $currentClickedItem: null,

        init: function() {
            $('.module-item').on('click', '>a', function(e) {
                e.preventDefault();
                var $envoker = $(this),
                    $moduleItem = $envoker.parent(),
                    menuName = $envoker.data('menu'),
                    relatives = $envoker.data('relative');

                if ($moduleItem.hasClass('lock')) {
                    return false;
                }

                $moduleItem.toggleClass('active');

                factoryReset.$currentClickedItem = $moduleItem;
                factoryReset.recursive_relative_toggle_active(relatives, $moduleItem);
                factoryReset.toggle_submit_button();
            });

            $('#resetSubmit').on('click', function() {
                factoryReset.resetModules = [];

                $('.module-item.active').each(function(i, v) {
                    factoryReset.resetModules.push($('>a', v).data('menu'));
                });

                $('#confirmationModal').modal('show');
            });

            $('#factory_reset_anyway').on('click', function() {
                var password = $('#factory_reset_password').val(),
                    factory_reset_url = $('#factory_reset_endpoint').val(),
                    redirect_url = $('#redirect_url').val(),
                    request_payload = {
                        password: password,
                        modules: factoryReset.resetModules
                    },
                    promises = [];

                if (factoryReset.resetModules && password) {
                    $('#factory_reset_anyway').text('Varifying Password').prop('disabled', true);

                    $.post(factory_reset_url, request_payload, function(response) {
                        if (response.success) {
                            // display processing message
                            $('.confirmation-form').hide();
                            $('.reset-processing-loader').show();
    
                            $.each(factoryReset.resetModules, function(i, v) {
                                var timeout = Math.floor(Math.random() * (1500 - 600 + 1)) + 600,
                                    promise = new Promise(resolve => {
                                        setTimeout(() => {
                                            $('#process-placeholder').text('Resetting ' + v + '...');
                                            resolve();
                                        }, i * timeout);
                                    });
    
                                promises.push(promise);
                            });
    
                            return Promise.all(promises).then(function() {
                                $('#process-placeholder').text('completed');
                                location.href = redirect_url;
                            });
                        }

                        alert(response.message);
                    }, "json").always(function() {
                        $('#factory_reset_anyway').text('Factory Reset Anyway').prop('disabled', false);
                    });
                }
            });

            $('#resetCheckbox').on('change', function() {
                factoryReset.toggle_submit_button();
            });
        },

        recursive_relative_toggle_active: function(relatives, $module) {
            $.each(relatives, function(i, v) {
                var $relativeEnvoker = $(`[data-menu=${v}]`),
                    $relativeModuleItem = $relativeEnvoker.parent(),
                    relativeRelatives = $relativeEnvoker.data('relative'),
                    activeClass = $module.find('>a').data('menu');

                if (factoryReset.$currentClickedItem.hasClass(`active`) !== false) {
                    $relativeModuleItem.addClass(`active active-${activeClass} lock`);
                } else {
                    if (!$module.hasClass('active')) {
                        $relativeModuleItem.removeClass(`active-${activeClass}`);

                        var relatedModuleItemClassArr = $relativeModuleItem.get(0).className.split(' '),
                            relatedModuleItemClassHasActive = relatedModuleItemClassArr.some(c => c.startsWith('active-'));

                        if (!relatedModuleItemClassHasActive) {
                            $relativeModuleItem.removeClass('active lock');
                        }
                    }

                }

                if (relativeRelatives.length) {
                    factoryReset.recursive_relative_toggle_active(relativeRelatives, $relativeModuleItem);
                }
            });
        },

        toggle_submit_button: function() {
            let toggle = $('#resetCheckbox').is(':checked') && $('.module-item.active').length;
            $('#resetSubmit').prop('disabled', !toggle);
        }
    };

    factoryReset.init();
</script>
<?php $this->endSection() ?>