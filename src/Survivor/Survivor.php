<?php

namespace App\Survivor;

use App\Equipment\Equipment;
use Exception;

// interface ISurvivor {
// 	public function checkWounds(): void;
// 	public function addEquipment(array $pieces)
// }

class Survivor
{
    public string $name;
    public int $wounds = 0;
    public int $actions = 3;
    public bool $isAlive = true;
    public array $equipment = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function checkWounds(): void
    {
        if ($this->wounds === 2) {
            $this->isAlive = false;
        };
    }

    public function addEquipment(array $pieces)
    { 
        foreach ($pieces as $piece) {
            if (count($this->equipment) > 4) return "asd";
            array_push($this->equipment, new Equipment($piece));
        }
    }
}
