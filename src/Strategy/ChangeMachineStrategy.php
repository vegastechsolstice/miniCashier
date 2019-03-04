<?php

namespace App\Strategy;

use App\Entity\Change;

class ChangeMachineStrategy extends AbstractChangeTenderStrategy implements ChangeTenderStrategyInterface
{
    /**
     * @param float $amount
     * @return Change
     */
    public function tenderChange(float $amount): Change
    {
        $change = new Change();

        $change->setOnes($this->getOnes($amount));
        $amount -= 1 * $change->getOnes();

        $change->setQuarters($this->getQuarters($amount));
        $amount -= 0.25 * $change->getQuarters();

        $change->setDimes($this->getDimes($amount));
        $amount -= 0.1 * $change->getDimes();

        $change->setNickels($this->getNickels($amount));
        $amount -= 0.05 * $change->getNickels();

        $change->setPennies($this->getPennies($amount));
        $amount -= 0.01 * $change->getPennies();

        return $change;
    }
}