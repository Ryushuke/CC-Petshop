<?php

class ServicesDTO
{
	public $id;
	public $name;
	public $description;
	public $category;
	public $price;
	public $duration;
	
	public function __construct($id = null, $name = null, $description = null, $category = null, $price = null, $duration = null)
	{
		$this->id = $id;
		$this->name = $name;
		$this->description = $description;
		$this->category = $category;
		$this->price = $price;
		$this->duration = $duration;
	}
}
?>