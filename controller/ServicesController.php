<?php

require_once "model/ServiceDAO.php";
require_once "controller/ServiceDTO.php";

class ServicesController
{
	private ServiceDAO $services;
	private bool $editMode;

	public function __construct()
	{
		$this->services = new ServiceDAO();
		$this->editMode = isset($_GET['acao']) && $_GET['acao'] === 'editar';
	}
	
	public function listServices()
	{
		$services = $this->services->getServices();
		$editMode = $this->editMode;

		include_once 'view/Lista.php';
	}

	public function showService()
	{
		$service = new ServiceDTO();

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

		$editMode = $service->id !== null;
		include_once 'view/Cadastro.php';
	}

	static function isCreateOrUpdateRequest() : bool
	{
		return isset($_GET['acao']) && $_GET['acao'] === 'editado';
	}

	static function getData() : ServiceDTO
	{
		return new ServiceDTO(
			id: intval($_POST['id']),
			name: $_POST['name'],
			price: floatval(str_replace(',', '.', $_POST['price'])),
			duration: intval($_POST['duration']),
			category: $_POST['category']
		);
	}

	public function updateService()
	{
		$service = self::getData();

		$this->services->updateService($service);
		header('Location: ?nav=lista');
		exit();
	}

	public function createService()
	{
		$service = self::getData();
		$this->services->createService($service);
		header('Location: ?nav=lista');
		exit();
	}
}
?>