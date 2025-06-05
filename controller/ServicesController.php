<?php

class ServicesController
{
	private $services = array();
	private bool $editMode;

	public function __construct()
	{
		$this->services = 
		[
			new ServicesDTO(1, "Banho", "Serviço de banho completo.", [AnimalCategory::CAT, AnimalCategory::DOG], 50.00, 60),
			new ServicesDTO(2, "Tosa", "Tosa completa para cães e gatos", [AnimalCategory::CAT, AnimalCategory::DOG], 70.00, 45),
			new ServicesDTO(3, "Vacinação", "Vacinação anual para cães e gatos", [AnimalCategory::CAT, AnimalCategory::DOG, AnimalCategory::RODENT], 30.00, 30),
			new ServicesDTO(4, "Consulta Veterinária", "Consulta com veterinário especializado", AnimalCategory::getAll(), 100.00, 90),
		];

		$this->editMode = isset($_GET['acao']) && $_GET['acao'] === 'editar';
	}
	
	public function listServices()
	{
		$services = $this->services;
		$editMode = $this->editMode;

		include_once 'view/servicesList.php';
	}

	public function showService()
	{
		$service = new ServicesDTO();
		$editMode = $this->editMode;

		if (isset($_GET['id']))
		{
			$id = $_GET['id'];

			if($id !== null)
			{
				foreach ($this->services as $s)
				{
					if ($s->id == $id)
					{
						$service = $s;
						break;
					}
				}
			}
		}

		include_once 'view/service.php';
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