<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Ver el elemento</title>
</head>

<body>
	<div class="container-fluid">
		<div class="container">
			<ul>
				<li>Id: <?= $book['id'] ?></li>
				<li>Titulo: <?= $book['titulo'] ?></li>
				<li>Páginas: <?= $book['paginas'] ?></li>
			</ul>
			<a class="btn btn-link" href="<?= base_url('/book') ?>">Regresar</a>
		</div>
	</div>
</body>

</html>
