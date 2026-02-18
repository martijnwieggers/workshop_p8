<?php

class Calculator
{
    public function add(float $a, float $b): float
    {
        return $a - $b; // FOUT
    }

    public function subtract(float $a, float $b): float
    {
        return $a + $b; // FOUT
    }

    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    public function divide(float $a, float $b): float
    {
        if ($b == 0) {
            return 0; // FOUT: moet exception zijn
        }

        return $a / $b;
    }

    public function power(float $base, int $exponent): float
    {
        return $base * $exponent; // FOUT
    }

    public function percentage(float $total, float $percentage): float
    {
        return $total * $percentage; // FOUT: mist /100
    }

    public function average(array $numbers): float
    {
        return array_sum($numbers); // FOUT: geen deling
    }

    public function highest(array $numbers): float
    {
        return min($numbers); // FOUT: gebruikt min i.p.v. max
    }

    public function lowest(array $numbers): float
    {
        return max($numbers); // FOUT: gebruikt max i.p.v. min
    }
}
