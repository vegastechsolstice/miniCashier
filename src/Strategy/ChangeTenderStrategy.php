<?php

namespace App\Strategy;

use App\Entity\Change;

class ChangeTenderStrategy {
    public const LEAST_BILLS          = 1;
    public const USE_ONE_DOLLAR_BILLS = 2;

    /**
     * @var ChangeTenderStrategyInterface
     */
    private $strategy;

    public function __construct($strategyId = self::LEAST_BILLS)
    {
        switch ($strategyId) {
            case self::LEAST_BILLS:
                $this->strategy = new LeastBillsStrategy();
                break;
            case self::USE_ONE_DOLLAR_BILLS:
                $this->strategy = new ChangeMachineStrategy();
                break;
        }
    }

    public function tenderChange(float $change): Change
    {
        return $this->strategy->tenderChange($change);
    }
}