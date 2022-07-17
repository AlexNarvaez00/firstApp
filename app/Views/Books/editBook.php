<!DOCTYPE html>
<html lang="es">
<?php

helper('html');
?>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Home</title>
        <?= link_tag('css/bootstrap.css'); ?>
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
                                                        <form action="<?= base_url('book') . '/' . $book['id'] ?>" method="POST" enctype="multipart/form-data">
                                                                <input type="hidden" name="_method" value="PUT" />
                                                                <div class="mb-3">
                                                                        <label class="form-label" for="id">ID</label>
                                                                        <input class="form-control" type="text" id="id" name="id" value="<?= $book['id'] ?>" disabled </div>
                                                                        <div class="mb-3">
                                                                                <label class="form-label" for="titulo">Titutlo</label>
                                                                                <input class="form-control" type="text" id="titulo" name="titulo" value="<?= $book['titulo'] ?>">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                                <label class="form-label" for="paginas">Paginas</label>
                                                                                <input class="form-control" type="number" id="paginas" name="paginas" value="<?= $book['paginas'] ?>">
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
