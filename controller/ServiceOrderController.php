<?php

require_once "controller/dto/ServiceOrderDTO.php";
require_once "model/entity/AnimalCategory.php";

class ServiceOrderController
{
	public function listServiceOrders()
	{
		$orders =[
			new ServiceOrderDTO(1, "João Silva", "10-01-2025", "Pendente", "Banho", 50.00, "Bob", AnimalCategory::DOG, 60),
			new ServiceOrderDTO(2, "Maria Oliveira", "10-02-2025", "Concluído", "Tosa", 70.00, "Mel", AnimalCategory::CAT, 45),
			new ServiceOrderDTO(3, "Carlos Pereira", "10-03-2025", "Cancelado", "Vacinação", 30.00, "Meg", AnimalCategory::DOG, 30),
			new ServiceOrderDTO(4, "Ana Costa", "10-04-2025", "Pendente", "Consulta Veterinária", 100.00, "Magali", AnimalCategory::CAT, 90),
		];

		include_once "view/serviceOrderList.php";
	}
}

?>