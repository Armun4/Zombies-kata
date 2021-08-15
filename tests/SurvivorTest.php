<?php

namespace Test;

use App\Survivor;

use PHPUnit\Framework\TestCase;

class SurvivorTest extends TestCase
{

	public function test_that_survivor_has_a_name()
	{
		$survivor = new Survivor("Breach");
		$this->assertEquals("Breach", $survivor->name);
	}
}
