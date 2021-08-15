<?php

namespace App\Equipment;

class Equipment
{
	public string $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
}
