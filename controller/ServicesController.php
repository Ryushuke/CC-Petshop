<?php

require_once 'model/repository/ServiceRepository.php';
require_once 'dto/ServiceDTO.php';

class ServicesController
{
	private ServiceRepository $services;
	private bool $editMode;

	public function __construct()
	{
		$this->services = new ServiceRepository();
		$this->editMode = isset($_GET['acao']) && $_GET['acao'] === 'editar';
	}
	
	public function listServices()
	{
		$services = $this->services->getServices();
		$editMode = $this->editMode;

		include_once 'view/servicesList.php';
	}

	public function showService()
	{
		$service = new ServicesDTO();
		echo self::isCreateOrUpdateRequest();

		if(self::isCreateOrUpdateRequest())
		{
			$this->createOrUpdate();
			return;
		}

		if (isset($_GET['id']))
		{
			$id = $_GET['id'];

			if($id !== null)
			{
				foreach ($this->services->getServices() as $s)
				{
					if ($s->id == $id)
					{
						$service = $s;
						break;
					}
				}
			}
		}

		$editMode = $this->editMode;
		include_once 'view/service.php';
	}

	static function isCreateOrUpdateRequest() : bool
	{
		return isset($_GET['acao']) && $_GET['acao'] === 'editado';
	}

	function createOrUpdate()
	{
		$service = new ServicesDTO(
			id: intval($_POST['id']),
			name: $_POST['name'],
			description: $_POST['description'],
			price: floatval(str_replace(',', '.', $_POST['price'])),
			duration: intval($_POST['duration'])
		);

		foreach(AnimalCategory::cases() as $category)
		{
			if(isset($_POST[$category->name]) && $_POST[$category->name] === 'on')
			{
				$service->category[] = $category;
			}
		}

		$this->services->createOrUpdateService($service);
		// header('Location: ?nav=services');
		exit();
	}
}
?>