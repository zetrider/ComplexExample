<?php

namespace Complex;

use Complex\Values\Z;

/**
 * @package Complex
 * (a + bi) + (c + di) = (a + c) + (b + d)i
 * (a + bi) - (c + di) = (a - c) + (b - d)i
 * (a + bi) * (c + di) = (a * c - b * d) + (a * d + b * c)i
 * (a + bi) / (c + di) = ((a * c + b * d) / (c2 + d2)) + ((b * c + a * d) / (c2 + d2))i
 */
class Calculator implements CalculatorInterface
{
    private Z $z1;
    private Z $z2;

    public function __construct(Z $z1, Z $z2)
    {
        $this->z1 = $z1;
        $this->z2 = $z2;
    }

    public function addition(): string
    {
        $sumRe = [$this->z1->re()->value(), $this->z2->re()->value()];
        $sumIm = [$this->z1->im()->value(), $this->z2->im()->value()];

        return array_sum($sumRe) . '+' . array_sum($sumIm) . 'i';
    }

    public function subtraction(): string
    {
        $sub1 = $this->z1->re()->value() - $this->z2->re()->value();
        $sub2 = $this->z1->im()->value() - $this->z2->im()->value();

        return $sub1 . '-' . abs($sub2) . 'i';
    }

    public function multiplication(): string
    {
        $mul1 = $this->z1->re()->value() * $this->z2->re()->value() - $this->z1->im()->value() * $this->z2->im()->value();
        $mul2 = $this->z1->re()->value() * $this->z2->im()->value() + $this->z1->im()->value() * $this->z2->re()->value();

        return $mul1 . '+' . abs($mul2) . 'i';
    }

    public function division(): string
    {
        $div1Part1 = $this->z1->re()->value() * $this->z2->re()->value() + $this->z1->im()->value() * $this->z2->im()->value();
        $div1Part2 = pow($this->z2->re()->value(), 2) + pow($this->z2->im()->value(), 2);
        $div1 = $div1Part1 / $div1Part2;

        $div2Part1 = $this->z1->im()->value() * $this->z2->re()->value() - $this->z1->re()->value() * $this->z2->im()->value();
        $div2Part2 = pow($this->z2->re()->value(), 2) + pow($this->z2->im()->value(), 2);
        $div2 = $div2Part1 / $div2Part2;

        return $div1 . '+' . $div2 . 'i';
    }
}
