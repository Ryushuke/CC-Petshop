<?php

class ServicesController
{

	public function listServices()
	{
		$services = 
		[
			new ServicesDTO(1, "Banho", "Serviço de banho completo.", [AnimalCategory::CAT, AnimalCategory::DOG], 50.00, 60),
			new ServicesDTO(2, "Tosa", "Tosa completa para cães e gatos", [AnimalCategory::CAT, AnimalCategory::DOG], 70.00, 45),
			new ServicesDTO(3, "Vacinação", "Vacinação anual para cães e gatos", [AnimalCategory::CAT, AnimalCategory::DOG, AnimalCategory::RODENT], 30.00, 30),
			new ServicesDTO(4, "Consulta Veterinária", "Consulta com veterinário especializado", [AnimalCategory::ALL], 100.00, 90),
		];
		
		$editMode = isset($_GET['acao']) && $_GET['acao'] === 'editar';

		include_once 'view/servicesList.php';
	}
}

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