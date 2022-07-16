<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="css/bootstrap.css" media="all">
</head>

<body>
	<div class="container-fluid">
		<div class="container">
			<section>
				<?php include 'Components/Header.php' ?>
			</section>
			<main>
				<p>
					¡Hola, estas en el inicio de todo!

				</p>
				<p>__DIR__ <?= __DIR__ ?></p>
				<p>__FILE__<?= __FILE__ ?></p>

			</main>
		</div>

	</div>
	<script src="js/bootstrap.bundle.js"></script>
</body>

</html>
