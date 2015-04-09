<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1 user-scalable=no" />
<meta name="keywords" lang="es" content="">
<meta name="robots" content="All">
<meta name="description" lang="es" content="">
<title>Historial | BIGMARKET.COM MAYORISTA</title>
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
	<h2>Historial</h2>
	<div class="fechas">
		<form>
			<input type="date" required> Hasta <input type="date" required>
			<input type="submit" value="Buscar">
		</form>
	</div>
		<div class="tabla-pro">
	<table>
		<thead>
			<tr>
				<td>
					Numero
				</td>
				<td>
					Comprador
				</td>
				<td>
					Fecha de Pedido
				</td>
				<td>
					Ver Pedido
				</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="mayus">
					3
				</td>

				<td>
					Universidad UAN					
				</td>
				<td>
					03-02-2015
				</td>
				<td>
					<a href="">Pedido03022015</a>					
				</td>
				
			</tr>
			<tr>
				<td class="mayus">
					2
				</td>

				<td>
					Restaurante Pinol					
				</td>
				<td>
					03-02-2015
				</td>
				<td>
					<a href="">Pedido03022015</a>					
				</td>
				
			</tr>
			<tr>
				<td class="mayus">
					1
				</td>

				<td>
					Hotel la Cuna					
				</td>
				<td>
					03-02-2015
				</td>
				<td>
					<a href="">Pedido03022015</a>					
				</td>
				
			</tr>
		</tbody>
	</table>
	<p>Paginación</p>
	</div>


</section>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/script-menu.js"></script>	
</body>
</html>