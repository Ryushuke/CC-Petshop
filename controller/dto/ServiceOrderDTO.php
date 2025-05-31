<?php

class ServiceOrderDTO
{
	public $id;
	public $clientName;
	public $date;
	public $status;
	
	// Obrigatório
	public $service;
	public $price;
	public $pet;
	public $category;
	public $duration;

	public function __construct(
		$id = null,
		$clientName = null,
		$date = null,
		$status = null,
		$service = null,
		$price = null,
		$pet = null,
		$category = null,
		$duration = null)
	{
		$this->id = $id;
		$this->clientName = $clientName;
		$this->date = $date;
		$this->status = $status;
		$this->service = $service;
		$this->price = $price;
		$this->pet = $pet;
		$this->category = $category;
		$this->duration = $duration;
	}
}

?>