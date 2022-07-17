<!--
Son las etiquetas que van dentro de <head></head> de la pagina, decir las cosas
basicas.
Lo puse asi para no romper el HTML XD
-->
<?= helper('html') ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<!-- 
Esto inserta la etique de link para agregar el CSS, no importa 
la ruta donde estemos, aun asi la va a reconocer
-->
<?= link_tag('css/bootstrap.css') ?>
