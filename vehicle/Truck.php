<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $load = 0;
    private int $capacity;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];


    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->capacity = $capacity;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad(int $load)
    {
        if ($this->load > $this->capacity) {
            return "error, load can't be superior to capacity.";
        } else {
            $this->load = $load;
        }
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }


    public function isFull()
    {
        if ($this->load < $this->capacity) {
            return "in filling";
        } elseif ($this->load === $this->capacity) {
            return "full";
        } else {
            return "error, load can't be superior to the capacity";
        }
    }
}