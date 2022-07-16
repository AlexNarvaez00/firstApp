<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="../css/bootstrap.css" media="all">
</head>

<body>
	<div class="container-fluid">
		<div class="container">
			<section>
				<?php include __DIR__ . '/../Components/Header.php' ?>
			</section>
			<main>
				<section class="mt-5 px-4">
					<h1>Acciones disponibles</h1>
					<ul>
						<li><a href="<?= base_url('book/new') ?>">Agregar un nuevo libro</a></li>
					</ul>
				</section>
				<section>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Titulo</th>
								<th scope="col">Paginas</th>
								<th scope="col">Ver</th>
								<th scope="col">Editar</th>
								<th scope="col">Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($rows as $element) : ?>
								<tr>
									<td><?php echo $element['id'] ?></td>
									<td><?php echo $element['titulo'] ?></td>
									<td><?php echo $element['paginas'] ?></td>
									<!--Secciones de los botones-->
									<td><a href="<?= base_url('/book/' . $element['id']) ?>">realizar</a></td>
									<td><a href="<?= base_url('book') . '/' . $element['id'] . '/edit' ?>">realizar</a></td>
									<td>
										<form action="<?= site_url('book/') . $element['id'] ?>" method="POST">
											<!--Esta linea nos ayuda a saber que metodo que no sea "POST/GET" usaremos-->
											<input type="hidden" name="_method" value="DELETE" />
											<button type="submit">Realizar</button>
										</form>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</section>
			</main>
		</div>
	</div>
	<script src="../js/bootstrap.bundle.js"></script>
</body>

</html>

</html>
