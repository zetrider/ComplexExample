<?php

namespace Complex\Values;

final class Re
{
    /** @var float */
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function value(): float
    {
        return (float)$this->value;
    }

    public function __toString(): string
    {
        return (string)$this->value;
    }
}