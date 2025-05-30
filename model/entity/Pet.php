<?php

class Pet
{
	private $id;
	private $createdAt;
	
	// Obrigatórios;
	private $name;
	private $species;
	private $age;

	public function __construct($id, $name, $species, $age)
	{
		$this->id = $id;
		$this->createdAt = date("d.m.Y");
		$this->name = $name;
		$this->species = $species;
		$this->age = $age;
	}
}

?>