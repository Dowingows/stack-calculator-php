<?php

declare(strict_types=1);

namespace Dowingows\Calculator\Exception;

use Exception;
use Throwable;

class MissingOperatorException extends Exception
{
    public function __construct(string $message = "Insufficient operators to perform the calculation", int $code = 2, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
