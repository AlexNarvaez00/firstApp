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
					<?php foreach ($elements as $item) { ?>
						<p class="fw-bold">
							<?php echo $item['id'] ?>
						</p>
						<ul>
							<li><?php echo $item['titulo'] ?></li>
							<li><?php echo $item['paginas'] ?></li>
						</ul>
					<?php } ?>
				</section>
			</main>
		</div>
	</div>

	<script src="js/bootstrap.bundle.js"></script>
</body>

</html>

</html>
