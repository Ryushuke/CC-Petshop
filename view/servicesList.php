<?php

function render($render, bool $edit)
{
	$html = "<div class='service-item'>";
	$action = $edit ? 'editar' : 'agendar';
	$html .= "<a class='edit-link' href=?nav=service&acao={$action}&id={$render->id}>";
	$html .= "<h3>{$render->name}</h3>";
	$html .= "<p>{$render->description}</p>";
	$html .= '<p>Preço: R$' . number_format($render->price, 2, ',','.') . "</p>";
	$html .= "<p>Para: ";
	foreach ($render->category as $category)
	{
		$html .= "<span class='category-icon'>{$category->getIcon()}</span> ";
	}
	$html .= "</p>";
	$html .= "</a></div>";
	
	echo $html;
}

function renderButton(bool $edit)
{
	$value = $edit ? 'Salvar' : 'Editar';
	$action = $edit ? 'voltar' : 'editar';

	echo "value='{$value}' action='{$action}' onclick=location.href='?nav=services&acao={$action}'";
}

function renderNewButton()
{
	$html = "<div class='service-item'><a class='edit-link' href=?nav=service&acao=editar&id=null>+</a></div>";
	echo $html;
}

?>

<div class="service-list main-content">
	<input type="button" class="button-edit" <?php renderButton($editMode); ?> />

	<h2 class="service-list title">Nossos Serviços</h2>
	<div class="service-list view">
		<?php
		foreach ($services as $service):
			render($service, $editMode);
		endforeach;
		
		if($editMode)
		{
			renderNewButton();
		}
		?>
	</div>
</div>