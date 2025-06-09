<?php

function renderList()
{
	$key = 'nav';
	$active = "lista";
	if(isset($_GET[$key]))
	{
		$active = $_GET[$key];
	}
	
	renderMainList($active);
	renderExtra($active);
}

function renderExtra($active)
{
	$extras = [
		'service' => 'Serviço',
		'agendamento' => 'Agendamento',
		'services' => 'Serviços',
	];

	if(!array_key_exists($active, $extras))
	{
		return;
	}
	
	$label = $extras[$active];

	echo "<li class=extra>{$label}</li>";
}

function renderMainList($activeSection)
{
	$sections = [ 'lista', 'cadastro' ];
	$sectionLabels = [ 'Lista', 'Cadastro' ];

	$active = array_search($activeSection, $sections);
	if($active === false)
	{
		$active = -1;
	}

	for($i = 0; $i < count($sections); $i++)
	{
		renderMain($sections[$i], $sectionLabels[$i], $i == $active);
	}
}

function renderMain($section, $label, bool $active)
{
	echo "<li><a href='index.php?nav={$section}'";

	if($active)
	{
		echo " class='active'";
	}

	echo ">{$label}</a></li>";
}

?>

<div class="navbar">
	<ul>
		<?php renderList(); ?>
	</ul>
</div>