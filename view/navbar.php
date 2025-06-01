<div class="navbar">
	<ul>
		<li><a href="index.php?nav=home" <?php if (!isset($_GET['nav']) || $_GET['nav'] === "home") echo "class='active'"; ?>>Home</a></li>
		<li><a href="index.php?nav=agendamentos" <?php if (isset($_GET['nav']) && $_GET['nav'] === "agendamentos") echo "class='active'"; ?>>Agendamentos</a></li>
		<li><a href="index.php?nav=tutores" <?php if (isset($_GET['nav']) && $_GET['nav'] === "tutores") echo "class='active'"; ?>>Tutores</a></li>
	</ul>
</div>