<?php

class Client
{
	private $id;
	private $createdAt;
	private $contact;
	
	// Obrigatórios;
	private $name;

	public function __construct($id, $name, $contact)
	{
		$this->id = $id;
		$this->createdAt = date("d.m.Y");
		$this->name = $name;
		$this->contact = $contact;
	}
}

?>