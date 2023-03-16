<?php

declare(strict_types=1);

namespace Dowingows\Calculator;


use Dowingows\Calculator\Exception\DivisionByZeroException;
use Dowingows\Calculator\Exception\MissingOperatorException;

class StackCalculator
{
    /**
     * @var array<int, float>
     */
    private array $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function push(float $value): self
    {
        $this->stack[] = $value;
        return $this;
    }

    public function pop(): ?float
    {
        return array_pop($this->stack);
    }

    /** @return array<int, float>  */
    public function getOperands(): array
    {
        $operand1 = $this->pop();
        $operand2 = $this->pop();

        if ($operand1 === null) {
            return [];
        }

        if ($operand2 === null) {
            return [$operand1];
        }

        return [$operand1, $operand2];
    }

    public function add(): self
    {
        $operands = $this->getOperands();

        if (count($operands) < 2) {
            return throw new MissingOperatorException;
        }

        [$operand1, $operand2] = $operands;

        $result = $operand1 + $operand2;
        $this->push($result);

        return $this;
    }

    public function subtract(): self
    {
        $operand1 = $this->pop();
        $operand2 = $this->pop();
        $result = $operand2 - $operand1;
        $this->push($result);

        return $this;
    }

    public function multiply(): self
    {
        $operand1 = $this->pop();
        $operand2 = $this->pop();
        $result = $operand1 * $operand2;
        $this->push($result);

        return $this;
    }

    public function divide(): self
    {
        $operand1 = $this->pop();
        $operand2 = $this->pop();

        if ($operand1 == 0) {
            throw new DivisionByZeroException;
        }

        $result = $operand2 / $operand1;
        $this->push($result);

        return $this;
    }

    public function getResult(): ?float
    {
        return $this->pop();
    }
}
