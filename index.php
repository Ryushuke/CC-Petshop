<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jorgina Petshop</title>
	<link rel="icon" href="images/favicon.svg" type="image/svg+xml" sizes="any" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&family=Playpen+Sans+Hebrew:wght@100..800&display=swap" rel="stylesheet">
</head>
<body>
<?php
include_once "view/header.php";
include_once "controller/ServiceOrderController.php";
$controller = new ServiceOrderController();
$controller->listServiceOrders();
?>
</body>
</html>