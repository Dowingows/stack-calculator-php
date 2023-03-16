<?php 

declare(strict_types=1);

use PHPUnit\Framework\Attributes\CoversClass;
use Dowingows\Calculator\StackCalculator;
use Dowingows\Calculator\Exception\DivisionByZeroException;
use Dowingows\Calculator\Exception\MissingOperatorException;

use PHPUnit\Framework\TestCase;

#[CoversClass(StackCalculator::class)]
final class StackCalculatorTest extends TestCase
{
    public function testIfAddOperationWorks(): void
    {
        $result = (new StackCalculator)->push(2)->push(3)->add()->getResult();

        $this->assertSame(5.0, $result);
    }

    public function testIfSubtractOperationWorks(): void
    {
        $result = (new StackCalculator)->push(2)->push(3)->subtract()->getResult();

        $this->assertSame(-1.0, $result);
        
        $result = (new StackCalculator)->push(3)->push(3)->subtract()->getResult();

        $this->assertSame(0.0, $result);
    }

    public function testIfMultiplyOperationWorks(): void
    {

        $result = (new StackCalculator)->push(2)->push(3)->multiply()->getResult();

        $this->assertSame(6.0, $result);
    }

    public function testIfDivideOperationWorks(): void
    {

        $result = (new StackCalculator)->push(21)->push(7)->divide()->getResult();

        $this->assertSame(3.0, $result);
    }

    public function testDivideByZeroException(): void
    {
        $this->expectException(DivisionByZeroException::class);

        (new StackCalculator)->push(21)->push(0)->divide()->getResult();
    }

    public function testMissingOperatorException(): void
    {
        $this->expectException(MissingOperatorException::class);

        (new StackCalculator)->push(21)->add()->getResult();
    }
}