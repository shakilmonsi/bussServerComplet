<?php

namespace Config;

use App\Validation\CustomValidations;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
        CustomValidations::class,
    ];

    // New Custome rules
    public $location = [
        'name'     => 'required|min_length[2]',
    ];
    public $location_errors = [
        'name' => [
            'required'    => 'Location is required',
            'min_length'    => 'Location name must be at least 2 character.',
        ],
    ];

    public $stand = [
        'name'     => 'required|min_length[2]',
    ];

    public $stand_errors = [
        'name' => [
            'required'    => 'Stand is required',
            'min_length'    => 'Stand name must be at least 2 character.',
        ],
    ];

    public $facility = [
        'name'     => 'required|min_length[2]',
    ];

    public $facility_errors = [
        'name' => [
            'required'    => 'Facility is required',
            'min_length'    => 'Facility name must be at least 2 character.',
        ],
    ];

    public $fleet = [
        'type'     => 'required',
        'layout'     => 'required',
        'seat_number'     => 'required',
        'total_seat'     => 'required',
        'status'     => 'required',
        'luggage_service'     => 'required',
    ];

    public $fleet_errors = [
        'type' => [
            'required'    => 'Fleet type is required',

        ],
    ];

    public $vehical = [
        'id'    => 'permit_empty|integer',
        'fleet_id'     => 'required',
        'reg_no'     => 'required|is_unique[vehicles.reg_no,id,{id}]',
        'engine_no'     => 'required',
        'model_no'     => 'required',
        'chasis_no'     => 'required',
        'woner'     => 'required',
        'woner_mobile'     => 'required',
        'company'     => 'required',
        'status'     => 'required',
        'assign'     => 'required',
    ];

    public $vehical_errors = [
        'reg_no' => [
            'is_unique' => 'There is already a vehicle registered with this registration number'
        ],
        'type' => [
            'required'    => 'vehical type is required',
        ],
    ];

    public $employeetype = [
        'type'     => 'required',
    ];

    public $employeetype_errors = [
        'type' => [
            'required'    => 'Employee type is required',
        ],
    ];

    public $employee = [
        'id'    => 'permit_empty|integer',
        'employeetype_id'     => 'required',
        'country_id'     => 'required',
        'first_name'     => 'required',
        'last_name'     => 'required',
        'phone'     => 'required',
        'email'     => 'required|valid_email|is_unique[employees.email,id,{id}]',
        'nid'         => 'permit_empty|is_unique[employees.nid,id,{id}]',
        'address'     => 'required',
    ];

    public $employee_errors = [
        'first_name' => [
            'required'    => 'Employee First Name is required',
        ],
        'last_name' => [
            'required'    => 'Employee Last Name is required',
        ],
        'country_id' => [
            'required'    => 'Employee Country Name is required',
        ],
        'employeetype_id' => [
            'required'    => 'Employee Type is required',
        ],
        'email' => [
            'is_unique' => 'Employee already exists',
            'valid_email' => 'Please provide valid email'
        ],
        'nid' => [
            'is_unique' => 'This ID number is associated with an employee'
        ]
    ];

    public $schedule = [
        'start_time'     => 'required',
        'end_time'     => 'required',
    ];

    public $schedule_errors = [
        'start_time' => [
            'required'    => 'Start time is required',
        ],

        'end_time' => [
            'required'    => 'End time is required',
        ],
    ];

    public $schedulefilter = [
        'start_time'     => 'required',
        'end_time'     => 'required',
        'type'     => 'required',
    ];

    public $schedulefilter_errors = [
        'start_time' => [
            'required'    => 'Start time is required',
        ],

        'end_time' => [
            'required'    => 'End time is required',
        ],

        'type' => [
            'required'    => 'Schedule type is required',
        ],
    ];





    public $trip = [
        'pick_location_id'  => 'required',
        'drop_location_id'  => 'required',
        'schedule_id'  => 'required',
        'adult_fair'  => 'required',
        'fleet_id'  => 'required',
        'vehicle_id'  => 'required',
        'company_name'  => 'required',
        'status'  => 'required',
        'startdate'  => 'required',
    ];
    public $trip_errors = [
        'pick_location_id' => [
            'required'    => 'Pick up location is required',
        ],

    ];


    public $subtrip = [
        'pick_location_id'  => 'required',
        'drop_location_id'  => 'required',
        'adult_fair'  => 'required',
        'status'  => 'required',
        'trip_id'  => 'required',
        'type'  => 'required',

    ];
    public $subtrip_errors = [
        'pick_location_id' => [
            'required'    => 'Pick up location is required',
        ],

    ];

    public $tax = [
        'name'  => 'required',
        'value'  => 'required',
        'tax_reg'  => 'required',
        'status'  => 'required',
    ];
    public $tax_errors = [
        'name' => [
            'required'    => 'Tax name is required',
        ],
        'value' => [
            'required'    => 'Tax value is required',
        ],
        'tax_reg' => [
            'required'    => 'Tax registration number required',
        ],
        'status' => [
            'required'    => 'Tax status is required',
        ],

    ];

    public $secone = [
        'button_text'  => 'required',
        'sub_title'  => 'required',
        'title'  => 'required',
        'image'  => 'required',


    ];
    public $secone_errors = [
        'button_text' => [
            'required'    => 'Button Text is required',
        ],
        'sub_title' => [
            'required'    => 'Sub Titel is required',
        ],
        'title' => [
            'required'    => 'Title is required',
        ],
        'image' => [
            'required'    => 'Image is required',
        ],

    ];
    public $sectwo = [

        'sub_title'  => 'required',
        'title'  => 'required',
    ];
    public $sectwo_errors = [

        'sub_title' => [
            'required'    => 'Sub Titel is required',
        ],
        'title' => [
            'required'    => 'Title is required',
        ],
    ];
    public $sectwodetail = [
        'button_text'  => 'required',
        'description'  => 'required',
        'title'  => 'required',
        'image'  => 'required',


    ];
    public $sectwodetail_errors = [
        'button_text' => [
            'required'    => 'Button Text is required',
        ],
        'description' => [
            'required'    => 'Description is required',
        ],
        'title' => [
            'required'    => 'Title is required',
        ],
        'image' => [
            'required'    => 'Image is required',
        ],

    ];

    public $secthree = [

        'sub_title'  => 'required',
        'title'  => 'required',

    ];
    public $secthree_errors = [

        'sub_title' => [
            'required'    => 'Sub Titel is required',
        ],
        'title' => [
            'required'    => 'Title is required',
        ],
    ];

    public $secfour = [

        'sub_title'  => 'required',
        'title'  => 'required',

    ];
    public $secfour_errors = [

        'sub_title' => [
            'required'    => 'Sub Titel is required',
        ],
        'title' => [
            'required'    => 'Title is required',
        ],
    ];


    public $secfourcomment = [
        'person_name'  => 'required',
        'person_detail'  => 'required',
        'description'  => 'required',
        'image'  => 'required',
        'serial'  => 'required',


    ];
    public $secfourcomment_errors = [
        'person_name' => [
            'required'    => 'Name  is required',
        ],
        'description' => [
            'required'    => 'Description is required',
        ],
        'person_detail' => [
            'required'    => 'Designation is required',
        ],
        'image' => [
            'required'    => 'Image is required',
        ],
        'serial' => [
            'required'    => 'Serial is required',
        ],

    ];

    public $secfiveapp = [
        'title'  => 'required',
        'sub_title'  => 'required',
        'image'  => 'required',
        'button_one_status'  => 'required',
        'button_two_status'  => 'required',
        'button_one_link'  => 'required',
        'button_two_link'  => 'required',


    ];
    public $secfiveapp_errors = [
        'title' => [
            'required'    => 'Title  is required',
        ],
        'sub_title' => [
            'required'    => 'Sub Title is required',
        ],
        'button_one_status' => [
            'required'    => 'Button one show hide status is required',
        ],
        'image' => [
            'required'    => 'Image is required',
        ],
        'button_two_status' => [
            'required'    => 'Button Two show hide status is required',
        ],

        'button_one_link' => [
            'required'    => 'Button One Link is required',
        ],

        'button_two_link' => [
            'required'    => 'Button Two Link is required',
        ],

    ];

    public $secsix = [

        'sub_title'  => 'required',
        'title'  => 'required',

    ];
    public $secsix_errors = [

        'sub_title' => [
            'required'    => 'Sub Titel is required',
        ],
        'title' => [
            'required'    => 'Title is required',
        ],
    ];
    public $secseven = [

        'sub_title'  => 'required',
        'title'  => 'required',
        'image'  => 'required',


    ];
    public $secseven_errors = [

        'sub_title' => [
            'required'    => 'Sub Titel is required',
        ],
        'title' => [
            'required'    => 'Title is required',
        ],
        'image' => [
            'required'    => 'Image is required',
        ],

    ];



    public $blog = [


        'title'  => 'required',
        'description'  => 'required',
        'image'  => 'required',
        'serial'  => 'required',

    ];
    public $blog_errors = [

        'description' => [
            'required'    => 'Description is is required',
        ],
        'title' => [
            'required'    => 'Title is required',
        ],
        'image' => [
            'required'    => 'Image is required',
        ],
        'serial' => [
            'required'    => 'Serial Number is required',
        ],

    ];

    public $language = [

        'display_name'  => 'required',
        'language_code'  => 'required',

    ];
    public $language_errors = [

        'display_name' => [
            'required'    => 'Language Name is required',
        ],
        'language_code' => [
            'required'    => 'Language Code is required',
        ],
    ];
    public $maxtime = [

        'maxtime'  => 'required',

    ];
    public $maxtime_errors = [

        'maxtime' => [
            'required'    => 'MaxTime is required',
        ],
    ];

    public $role = [
        'id'    => 'permit_empty|integer',
        'name'  => 'required|is_unique[roles.name,id,{id}]',
        'status'  => 'required',

    ];
    public $role_errors = [

        'name' => [
            'required'    => 'Name is required',
            'is_unique'    => 'Role is already exists',
        ],
        'status' => [
            'required'    => 'Status is required',
        ],
    ];

    public $user = [
        'id'    => 'permit_empty|integer',
        'login_email'  => 'required|is_unique[users.login_email,id,{id}]|valid_email',
        'login_mobile'  => 'required|is_unique[users.login_mobile,id,{id}]',
        'password'  => 'required_without[id]',
        'confirm' => 'required_without[id]|permit_empty|matches[password]',
        'slug'  => 'required_without[id]',
        'role_id'  => 'required_without[id]|permit_empty|integer',
        'status'  => 'required_without[id]'
    ];
    public $user_errors = [

        'login_email' => [
            'required_without'    => 'Email is required',
            'valid_email'  => 'Email is not Valid',
            'is_unique'    => 'Email is taken',
        ],
        'login_mobile' => [
            'required_without'    => 'Mobile is required',
            'is_unique'    => 'Mobile Number is taken',
        ],
        'password' => [
            'required_without'    => 'Password is required',
        ],
        'confirm' => [
            'required_without'    => 'Confirm Password is required',
            'matches'    => 'Confirm password doesn\'t matched',
        ],
        'slug' => [
            'required_without'    => 'Slug Number is required',
        ],
        'role_id' => [
            'required_without'    => 'User Role is required',
            'integer'    => 'Incorrect user role value',
        ],
        'status' => [
            'required_without'    => 'Status is required',
        ],

    ];

    public $userDetail = [
        'id'    => 'permit_empty|integer',
        'user_id'  => 'required_without[id]',
        'first_name'  => 'required_without[id]',
        'id_number'  => 'permit_empty|is_unique[user_details.id_number,id,{id}]',
        'country_id'  => 'required_without[id]',
    ];
    public $userDetail_errors = [

        'user_id' => [
            'required_without'    => 'User role is required',
        ],
        'first_name' => [
            'required_without'    => 'First name is required',
        ],
        'last_name' => [
            'required_without'    => 'Last name is required',
        ],
        'id_number' => [
            'is_unique' => 'This ID number is associated with an account'
        ],
        'country_id' => [
            'required_without'    => 'Country name is required',
        ],

    ];


    public $reguser = [

        'login_email'  => 'required|is_unique[users.login_email]|valid_email',
        'login_mobile'  => 'required|is_unique[users.login_mobile]',
        'password'  => 'required',
        'repassword' => 'required|matches[password]',
        'slug'  => 'required',
        'role_id'  => 'required',
        'status'  => 'required',

    ];
    public $reguser_errors = [

        'login_email' => [
            'required'    => 'Email is is required',
            'valid_email'  => 'Email is not Valid',
            'is_unique'    => 'Email is taken',
        ],
        'login_mobile' => [
            'required'    => 'Mobile is required',
            'is_unique'    => 'Mobile Number is taken',
        ],
        'password' => [
            'required'    => 'Password is required',
        ],

        'repassword' => [
            'required'    => 'ReType Password is required',
            'matches'    =>  'Password not Matching',
        ],

        'slug' => [
            'required'    => 'Slug Number is required',
        ],
        'role_id' => [
            'required'    => 'User Role is required',
        ],
        'status' => [
            'required'    => 'Status is required',
        ],

    ];


    public $resetpass = [


        'password'  => 'required',
        'repassword' => 'required|matches[password]',
        'recovery_code'  => 'required',


    ];
    public $resetpass_errors = [


        'password' => [
            'required'    => 'Password is required',
        ],

        'repassword' => [
            'required'    => 'ReType Password is required',
            'matches'    =>  'Password not Matching',
        ],

        'recovery_code' => [
            'required'    => 'Recovery Code is required',
        ],


    ];






    public $paymethod = [
        'name'  => 'required',
        'status'  => 'required',

    ];
    public $paymethod_errors = [

        'name' => [
            'required'    => 'Name is required',
        ],
        'status' => [
            'required'    => 'Status is required',
        ],
    ];


    public $gateway = [
        'name'  => 'required',
        'status'  => 'required',

    ];
    public $gateway_errors = [

        'name' => [
            'required'    => 'Paymetn Gateway is required',
        ],
        'status' => [
            'required'    => 'Status is required',
        ],
    ];

    public $ticket = [
        'booking_id'  => 'required',
        'trip_id'  => 'required',
        'passanger_id'  => 'required',
        'subtrip_id'  => 'required',
        'pick_location_id'  => 'required',
        'drop_location_id'  => 'required',
        'pick_stand_id'  => 'required',
        'drop_stand_id'  => 'required',
        'price'  => 'required',
        'paidamount'  => 'required',
        'seatnumber'  => 'required',
        'totalseat'  => 'required',
        'bookby_user_id'  => 'required',
        'journeydata'  => 'required',
        'payment_status'  => 'required',
        'vehicle_id'  => 'required',


    ];
    public $ticket_errors = [

        'booking_id' => [
            'required'    => 'Bookoing is required',
        ],
        'trip_id' => [
            'required'    => 'Main trip is required',
        ],
        'subtrip_id' => [
            'required'    => 'Subtrip is required',
        ],
        'passanger_id' => [
            'required'    => 'Passanger is required',
        ],
        'pick_location_id' => [
            'required'    => 'Pick Up location is required',
        ],
        'drop_location_id' => [
            'required'    => 'Drop location is required',
        ],
        'pick_stand_id' => [
            'required'    => 'Pick point is required',
        ],
        'drop_stand_id' => [
            'required'    => 'Drop Point is required',
        ],
        'price' => [
            'required'    => 'Price is required',
        ],
        'paidamount' => [
            'required'    => 'Paid Amount is required',
        ],

        'seatnumber' => [
            'required'    => 'Seat Number is required',
        ],
        'totalseat' => [
            'required'    => 'Total Seat is required',
        ],
        'bookby_user_id' => [
            'required'    => 'User is required',
        ],
        'journeydata' => [
            'required'    => 'Journey Day is required',
        ],

        'payment_status' => [
            'required'    => 'Payment Status is required',
        ],
        'vehicle_id' => [
            'required'    => 'Vehicle is required',
        ],
    ];

    public $partialpay = [
        'booking_id'     => 'required',
        'trip_id'     => 'required',
        'subtrip_id'     => 'required',
        'passanger_id'     => 'required',
        'paidamount'     => 'required',

    ];

    public $partialpay_errors = [
        'booking_id' => [
            'required'    => 'Boooking Id time is required',
        ],

        'trip_id' => [
            'required'    => 'Main Trip id is required',
        ],
        'subtrip_id' => [
            'required'    => 'Subtrip Id e is required',
        ],
        'passanger_id' => [
            'required'    => 'Passanger is required',
        ],
        'paidamount' => [
            'required'    => 'Amount is required',
        ],


    ];

    public $journeylist = [
        'booking_id'     => 'required',
        'trip_id'     => 'required',
        'subtrip_id'     => 'required',
        'pick_location_id'     => 'required',
        'drop_location_id'     => 'required',
        'pick_stand_id'     => 'required',
        'drop_stand_id'     => 'required',
        'first_name'     => 'required',
    ];

    public $journeylist_errors = [
        'booking_id' => [
            'required'    => 'Boooking Id time is required',
        ],

        'trip_id' => [
            'required'    => 'Main Trip id is required',
        ],
        'subtrip_id' => [
            'required'    => 'Subtrip Id e is required',
        ],
        'pick_location_id' => [
            'required'    => 'Pickup location is required',
        ],
        'drop_location_id' => [
            'required'    => 'Drop Location is required',
        ],
        'pick_stand_id' => [
            'required'    => 'Pickup Bus Stand  is required',
        ],
        'drop_stand_id' => [
            'required'    => 'Drop Bus Stand  is required',
        ],
        'first_name' => [
            'required'    => 'First Name  is required',
        ]
    ];

    public $agent = [
        'id'    => 'permit_empty|integer',
        'location_id'     => 'required_without[id]',
        'country_id'     => 'required_without[id]',
        'user_id'     => 'required_without[id]',
        'first_name'     => 'required_without[id]',
        'last_name'     => 'required_without[id]',
        'id_number'      => 'permit_empty|is_unique[agents.id_number,id,{id}]',
        'commission'     => 'required_without[id]',
        'address'     => 'required_without[id]',
    ];

    public $agent_errors = [
        'first_name' => [
            'required_without'    => ' First Name is required',
        ],
        'last_name' => [
            'required_without'    => ' Last Name is required',
        ],
        'country_id' => [
            'required_without'    => ' Country Name is required',
        ],

        'user_id' => [
            'required_without'    => ' User id is required',
        ],
        'location_id' => [
            'required_without'    => ' Location is required',
        ],
        'id_number' => [
            'is_unique' => 'This ID number is associated with an account'
        ],
        'commission' => [
            'required_without'    => ' Commission is required',
        ],
        'address' => [
            'required_without'    => ' Address is required',
        ],
    ];




    public $websetting = [

        'localize_name'     => 'required',
        'logotext'     => 'required',
        'apptitle'     => 'required',
        'copyright'     => 'required',
        'tax_type'     => 'required',
        'max_ticket'     => 'required',
        'currency'     => 'required',

    ];

    public $websetting_errors = [
        'localize_name' => [
            'required'    => ' Language is required',
        ],
        'logotext' => [
            'required'    => 'Text Logo is required',
        ],
        'apptitle' => [
            'required'    => ' Country Name is required',
        ],

        'copyright' => [
            'required'    => ' Copy right text is required',
        ],
        'tax_type' => [
            'required'    => ' Tax type is required',
        ],

        'max_ticket' => [
            'required'    => ' Maximum number of ticket is required',
        ],
        'currency' => [
            'required'    => 'Currency is required',
        ],

    ];


    public $socialmedia = [
        'link'     => 'required',
    ];

    public $socialmedia_errors = [
        'link' => [
            'required'    => ' Link is required',
        ],
    ];


    public $footer = [
        'contact'     => 'required',
        'opentime'     => 'required',
        'address'     => 'required',
        'email'     => 'required',
    ];

    public $footer_errors = [
        'contact' => [
            'required'    => ' Contact number is required',
        ],
        'email' => [
            'required'    => ' Email address is required',
        ],
        'opentime' => [
            'required'    => ' Open time is required',
        ],
        'address' => [
            'required'    => ' Address is required',
        ],
    ];


    public $add = [
        'link'     => 'required',
        'pagename'     => 'required',
    ];

    public $add_errors = [
        'link' => [
            'required'    => ' Link is required',
        ],
        'pagename' => [
            'required'    => ' Pagename is required',
        ],
    ];



    public $about = [
        'title'  => 'required',
        'sub_title'  => 'required',
        'description'  => 'required',

    ];
    public $about_errors = [

        'title' => [
            'required'    => 'Title is required',
        ],
        'sub_title' => [
            'required'    => 'Sub Title is required',
        ],
        'description' => [
            'required'    => 'Description is required',
        ],
    ];


    public $cooke = [
        'title'  => 'required',
        'sub_title'  => 'required',
        'description'  => 'required',

    ];
    public $cooke_errors = [

        'title' => [
            'required'    => 'Title is required',
        ],
        'sub_title' => [
            'required'    => 'Sub Title is required',
        ],
        'description' => [
            'required'    => 'Description is required',
        ],
    ];




    public $privacy = [
        'title'  => 'required',
        'sub_title'  => 'required',
        'description'  => 'required',

    ];
    public $privacy_errors = [

        'title' => [
            'required'    => 'Title is required',
        ],
        'sub_title' => [
            'required'    => 'Sub Title is required',
        ],
        'description' => [
            'required'    => 'Description is required',
        ],
    ];




    public $terms = [
        'title'  => 'required',
        'sub_title'  => 'required',
        'description'  => 'required',

    ];
    public $terms_errors = [

        'title' => [
            'required'    => 'Title is required',
        ],
        'sub_title' => [
            'required'    => 'Sub Title is required',
        ],
        'description' => [
            'required'    => 'Description is required',
        ],
    ];

    public $faq = [
        'title'  => 'required',
        'sub_title'  => 'required',


    ];
    public $faq_errors = [

        'title' => [
            'required'    => 'Title is required',
        ],
        'sub_title' => [
            'required'    => 'Sub Title is required',
        ],

    ];


    public $question = [
        'question'  => 'required',
        'description'  => 'required',


    ];
    public $question_errors = [

        'question' => [
            'required'    => 'Question is required',
        ],
        'description' => [
            'required'    => 'Description is required',
        ],

    ];



    public $inquiry = [
        'mobile'  => 'required',
        'subject'  => 'required',
        'message'  => 'required',
        'name'  => 'required',


    ];
    public $inquiry_errors = [

        'mobile' => [
            'required'    => 'Question is required',
        ],
        'subject' => [
            'required'    => 'Description is required',
        ],
        'message' => [
            'required'    => 'Description is required',
        ],
        'name' => [
            'required'    => 'Description is required',
        ],

    ];


    public $paystack = [
        'live_s_kye'  => 'required',
        'live_p_kye'  => 'required',
        'test_s_kye'  => 'required',
        'test_p_kye'  => 'required',
        'environment'  => 'required',
    ];

    public $paystack_errors = [

        'live_s_kye' => [
            'required'    => 'Live secrate kye is required',
        ],
        'live_p_kye' => [
            'required'    => 'Live private kye is required',
        ],
        'test_s_kye' => [
            'required'    => 'Test secrate kye is required',
        ],
        'test_p_kye' => [
            'required'    => 'Test secrate kye is required',
        ],
        'environment' => [
            'required'    => 'Environment is required',
        ],

    ];

    public $stripe = [
        'live_s_kye'  => 'required',
        'live_p_kye'  => 'required',
        'test_s_kye'  => 'required',
        'test_p_kye'  => 'required',
        'environment'  => 'required',
    ];

    public $stripe_errors = [

        'live_s_kye' => [
            'required'    => 'Live secrate kye is required',
        ],
        'live_p_kye' => [
            'required'    => 'Live private kye is required',
        ],
        'test_s_kye' => [
            'required'    => 'Test secrate kye is required',
        ],
        'test_p_kye' => [
            'required'    => 'Test secrate kye is required',
        ],
        'environment' => [
            'required'    => 'Environment is required',
        ],

    ];


    public $razor =   [
        'live_s_kye'  => 'required',
        'test_s_kye'  => 'required',
        'environment'  => 'required',
    ];

    public $razor_errors = [

        'live_s_kye' => [
            'required'    => 'Live secrate kye is required',
        ],

        'test_s_kye' => [
            'required'    => 'Test secrate kye is required',
        ],

        'environment' => [
            'required'    => 'Environment is required',
        ],

    ];

    public $paypal = [
        'live_s_kye'  => 'required',
        'live_c_kye'  => 'required',
        'test_s_kye'  => 'required',
        'test_c_kye'  => 'required',
        'environment'  => 'required',
        'email'  => 'required',

    ];

    public $paypal_errors = [

        'live_s_kye' => [
            'required'    => 'Live secrate Id is required',
        ],
        'live_c_kye' => [
            'required'    => 'Live client Id is required',
        ],
        'test_s_kye' => [
            'required'    => 'Test secrate Id is required',
        ],
        'test_c_kye' => [
            'required'    => 'Test client Id is required',
        ],
        'environment' => [
            'required'    => 'Environment is required',
        ],
        'email' => [
            'required'    => 'Email is required',
        ],
    ];


    public $coupon =   [
        'id' => 'permit_empty|integer',
        'code'  => 'required|is_unique[coupons.code,id,{id}]',
        'start_date'  => 'required|valid_date[Y-m-d]',
        'end_date'  => 'required|valid_date[Y-m-d]|date_range_end_date[{start_date}]',
        'discount'  => 'required',
        'subtrip_id'  => 'required|integer',
    ];

    public $coupon_errors = [

        'code' => [
            'required'    => 'Coupon code is required',
            'is_unique'    => 'Coupon code is already exists',
        ],

        'start_date' => [
            'required'    => 'Start Date is required',
        ],

        'end_date' => [
            'required'    => 'End Date is required',
        ],
        'discount' => [
            'required'    => 'Discouont amount is required',
        ],
        'subtrip_id' => [
            'required'    => 'Sub Trip Id is required',
            'integer'    => 'Invalid Sub Trip id',
        ],

    ];



    public $fitness =   [
        'fitness_name'  => 'required',
        'vehicle_id'  => 'required',
        'start_date'  => 'required',
        'end_date'  => 'required',
        'start_milage'  => 'required',
        'end_milage'  => 'required',
    ];

    public $fitness_errors = [

        'fitness_name' => [
            'required'    => 'Fitness Name is required',
        ],

        'vehicle_id' => [
            'required'    => 'Vehicle Registrarion Number is required',
        ],

        'start_date' => [
            'required'    => 'Fitness Start Date is required',
        ],
        'end_date' => [
            'required'    => 'Fitness End Date is required',
        ],
        'start_milage' => [
            'required'    => 'Start Milage is required',
        ],

        'end_milage' => [
            'required'    => 'End Milage is required',
        ],

    ];

    public $account = [
        'detail'     => 'required',
        'type'     => 'required',
        'amount'     => 'required',
        'system_user_id'  => 'required',
    ];

    public $account_errors = [
        'detail' => [
            'required'    => 'Tranjection Detail is required',
        ],

        'type' => [
            'required'    => 'Tranjection type is required',
        ],

        'amount' => [
            'required'    => 'Tranjection amount is required',
        ],
        'system_user_id' => [
            'required'    => 'Tranjection By is required',
        ],
    ];





    public $refund = [
        'booking_id'     => 'required',
        'type'     => 'required',
        'refund_by'     => 'required',

    ];

    public $refund_errors = [
        'booking_id' => [
            'required'    => 'Booking id is required',
        ],

        'type' => [
            'required'    => 'Booking type is required',
        ],

        'refund_by' => [
            'required'    => 'User id is required',
        ],

    ];


    public $cancel = [
        'booking_id'     => 'required',
        'type'     => 'required',
        'cancel_by'     => 'required',

    ];

    public $cancel_errors = [
        'booking_id' => [
            'required'    => 'Booking id is required',
        ],

        'type' => [
            'required'    => 'Booking type is required',
        ],

        'cancel_by' => [
            'required'    => 'User id is required',
        ],

    ];


    public $lanstr = [
        'name'     => 'required|is_unique[langstrings.name]',


    ];

    public $lanstr_errors = [
        'name' => [
            'required'    => 'Language String is Rewuired',
            'is_unique'    => 'Language String must be unique',
        ],

    ];


    public $menu = [
        'menu_title'     => 'required',
        'page_url'     => 'required',
        'module_name'     => 'required',
        'created_by'     => 'required',

    ];

    public $menu_errors = [
        'menu_title' => [
            'required'    => 'Menu Title is required',
        ],

        'page_url' => [
            'required'    => 'Page Url is required',
        ],

        'module_name' => [
            'required'    => 'Module name is required',
        ],

        'created_by' => [
            'required'    => 'User is required',
        ],

    ];


    public $rolepermission = [
        'role_id'     => 'required',
        'user_id'     => 'required',

    ];

    public $rolepermission_errors = [
        'role_id' => [
            'required'    => 'User Role is required',
        ],

        'user_id' => [
            'required'    => 'User Id is required',
        ],

    ];


    public $rating = [
        'user_id'     => 'required',
        'trip_id'     => 'required',
        'subtrip_id'     => 'required',
        'booking_id'     => 'required|is_unique[ratings.booking_id,booking_id,{booking_id}]',
        'rating'     => 'required',
        'status'     => 'required',

    ];

    public $rating_errors = [
        'user_id' => [
            'required'    => 'User Id is required',
        ],

        'trip_id' => [
            'required'    => 'Trip Id is required',
        ],

        'subtrip_id' => [
            'required'    => 'Subtrip Id is required',
        ],

        'booking_id' => [
            'required'    => 'Booking Id is required',
            'is_unique'    => 'Multiple Review for same booking ss',
        ],

        'rating' => [
            'required'    => 'Rating is required',
        ],

        'status' => [
            'required'    => 'Status is required',
        ],

    ];


    public $socialsingup = [
        'email'     => 'required',
        'appid'     => 'required',

    ];

    public $socialsingup_errors = [
        'email' => [
            'required'    => 'Email is required',
        ],

        'appid' => [
            'required'    => 'Social app id required',
        ],

    ];




    public $email =   [

        'protocol'     => 'required',
        'smtphost'     => 'required',
        'smtpuser'     => 'required',
        'smtppass'     => 'required',
        'smtpport'     => 'required',
        'smtpcrypto'     => 'required',

    ];

    public $email_errors = [
        'protocol' => [
            'required'    => 'Protocol is required',
        ],

        'smtphost' => [
            'required'    => 'Smtp Host  is required',
        ],

        'smtpuser' => [
            'required'    => 'Smtp User is required',
        ],

        'smtppass' => [
            'required'    => 'Smtp Password is required',

        ],

        'smtpport' => [
            'required'    => 'Smtp Port is required',
        ],

        'smtpcrypto' => [
            'required'    => 'Smtp Crypto is required',
        ],

    ];


    public $subscrib = [
        'email'     => 'required',


    ];

    public $subscrib_errors = [
        'email' => [
            'required'    => 'Email is required',
        ],



    ];

    public $adminlogin = [
        'id'    => 'permit_empty|integer',
        'login_email'  => 'required|is_unique[users.login_email,id,{id}]|valid_email',
        'login_mobile'  => 'required|is_unique[users.login_mobile,id,{id}]',
        'password'  => 'required',
    ];

    public $adminlogin_errors = [

        'login_email' => [
            'required'    => 'Email is is required',
            'valid_email'  => 'Email is not Valid',
            'is_unique'    => 'Email is taken',
        ],
        'login_mobile' => [
            'required'    => 'Mobile is required',
            'is_unique'    => 'Mobile Number is taken',
        ],
        'password' => [
            'required'    => 'Password is required',
        ],

    ];


    public $resetpassadmin = [


        'password'  => 'required',
        'repassword' => 'required|matches[password]',
        'oldpassword'  => 'required',


    ];
    public $resetpassadmin_errors = [


        'password' => [
            'required'    => 'Password is required',
        ],

        'repassword' => [
            'required'    => 'ReType Password is required',
            'matches'    =>  'Password not Matching',
        ],

        'oldpassword' => [
            'required'    => 'Old-Password required',
        ],


    ];

    public $agentpay = [


        'agent_id'  => 'required',
        'amount' => 'required',
        'status'  => 'required',


    ];
    public $agentpay_errors = [


        'agent_id' => [
            'required'    => 'Agent is required',
        ],

        'amount' => [
            'required'    => 'Amount is required',
        ],

        'status' => [
            'required'    => 'Status is required',
        ],


    ];


    public $discountround = [


        'discountrate'  => 'required',
        'status' => 'required',

    ];
    public $discountround_errors = [


        'discountrate' => [
            'required'    => 'Discount Rate is required',
        ],

        'status' => [
            'required'    => 'Status is required',
        ],


    ];


    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
}
