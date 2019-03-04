<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Change
 * @ORM\Entity(repositoryClass="App\Repository\ChangeRepository")
 */
class Change
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /** @ORM\Column(type="integer") */
    private $pennies;

    /** @ORM\Column(type="integer") */
    private $nickels;

    /** @ORM\Column(type="integer") */
    private $dimes;

    /** @ORM\Column(type="integer") */
    private $quarters;

    /** @ORM\Column(type="integer") */
    private $ones;

    /** @ORM\Column(type="integer") */
    private $fives;

    /** @ORM\Column(type="integer") */
    private $tens;

    /** @ORM\Column(type="integer") */
    private $twenties;

    /** @ORM\Column(type="integer") */
    private $hundreds;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getPennies(): int
    {
        return $this->pennies;
    }

    /**
     * @param int $pennies
     * @return void
     */
    public function setPennies($pennies): void
    {
        $this->pennies = $pennies;
    }

    /**
     * @return int
     */
    public function getNickels(): int
    {
        return $this->nickels;
    }

    /**
     * @param int $nickels
     * @return void
     */
    public function setNickels($nickels): void
    {
        $this->nickels = $nickels;
    }

    /**
     * @return int
     */
    public function getDimes(): int
    {
        return $this->dimes;
    }

    /**
     * @param int $dimes
     * @return void
     */
    public function setDimes($dimes): void
    {
        $this->dimes = $dimes;
    }

    /**
     * @return int
     */
    public function getQuarters(): int
    {
        return $this->quarters;
    }

    /**
     * @param int $quarters
     * @return void
     */
    public function setQuarters($quarters): void
    {
        $this->quarters = $quarters;
    }

    /**
     * @return int
     */
    public function getOnes(): int
    {
        return $this->ones;
    }

    /**
     * @param int $ones
     * @return void
     */
    public function setOnes($ones): void
    {
        $this->ones = $ones;
    }

    /**
     * @return int
     */
    public function getFives(): int
    {
        return $this->fives;
    }

    /**
     * @param int $fives
     * @return void
     */
    public function setFives($fives): void
    {
        $this->fives = $fives;
    }

    /**
     * @return int
     */
    public function getTens(): int
    {
        return $this->tens;
    }

    /**
     * @param mixed $tens
     * @return void
     */
    public function setTens($tens): void
    {
        $this->tens = $tens;
    }

    /**
     * @return int
     */
    public function getTwenties(): int
    {
        return $this->twenties;
    }

    /**
     * @param int $twenties
     * @return void
     */
    public function setTwenties($twenties): void
    {
        $this->twenties = $twenties;
    }

    /**
     * @return int
     */
    public function getHundreds(): int
    {
        return $this->hundreds;
    }

    /**
     * @param int $hundreds
     * @return void
     */
    public function setHundreds($hundreds): void
    {
        $this->hundreds = $hundreds;
    }
}
