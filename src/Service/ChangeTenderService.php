<?php

namespace App\Service;

use App\Entity\Change;
use App\Strategy\ChangeTenderStrategy;

class ChangeTenderService
{
    /**
     * @var float
     */
    private $totalCost;

    /**
     * @var float
     */
    private $amountProvided;

    /**
     * ChangeTenderService constructor.
     * @param float $totalCost
     * @param float $amountProvided
     */
    function __construct(float $totalCost, float $amountProvided)
    {
        $this->totalCost      = $totalCost;
        $this->amountProvided = $amountProvided;
    }

    /**
     * Calculate the difference between amount given and the cost.
     * @return float
     */
    private function calculateChange(): float
    {
        return $this->amountProvided - $this->totalCost;
    }

    public function getChangeFromPerson(): Change
    {
        $changeStrategy = new ChangeTenderStrategy(ChangeTenderStrategy::LEAST_BILLS);
        $change = $changeStrategy->tenderChange($this->calculateChange());

        return $change;
    }

    public function getChangeFromMachine(): Change
    {
        $changeStrategy = new ChangeTenderStrategy(ChangeTenderStrategy::USE_ONE_DOLLAR_BILLS);
        $change = $changeStrategy->tenderChange($this->calculateChange());

        return $change;
    }
}