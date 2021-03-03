<?php

namespace Complex\Values;

final class Z
{
    /** @var Re */
    private $re;

    /** @var Im */
    private $im;

    public function __construct(Re $re, Im $im)
    {
        $this->re = $re;
        $this->im = $im;
    }

    public function re(): Re
    {
        return $this->re;
    }

    public function im(): Im
    {
        return $this->im;
    }
}