<?php

require_once 'controller/ServiceDTO.php';

function renderService(ServiceDTO $service, $position)
{
	$html = "<tr>\n";
	$html .= "<td>" . $position . "</td>";
	$html .= "<td>" . date("d-M-Y H:i", $service->createdAt->getTimestamp()) . "</td>";
	$html .= "<td>" . $service->name . "</td>";
	$html .= "<td>" . $service->duration . "</td>";
	$html .= "<td>R$ " . number_format($service->price, 2, ",", ".") . "</td>";
	$html .= "<td>" . $service->category . "</td>";
	$html .= "<td>" . date("d-M-Y H:i", $service->updatedAt->getTimestamp()) . "</td>";
	$html .= "</tr>";
	echo $html;
}

?>

<div class="order-list">
	<h2>Lista de Serviços</h2>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Criado em</th>
				<th>Serviço</th>
				<th>Duração</th>
				<th>Preço</th>
				<th>Animal</th>
				<th>Atualizado em</th>
			</tr>
		</thead>
		<tbody>
			<?php
			for ($i=0; $i < count($services); $i++)
			{
				renderService($services[$i], $i + 1);
			}
			?>
		</tbody>
	</table>
</div>