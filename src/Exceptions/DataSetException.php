<?php namespace Writecl\Rapyd\Exceptions;

use Exception;

class DataSetException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
