<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [

        'fuel',
        'electric',

    ];
        protected int $storageCapacity;
        protected int $loading = 0;
        protected string $energy;

        public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity, string $loaded)
        
        {

            parent::__construct($color, $nbSeats);
        
            $this->setEnergy($energy);
            $this->setStorageCapacity($storageCapacity);
            $this->SetLoaded($loaded);
        }

        public function setStorageCapacity(int $storageCapacity): void
        {
            $this->storageCapacity = $storageCapacity;
        }

        public function getEnergy(): string
        {
            return $this->$energy;
        }

        public function setEnergy(string $energy): void
        {
            if (in_array($energy, self::ALLOWED_ENERGIES)) {
                $this->energy = $energy;
            }
            return $this;
        }
        
        public function getStorageCapacity(): int
        {
            return $this->storageCapacity;
        }

        public function setStorageCapacity(int $storageCapacity): void
        {
            $this->storageCapacity = $storageCapacity;
        }

        public function setLoading(): int
        {
            $this->loading = $loading;
        }
        
        public function getLoading(int $loading): void
        {
            return $this->loading;
        }
        
        public function load(): string
        {
            $sentence = "Loading, please wait...";

            while($this->loading < 100)
            if($this->loading == $this->storageCapacity) {
                $sentence = 'The truck is loaded.';
            }
            return $sentence;
        }

}