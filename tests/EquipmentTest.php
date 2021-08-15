<?php

namespace Test;

use App\Equipment\Equipment;
use App\Survivor\Survivor;


use PHPUnit\Framework\TestCase;

class EquipmentTest extends TestCase
{
    public function test_that_equipment_has_a_name()
	{
		$equipment = new Equipment("Palo");
		$this->assertEquals("Palo", $equipment->name);
	}
}
