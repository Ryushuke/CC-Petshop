<?php

class ServiceDTO
{
	public $id;
	public $name;
	public $description;
	public $category;
	public $price;
	public $duration;
	public $createdAt;
	public $updatedAt;
	
	public function __construct($id = null, $name = null, $description = null, $category = null, $price = null, $duration = null, $createdAt = null, $updatedAt = null)
	{
		$this->id = $id;
		$this->name = $name;
		$this->description = $description;
		$this->category = $category;
		$this->price = $price;
		$this->duration = $duration;
		$this->createdAt = $createdAt;
		$this->updatedAt = $updatedAt;
	}
}
?>