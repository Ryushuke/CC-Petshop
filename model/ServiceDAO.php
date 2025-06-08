<?php

require_once "model/repository/Connection.php";
require_once "model/entity/Service.php";

class ServiceDAO
{
	const TABLE_NAME = "servico";

	const COL_ID = "id";
	const COL_CREATED_AT = "created_at";
	const COL_NAME = "name";
	const COL_DESCRIPTION = "description";
	const COL_PRICE = "price";
	const COL_DURATION = "duration";
	const COL_CATEGORY = "category";
	const COL_UPDATED_AT = "updated_at";

	public function createOrUpdateService($data)
	{
		$service = new Service(
			$data->name,
			$data->description,
			$data->price,
			$data->duration,
			$data->category,
			$data->id,
		);

		if($data->id >= 0)
		{
			return $this->updateService($service);
		}
		else
		{
			return $this->createService($service);
		}
	}

	function createService($service)
	{
		$db = Connection::getConnection();
		$statement = $db->prepare('INSERT INTO ' . self::TABLE_NAME . " ("
			. self::COL_NAME . ',' . self::COL_DESCRIPTION . ',' . self::COL_PRICE . ',' . self::COL_DURATION . ',' . self::COL_CATEGORY
			. ") VALUES (:name, :description, :price, :duration, :category)");

		$statement->bindValue(':name', $service->getName());
		$statement->bindValue(':description', $service->getDescription());
		$statement->bindValue(':price', $service->getPrice());
		$statement->bindValue(':duration', $service->getDuration());
		$statement->bindValue(':category', $service->getCategory());
		print_r($statement);

		return $statement->execute();
	}

	function updateService($service)
	{
		$db = Connection::getConnection();
		$statement = $db->prepare('UPDATE ' . self::TABLE_NAME . ' SET '
			. self::COL_NAME . '= :name, ' . self::COL_DESCRIPTION . ' = :description, ' . self::COL_PRICE . ' = :price, '
			. self::COL_DURATION . ' = :duration, ' . self::COL_CATEGORY . ' = :category, '
			. 'WHERE ' . self::COL_ID . ' = :id');

		$statement->bindValue(':name', $service->getName());
		$statement->bindValue(':description', $service->getDescription());
		$statement->bindValue(':price', $service->getPrice());
		$statement->bindValue(':duration', $service->getDuration());
		$statement->bindValue(':category', $service->getCategory());
		$statement->bindValue(':id', $service->getId());

		return $statement->execute();
	}

	public function getServices()
	{
		$db = Connection::getConnection();
		$statement = $db->query('SELECT * FROM ' . self::TABLE_NAME);
		$result = $statement->fetchAll(\PDO::FETCH_ASSOC);
		$services = array();

		foreach ($result as $row)
		{
			$service = new Service
			(
				$row[self::COL_NAME],
				$row[self::COL_DESCRIPTION],
				$row[self::COL_PRICE],
				$row[self::COL_DURATION],
				$row[self::COL_CATEGORY],
				$row[self::COL_ID],
				$row[self::COL_CREATED_AT],
				$row[self::COL_UPDATED_AT],
			);

			$services[] = $service->toDto();
		}

		return $services;
	}
}

?>