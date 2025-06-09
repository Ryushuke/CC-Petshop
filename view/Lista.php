<?php

require_once 'controller/ServiceDTO.php';

function sameDate(ServiceDTO $service) : bool
{
	return $service->createdAt == $service->updatedAt;
}

?>

	<div class="order-list">
		<h2 class="title">Lista de Serviços</h2>
		<input type="button" class="button-submit" value="Novo Serviço" onclick="location.href='?nav=cadastro'" />
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Criado em</th>
					<th>Serviço</th>
					<th>Duração (minutos)</th>
					<th>Preço (R$)</th>
					<th>Animal</th>
					<th>Atualizado em</th>
				</tr>
			</thead>
			<tbody>
<?php for ($i=0; $i < count($services); $i++): ?>
				<tr>
					<td><?php echo $i + 1; ?></td>
					<td><?php echo date("d-M-Y H:i", $services[$i]->createdAt->getTimestamp()); ?></td>
					<td><?php echo $services[$i]->name; ?></td>
					<td><?php echo $services[$i]->duration; ?></td>
					<td><?php echo number_format($services[$i]->price, 2, ",", "."); ?></td>
					<td><?php echo $services[$i]->category; ?></td>
					<td><?php echo sameDate($services[$i]) ? '-' : date("d-M-Y H:i", $services[$i]->updatedAt->getTimestamp()); ?></td>
					<td class="acoes">
						<input type="button" class="button-edit" value="Editar" onclick="location.href='?nav=cadastro&id=<?php echo $services[$i]->id; ?>'" />
						<input type="button" class="button-delete" value="Excluir" onclick="location.href='?nav=excluir&id=<?php echo $services[$i]->id; ?>'" />
					</td>
				</tr>
<?php endfor; ?>
			</tbody>
		</table>
	</div>