<?php

namespace Test;

use App\Survivor\Survivor;
use App\Equipment\Equipment;

use PHPUnit\Framework\TestCase;

class SurvivorTest extends TestCase
{
	public function test_that_survivor_has_a_name()
	{
		$survivor = new Survivor("Breach");
		$this->assertEquals("Breach", $survivor->name);
	}

	public function test_that_survivor_begins_with_0_wounds()
	{
		$survivor = new Survivor("Breach");
		$this->assertEquals(0, $survivor->wounds);
	}

	public function test_that_survivivor_dies_after_2_wounds()
	{
		$survivor = new Survivor("Breach");

		$survivor->wounds = 2;
		$survivor->checkWounds();

		$this->assertFalse($survivor->isAlive);
	}

	public function test_that_survivivor_starts_with_3_actions()
	{
		$survivor = new Survivor("Breach");

		$this->assertEquals(3, $survivor->actions);
	}

	public function test_that_survivivor_can_carry_up_max_5_pieces_of_equipment()
	{
		$equipment = ["Baseball Bat", "Axe", "ChainSaw", "Pistol", "CrossBow", "elPeneDeSatulno"];
		$survivor = new Survivor("Breach");

		$check = $survivor->addEquipment($equipment);

		$this->assertEquals("asd", $check);
	}
}
