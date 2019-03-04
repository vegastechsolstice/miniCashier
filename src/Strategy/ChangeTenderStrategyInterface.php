<?php

namespace App\Strategy;

use App\Entity\Change;

interface ChangeTenderStrategyInterface {
    public function tenderChange(float $amount): Change;
}