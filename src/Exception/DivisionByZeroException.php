<?php

declare(strict_types=1);

namespace Dowingows\Calculator\Exception;

use Exception;

class DivisionByZeroException extends Exception {
    public function __construct($message = "Division by zero error!", $code = 1, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
