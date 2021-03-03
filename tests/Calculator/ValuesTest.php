<?php

namespace Tests\Calculator;

use Complex\Values\Im;
use Complex\Values\Re;
use Complex\Values\Z;
use Tests\TestCase;

class ValuesTest extends TestCase
{
    /**
     * @return void
     */
    public function testCreateImValue()
    {
        $value = '1';
        $im = new Im($value);
        $this->assertEquals($im->value(), $value);
    }

    /**
     * @return void
     */
    public function testCreateReValue()
    {
        $value = '2';
        $re = new Re($value);
        $this->assertEquals($re->value(), $value);
    }

    /**
     * @return void
     */
    public function testCreateZValue()
    {
        $re = new Re('1');
        $im = new Im('2');
        $z = new Z($re, $im);
        $this->assertEquals((string)$z->re(), (string)$re->value());
        $this->assertEquals((string)$z->im(), (string)$im->value());
    }
}
