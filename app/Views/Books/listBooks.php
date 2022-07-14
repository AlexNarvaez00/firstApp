<!DOCTYPE html>
<!--
	En esta vista vamos a listar a todos los libros que tenemos en la base 
	de datos.
-->
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Listado de los libros</title>
</head>

<body>
	<h1>Listado de los libros</h1>
	<p>
		<?php
		/**
		 * Iteramos el arreglo que contiene los elementos de la base de datos
		 */
		?>
	<ul>
		<?php
		foreach ($elements as $item) {
			echo '<li>';
			echo '<span>id:' . $item['id'] . '</span>';
			echo '<ul>';
			echo '<li>' . $item['titulo'] . '</li>';
			echo '<li>' . $item['paginas'] . '</li>';
			echo '</ul>';
			echo '</li>';
		}
		?>
	</ul>
	</p>
</body>

</html>
