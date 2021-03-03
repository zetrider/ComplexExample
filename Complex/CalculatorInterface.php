<?php

namespace Complex;

interface CalculatorInterface
{
    public function addition(): string;
    public function subtraction(): string;
    public function multiplication(): string;
    public function division(): string;
}