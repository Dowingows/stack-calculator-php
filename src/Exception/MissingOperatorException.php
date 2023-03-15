<?php

declare(strict_types=1);

namespace Dowingows\Calculator\Exception;
use Exception;

class MissingOperatorException extends Exception {
    public function __construct($message = "Insufficient operators to perform the calculation", $code = 2, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
