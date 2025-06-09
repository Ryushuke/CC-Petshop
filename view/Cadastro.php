<?php


?>

	<div class="service main-content">
		<h2 class="title">Serviço: <?php echo $service->name ?? 'Novo'; ?></h2>
		<form action="?nav=<?php echo $editMode ? 'editar' : 'novo'; ?>" method="post">
			<input type="hidden" name="id" value="<?php echo $service->id; ?>" />
			
			<div>
				<label for="name">Tipo de Serviço:</label>
				<input type="text" id="name" name="name" value="<?php echo htmlspecialchars($service->name); ?>" required/>
			</div>

			<div>
				<label for="price">Preço: (R$)</label>
				<input type="number" class="inline" id="price" name="price" step="0.01" value="<?php echo number_format($service->price, 2, ',', '.'); ?>" min='0' pattern="^\d*(\.\d{0,2})?$" required />

				<label for="duration">Duração (minutos):</label>
				<input type="number" class="inline" id="duration" name="duration" value="<?php echo $service->duration ?? '0'; ?>" min='0' required />
			</div>

			<div>
				<label for="category">Categoria do Animal:</label>
				<input type="text" id="category" name="category" value="<?php echo htmlspecialchars($service->category); ?>" required/>
			</div>

			<div>
				<input type="submit" class="button-submit" value="<?php echo $editMode ? 'Atualizar' : 'Criar'; ?>" />
				<input type="button" class="button-cancel" value="Cancelar" onclick="location.href='?nav=lista'" />
			</div>
		</form>
	</div>