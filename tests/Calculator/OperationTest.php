<?php

namespace Tests\Calculator;

use Complex\Values\Re;
use Complex\Values\Im;
use Complex\Values\Z;
use Complex\Calculator;
use Tests\TestCase;

class OperationTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        parent::setUp();

        $re1 = new Re('1');
        $im1 = new Im('2');
        $z1 = new Z($re1, $im1);

        $re2 = new Re('2');
        $im2 = new Im('3');
        $z2 = new Z($re2, $im2);

        $this->calculator = new Calculator($z1, $z2);
    }

    /**
     * @return void
     */
    public function testAdditionResult()
    {
        $result = '3+5i';
        $this->assertEquals($this->calculator->addition(), $result);
    }

    /**
     * @return void
     */
    public function testSubtractionResult()
    {
        $result = '-1-1i';
        $this->assertEquals($this->calculator->subtraction(), $result);
    }

    /**
     * @return void
     */
    public function testMultiplicationResult()
    {
        $result = '-4+7i';
        $this->assertEquals($this->calculator->multiplication(), $result);
    }

    /**
     * @return void
     */
    public function testDivisionResult()
    {
        $result = '0.61538461538462+0.076923076923077i';
        $this->assertEquals($this->calculator->division(), $result);
    }
}
