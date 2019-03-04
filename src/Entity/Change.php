<?php

namespace App\Entity;

/**
 * Class Change
 * @Entity
 */
class Change
{
    /** @Id @Column(type="integer") @GeneratedValue */
    private $id;

    /** @Column(type="integer") */
    private $pennies;

    /** @Column(type="integer") */
    private $nickels;

    /** @Column(type="integer") */
    private $dimes;

    /** @Column(type="integer") */
    private $quarters;

    /** @Column(type="integer") */
    private $ones;

    /** @Column(type="integer") */
    private $fives;

    /** @Column(type="integer") */
    private $tens;

    /** @Column(type="integer") */
    private $twenties;

    /** @Column(type="integer") */
    private $hundreds;

    /**
     * @return mixed
     */
    public function getPennies()
    {
        return $this->pennies;
    }

    /**
     * @param mixed $pennies
     * @return Change
     */
    public function setPennies($pennies): void
    {
        $this->pennies = $pennies;
    }

    /**
     * @return mixed
     */
    public function getNickels()
    {
        return $this->nickels;
    }

    /**
     * @param mixed $nickels
     * @return Change
     */
    public function setNickels($nickels): void
    {
        $this->$nickels = $nickels;
    }

    /**
     * @return mixed
     */
    public function getDimes()
    {
        return $this->dimes;
    }

    /**
     * @param mixed $dimes
     * @return Change
     */
    public function setDimes($dimes): void
    {
        $this->$dimes = $dimes;
    }

    /**
     * @return mixed
     */
    public function getQuarters()
    {
        return $this->quarters;
    }

    /**
     * @param mixed $quarters
     * @return Change
     */
    public function setQuarters($quarters): void
    {
        $this->quarters = $quarters;
    }

    /**
     * @return mixed
     */
    public function getOnes()
    {
        return $this->ones;
    }

    /**
     * @param mixed $ones
     * @return Change
     */
    public function setOnes($ones): void
    {
        $this->ones = $ones;
    }

    /**
     * @return mixed
     */
    public function getFives()
    {
        return $this->fives;
    }

    /**
     * @param mixed $fives
     * @return Change
     */
    public function setFives($fives): void
    {
        $this->fives = $fives;
    }

    /**
     * @return mixed
     */
    public function getTens()
    {
        return $this->tens;
    }

    /**
     * @param mixed $tens
     * @return Change
     */
    public function setTens($tens): void
    {
        $this->tens = $tens;
    }

    /**
     * @return mixed
     */
    public function getTwenties()
    {
        return $this->twenties;
    }

    /**
     * @param mixed $twenties
     * @return Change
     */
    public function setTwenties($twenties): void
    {
        $this->twenties = $twenties;
    }

    /**
     * @return mixed
     */
    public function getHundreds()
    {
        return $this->hundreds;
    }

    /**
     * @param mixed $hundreds
     * @return Change
     */
    public function setHundreds($hundreds): void
    {
        $this->hundreds = $hundreds;
    }
}
