<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1 user-scalable=no" />
<meta name="keywords" lang="es" content="">
<meta name="robots" content="All">
<meta name="description" lang="es" content="">
<title>Compradores | BIGMARKET.COM MAYORISTA</title>
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
	<h2>Compradores</h2>
	<form class="forma">
		<select required>
			<option value="">Seleccionar</option>
			<option value="crear">Crear</option>
			<option value="editar">Editar</option>
		</select>
		<input type="text" placeholder="Nit o CC" required>
		<input type="text" placeholder="Razón Social" required>
		<input type="text" placeholder="Telefono" required>
		<input type="text" placeholder="Movil">
		<input type="text" placeholder="Dirección" required>
		<input type="email" placeholder="Email" required>
		<input type="text" placeholder="Contraseña" required>
		<label>Abrobado </label><input type="radio" value="abrobado"> <label>Pendiente </label><input type="radio" value="abrobado">
		<br>
		<input type="submit" value="Guardar">
	</form>
</section>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/script-menu.js"></script>	
</body>
</html>