<?php

function renderOrder($order, $position)
{
	$html = "<tr>
				<td>{$position}</td>
				<td>{$order->service}</td>
				<td>{$order->category->getIcon()} {$order->pet}</td>
				<td>{$order->clientName}</td>
				<td>{$order->date}</td>
				<td>{$order->status}</td>
			</tr>";
	
	echo $html;
}

?>

<div class="order-list">
	<h2>Lista de Serviços</h2>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Serviço</th>
				<th>Pet</th>
				<th>Tutor</th>
				<th>Data do Pedido</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php
			for ($i=0; $i < count($orders); $i++)
			{
				renderOrder($orders[$i], $i + 1);
			}
			?>
		</tbody>
	</table>
</div>