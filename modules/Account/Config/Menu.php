<?php

/**
 * @var \App\Libraries\Rolepermission $rolepermissionLibrary
 * @var string $menuname Current menuname
 */

$ticketbooking = "ticket_booking";
$result = $rolepermissionLibrary->menu($ticketbooking);
?>

<?php if ($result == true) : ?>
    <!-- Ticket booking menu -->
    <li class="<?php echo ($menuname == "tickets") ? "mm-active" : ""  ?>">
        <a class="has-arrow material-ripple" href="#">
            <i class="fas fa-ticket-alt"></i>
            <?php echo lang("Localize.ticket_booking") ?>
        </a>

        <ul class="nav-second-level">

            <?php
            $book_ticket = "book_ticket";
            $book_ticket_result = $rolepermissionLibrary->read($book_ticket);
            ?>

            <?php if ($book_ticket_result == true) : ?>
                <li>
                    <a href="<?php echo base_url(route_to('new-ticket')) ?>">
                        <?php echo lang("Localize.book_ticket") ?>
                    </a>
                </li>
            <?php endif ?>

            <?php if ($rolepermissionLibrary->read("ticket_list")) : ?>
                <li>
                    <a href="<?php echo base_url(route_to('allbookinglist-ticket')) ?>">
                        <?php echo lang("Localize.ticket_list") ?>
                    </a>
                </li>
            <?php endif ?>

            <?php if ($rolepermissionLibrary->read("journey_list")) : ?>
                <li>
                    <a href="<?php echo base_url(route_to('journeylist-ticket')) ?>">
                        <?php echo lang("Localize.journey_list") ?>
                    </a>
                </li>
            <?php endif ?>

            <?php if ($rolepermissionLibrary->read("refund_list")) : ?>
                <li>
                    <a href="<?php echo base_url(route_to('ticketindex-refund')) ?>">
                        <?php echo lang("Localize.refund_list") ?>
                    </a>
                </li>
            <?php endif ?>

            <?php if ($rolepermissionLibrary->read("cancel_list")) : ?>
                <li>
                    <a href="<?php echo base_url(route_to('ticketindex-cancel')) ?>">
                        <?php echo lang("Localize.cancel_list") ?>
                    </a>
                </li>
            <?php endif ?>

            <?php if ($rolepermissionLibrary->read("book_time")) : ?>
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false"><?php echo lang("Localize.book_time") ?></a>
                    <ul class="nav-third-level">

                        <?php if ($rolepermissionLibrary->read("book_time_list")) : ?>
                            <li>
                                <a href="<?php echo base_url(route_to('index-maxtime')) ?>">
                                    <?php echo lang("Localize.booking_time_list") ?>
                                </a>
                            </li>
                        <?php endif ?>

                    </ul>
                </li>
            <?php endif ?>
        </ul>
    </li>
<?php endif ?>


<?php if ($rolepermissionLibrary->read("agent")) : ?>
    <li class="<?php echo ($menuname == "agents") ? "mm-active" : ""  ?>">
        <a class="has-arrow material-ripple" href="#">
            <i class="fas fa-user-shield"></i>
            <?php echo lang("Localize.agent") ?>
        </a>
        <ul class="nav-second-level">

            <?php if ($rolepermissionLibrary->read("agent_list")) : ?>
                <li>
                    <a href="<?php echo base_url(route_to('index-agent')) ?>">
                        <?php echo lang("Localize.agent_list") ?>
                    </a>
                </li>
            <?php endif ?>

        </ul>
    </li>
<?php endif ?>

<?php if ($rolepermissionLibrary->read("account")) : ?>
    <li class="<?php echo ($menuname == "accounts" || $menuname == "payagents") ? "mm-active" : ""  ?>">
        <a class="has-arrow material-ripple" href="#">
            <i class="fas fa-money-check-alt"></i>
            <?php echo lang("Localize.account") ?>
        </a>

        <ul class="nav-second-level">
            <?php if ($rolepermissionLibrary->read("transaction_list")) : ?>
                <li>
                    <a href="<?php echo base_url(route_to('index-account')) ?>">
                        <?php echo lang("Localize.transaction_list") ?>
                    </a>
                </li>
            <?php endif ?>
        </ul>

        <ul class="nav-second-level">
            <?php if ($rolepermissionLibrary->read("agent_payment")) : ?>
                <li>
                    <a href="<?php echo base_url(route_to('index-payagent')) ?>">
                        <?php echo lang("Localize.agent_payment") ?>
                    </a>
                </li>
            <?php endif ?>
        </ul>
    </li>
<?php endif ?>


<?php if ($rolepermissionLibrary->read("passanger")) : ?>
    <!-- Passenger menu -->

    <li class="<?php echo ($menuname == "passangers") ? "mm-active" : ""  ?>">
        <a class="has-arrow material-ripple" href="#">
            <i class="fas fa-male"></i>
            <?php echo lang("Localize.passanger") ?>
        </a>
        <ul class="nav-second-level">

            <?php
            $passanger_list = "passanger_list";
            $passanger_list_result = $rolepermissionLibrary->read($passanger_list);
            ?>

            <?php if ($passanger_list_result == true) : ?>
                <li>
                    <a href="<?php echo base_url(route_to('index-passanger')) ?>">
                        <?php echo lang("Localize.passanger_list") ?>
                    </a>
                </li>
            <?php endif ?>

        </ul>
    </li>
    <!-- Passenger menu -->

<?php endif ?>




<?php
$employee = "employee";
$employeeresult = $rolepermissionLibrary->menu($employee);
?>

<?php if ($employeeresult == true) : ?>
    <!-- Employee menu -->

    <li class="<?php echo ($menuname == "employees") ? "mm-active" : ""  ?>">
        <a class="has-arrow material-ripple" href="#">
            <i class="fas fa-user-tie"></i>
            <?php echo lang("Localize.employee") ?>
        </a>
        <ul class="nav-second-level">

            <?php
            $employee_type_list = "employee_type_list";
            $employee_type_list_result = $rolepermissionLibrary->read($employee_type_list);
            ?>

            <?php if ($employee_type_list_result == true) : ?>
                <li>
                    <a href="<?php echo base_url(route_to('index-employeetype')) ?>"><?php echo lang("Localize.employee_type_list") ?></a>
                </li>
            <?php endif ?>

            <?php
            $employee_list = "employee_list";
            $employee_list_result = $rolepermissionLibrary->read($employee_list);
            ?>

            <?php if ($employee_list_result == true) : ?>
                <li>
                    <a href="<?php echo base_url(route_to('index-employee')) ?>"><?php echo lang("Localize.employee_list") ?></a>
                </li>
            <?php endif ?>

        </ul>
    </li>

    <!-- Employee menu -->
<?php endif ?>




<?php
$report = "report";
$reportresult = $rolepermissionLibrary->menu($report);
?>

<?php if ($reportresult == true) : ?>
    <!-- Report menu -->

    <li class="<?php echo ($menuname == "reports") ? "mm-active" : ""  ?>">
        <a class="has-arrow material-ripple" href="#">
            <i class="fas fa-chart-pie"></i>
            <?php echo lang("Localize.report") ?>
        </a>

        <ul class="nav-second-level">

            <?php
            $ticket_sold_list = "ticket_sold";
            $ticket_sold_list_result = $rolepermissionLibrary->read($ticket_sold_list);
            ?>

            <?php if ($ticket_sold_list_result == true) : ?>
                <li>
                    <a href="<?php echo base_url(route_to('loadtickesell-report')) ?>"><?php echo lang("Localize.ticket_sold") ?></a>
                </li>
            <?php endif ?>

            <?php
            $agent_report_list = "agent_report";
            $agent_report_list_result = $rolepermissionLibrary->read($agent_report_list);
            ?>

            <?php if ($agent_report_list_result == true) : ?>
                <li>
                    <a href="<?php echo base_url(route_to('loadcommission-report')) ?>"><?php echo lang("Localize.agent_report") ?></a>
                </li>
            <?php endif ?>

            <?php
            $sum_report = "sum_report";
            $sum_report_result = $rolepermissionLibrary->read($sum_report);
            ?>

            <?php if ($sum_report_result == true) : ?>
                <li>
                    <a href="<?php echo base_url(route_to('loadsum-report')) ?>"><?php echo lang("Localize.sum_report") ?></a>
                </li>
            <?php endif ?>

        </ul>

    </li>

    <!-- Report menu -->
<?php endif ?>


<?php
$inquiry = "inquiry";
$inquiryresult = $rolepermissionLibrary->menu($inquiry);
?>
<?php if ($inquiryresult == true) : ?>
    <!-- Report menu -->

    <li class="<?php echo ($menuname == "inquiries") ? "mm-active" : ""  ?>">
        <a class="has-arrow material-ripple" href="#">
            <i class="fas fa-question-circle"></i>
            <?php echo lang("Localize.inquiry") ?>
        </a>
        <ul class="nav-second-level">

            <?php
            $inquiry_list = "inquiry_list";
            $inquiry_list_result = $rolepermissionLibrary->read($inquiry_list);
            ?>
            <?php if ($inquiry_list_result == true) : ?>
                <li>
                    <a href="<?php echo base_url(route_to('index-inquiry')) ?>"><?php echo lang("Localize.inquiry_list") ?></a>
                </li>
            <?php endif ?>
        </ul>


    </li>
    <!-- Report menu -->
<?php endif ?>