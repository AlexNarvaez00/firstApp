<!DOCTYPE html>
<html lang="es">

<head>
 <?php include __DIR__ . '/../Components/Head.php' ?>
</head>

<body>
 <div class="container-fluid">
  <div class="container">
   <section>
    <?php include __DIR__ . '/../Components/Header.php' ?>
   </section>
   <main>
    <section class="my-5 d-flex justify-content-end">
     <a href="<?= base_url('/book/new') ?>" class="btn btn-outline-primary">
      <i class="bi bi-plus-circle me-2"></i>
      Agregar registro
     </a>
    </section>
    <section>
     <table class="table">
      <thead>
       <tr>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Paginas</th>
        <th scope="col">Ver/Editar/Eliminar</th>
       </tr>
      </thead>
      <tbody>
       <?php foreach ($rows as $element) : ?>
        <tr>
         <td><?php echo $element['id'] ?></td>
         <td><?php echo $element['titulo'] ?></td>
         <td><?php echo $element['paginas'] ?></td>
         <!--Secciones de los botones-->
         <td class="d-flex justify-content-between">
          <!--Ver-->
          <a href="<?= base_url('/book/' . $element['id']) ?>" class="btn btn-outline-success">
           <i class="bi bi-eye"></i>
          </a>
          <!--Editar-->
          <a href="<?= base_url('book' . '/' . $element['id'] . '/edit') ?> " class="btn btn-outline-warning">
           <i class="bi bi-pen"></i>
          </a>
          <!--Borrar-->
          <form action="<?= site_url('book/' . $element['id']) ?>" method="POST">
           <!--Esta linea nos ayuda a saber que metodo que no sea "POST/GET" usaremos-->
           <input type="hidden" name="_method" value="DELETE" />
           <button type="submit" class="btn btn-outline-danger">
            <i class="bi bi-x-circle"></i>
           </button>
          </form>
         </td>
        </tr>
       <?php endforeach; ?>
      </tbody>
     </table>
     <?= $pager->links()?>
    </section>
   </main>
   <section>
    <?php include __DIR__ . '/../Components/Footer.php' ?>
   </section>
  </div>
 </div>
</body>

</html>
