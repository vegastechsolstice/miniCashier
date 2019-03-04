<?php

namespace App\Strategy;

abstract class AbstractChangeTenderStrategy {
    protected function getHundreds(float $amount): int
    {
        return intdiv($amount, 100);
    }

    protected function getTwenties(float $amount): int
    {
        return intdiv($amount, 20);
    }

    protected function getTens(float $amount): int
    {
        return intdiv($amount, 10);
    }

    protected function getFives(float $amount): int
    {
        return intdiv($amount, 5);
    }

    protected function getOnes(float $amount): int
    {
        return intdiv($amount, 1);
    }

    protected function getQuarters(float $amount): int
    {
        return (int) floor($amount / 0.25);
    }

    protected function getDimes(float $amount): int
    {
        return (int) floor($amount / 0.10);
    }

    protected function getNickels(float $amount): int
    {
        return (int) floor($amount / 0.05);
    }

    protected function getPennies(float $amount): int
    {
        return (int) floor($amount / 0.01);
    }
}