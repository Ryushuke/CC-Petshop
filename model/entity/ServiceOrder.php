<?php

class ServiceOrder
{
	private $id;
	private $createdAt;
	
	// Obrigatórios;
	private $service;
	private $animal;
	private $client;
	private $date;
	private $time;
	private $status;

	public function __construct($id, $service, $animal, $client, $date, $time, $status)
	{
		$this->id = $id;
		$this->createdAt = date("d.m.Y");
		$this->service = $service;
		$this->animal = $animal;
		$this->client = $client;
		$this->date = $date;
		$this->time = $time;
		$this->status = $status;
	}
}

?>