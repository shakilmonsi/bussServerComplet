<?php

namespace Modules\Ticket\Config;

use Config\Validation;

class TicketValidation extends Validation
{
    public $temporarybooks =   [
        'subtrip_id'  => 'required|numeric',
        'ticket_token'  => 'required',
        'seat_names'  => 'required',
        'journey_date'  => 'required',
        'expires_at'  => 'required',
    ];

    public $temporarybooks_errors = [
        'subtrip_id' => [
            'required' => 'Sub Trip id is required',
            'numeric' => 'Invalid trip id',
        ],
        'ticket_token' => [
            'required' => 'Ticket token is required',
        ],
        'seat_names' => [
            'required' => 'Seat names is required',
        ],
        'journey_date' => [
            'required' => 'Journey date is required'
        ],
        'expires_at' => [
            'required' => 'Expires date is required'
        ],
    ];
}
