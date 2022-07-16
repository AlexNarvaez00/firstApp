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
					<div class="row justify-content-center">
						<div class="col-8 col-md-6 col-sm-12">
							<form action="<?= site_url('book') ?>" method="POST" enctype="multipart/form-data">
								<div class="mb-3">
									<label class="form-label" for="id">ID</label>
									<input class="form-control" type="text" id="id" name="id">
								</div>
								<div class="mb-3">
									<label class="form-label" for="titulo">Titutlo</label>
									<input class="form-control" type="text" id="titulo" name="titulo">
								</div>
								<div class="mb-3">
									<label class="form-label" for="paginas">Paginas</label>
									<input class="form-control" type="number" id="paginas" name="paginas">
								</div>
								<div class="mb-3">
									<button class="btn btn-primary" type="submit">Guardar</button>
								</div>
							</form>
						</div>
					</div>
				</section>
			</main>
		</div>
	</div>
	<script src="js/bootstrap.bundle.js"></script>
</body>

</html>
