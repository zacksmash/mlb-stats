<?php

namespace Zacksmash\MlbStats\Exceptions;

use Exception;

class InvalidParameterException extends Exception
{
    public function __construct($message = null)
    {
        $method = debug_backtrace()[1]['function'];
        $message = $message ?? "Invalid [{$method}] parameter given.";

        parent::__construct($message);
    }
}
