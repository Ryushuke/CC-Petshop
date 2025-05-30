<?php

class AnimalCategory
{
	private $id;
	private $createdAt;
	private $description;

	// Obrigatórios;
	private $name;

	public function __construct($id, $name, $description)
	{
		$this->id = $id;
		$this->createdAt = date("d.m.Y");
		$this->name = $name;
		$this->description = $description;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getDescription()
	{
		return $this->description;
	}
}