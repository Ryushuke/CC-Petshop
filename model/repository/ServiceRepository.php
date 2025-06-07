<?php

class ServiceRepository
{
	private static $services;

	public function __construct()
	{
		print_r(self::$services);
		if(!isset(self::$services))
		{
			$this->loadServices();
		}
	}

	function loadServices()
	{
		self::$services = 
		[
			new ServicesDTO(1, "Banho", "Serviço de banho completo.", [AnimalCategory::CAT, AnimalCategory::DOG], 50.00, 60),
			new ServicesDTO(2, "Tosa", "Tosa completa para cães e gatos", [AnimalCategory::CAT, AnimalCategory::DOG], 70.00, 45),
			new ServicesDTO(3, "Vacinação", "Vacinação anual para cães e gatos", [AnimalCategory::CAT, AnimalCategory::DOG, AnimalCategory::RODENT], 30.00, 30),
			new ServicesDTO(4, "Consulta Veterinária", "Consulta com veterinário especializado", AnimalCategory::getAll(), 100.00, 90),
		];
	}

	public function createOrUpdateService($service)
	{
		print_r($service);
		if(!isset($service->id) || $service->id === null)
		{
			$service->id = count(self::$services) + 1;
			self::$services[] = $service;
			return;
		}

		for($i = 0; $i < count(self::$services); $i++)
		{
			if (self::$services[$i]->id == $service->id)
			{
				self::$services[$i] = $service;
				break;
			}
		}
	}

	public function getServices()
	{
		return self::$services;
	}
}

?>