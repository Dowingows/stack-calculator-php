<?php

declare(strict_types=1);

namespace Dowingows\Calculator\Exception;

use Exception;
use Throwable;

class DivisionByZeroException extends Exception {
    public function __construct(string $message = "Division by zero error!",int $code = 1, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
