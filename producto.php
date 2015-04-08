<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1 user-scalable=no" />
<meta name="keywords" lang="es" content="">
<meta name="robots" content="All">
<meta name="description" lang="es" content="">
<title>Productos | BIGMARKET.COM MAYORISTA</title>
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/stylesheetadmin.css" />
<link rel="stylesheet" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/style-menu.css">
<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
</head>
<body>
<header>
<div id="lado1"><a href="/"><h2>Administrador</h2></a></div>
</header>
<nav>
	<div id="lado2"><?php include("menu2.html"); ?></div>
</nav>
<section class="principal">
	<h2>Productos</h2>
	<form class="forma">
		<select required>
			<option value="">Seleccionar</option>
			<option value="crear">Crear</option>
			<option value="editar">Editar</option>
		</select>
		<input type="text" placeholder="Nombre del Producto" required>
		<input type="text" placeholder="Caracteristica" required>
		<input type="number" placeholder="Valor Unitario" required>
		<select required>
			<option value="">Seleccionar Distribuidor</option>
			<option value="emp1">N Empresa 1</option>
			<option value="emp2">N Empresa 2</option>
		</select>
		<input type="file">
		<label>Abrobado </label><input type="radio" value="abrobado"> <label>Pendiente </label><input type="radio" value="abrobado">
		<br>
		<input type="submit" value="Guardar">
	</form>
</section>
	
</body>
</html>