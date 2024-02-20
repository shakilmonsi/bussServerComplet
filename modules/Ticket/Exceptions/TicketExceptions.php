<?php

namespace Modules\Ticket\Exceptions;

class TicketExceptions extends \Exception
{
    protected $errors;

    public function __construct($message = null, $code = 0, \Exception $previous = null, $errors = []) {
        parent::__construct($message, $code, $previous);
        
        $this->errors = $message;
        !empty($errors) && $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}
