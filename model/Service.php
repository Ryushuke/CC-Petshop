<?php

class Service
{
	private $id;
	private $createdAt;
	private $updatedAt;
	
	// Obrigatórios;
	private $name;
	private $description;
	private $price;
	private $duration;
	private $animal;

	public function __construct($name = '', $description = '', $price = 0.0, $duration = 0, $animal = '', $id = null, $createdAt = null, $updatedAt = null)
	{
		$this->id = $id;
		$this->name = $name;
		$this->description = $description;
		$this->price = $price;
		$this->duration = $duration;
		$this->animal = $animal;
		$this->createdAt = $createdAt ? new \DateTime($createdAt) : new \DateTime();
		$this->updatedAt = $updatedAt ? new \DateTime($updatedAt) : $this->createdAt;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function getDuration()
	{
		return $this->duration;
	}
	
	public function getCategory()
	{
		return $this->animal;
	}

	public function getUpdatedAt()
	{
		return $this->updatedAt;
	}

	public function toDto()
	{
		return new ServiceDTO(
			id: $this->id,
			name: $this->name,
			description: $this->description,
			price: $this->price,
			duration: $this->duration,
			category: $this->animal,
			createdAt: $this->createdAt,
			updatedAt: $this->updatedAt,
		);
	}
}

?>