<?php

require_once "model/entity/AnimalCategory.php";

?>


<div class="service main-content">
	<h2 class="title">Serviço</h2>
	<form action="?nav=lista&acao=editado" method="post">
		<input type="hidden" name="id" value="<?php echo $service->id; ?>" />
		
		<div>
			<label for="name">Nome do Serviço:</label>
			<input type="text" id="name" name="name" value="<?php echo htmlspecialchars($service->name); ?>" required/>
		</div>
		
		<div>
			<label for="description">Descrição:</label>
			<textarea id="description" name="description" required><?php echo htmlspecialchars($service->description); ?></textarea>
		</div>

		<div>
			<label for="price">Preço:</label>
			<input type="number" class="inline" id="price" name="price" step="0.01" value="<?php echo number_format($service->price, 2, ',', '.'); ?>" required />

			<label for="duration">Duração (minutos):</label>
			<input type="number" class="inline" id="duration" name="duration" value="<?php echo $service->duration; ?>" required />
		</div>

		<div>
			<label for="category">Categoria:</label>
			<input type="text" id="category" name="category" value="<?php echo htmlspecialchars($service->category); ?>" required/>
		</div>

		<div>
			<input type="submit" class="button-submit" value="<?php echo $editMode ? 'Salvar' : 'Agendar'; ?>" />
			<input type="button" class="button-cancel" value="Cancelar" onclick="location.href='?nav=lista'" />
		</div>
	</form>
</div>