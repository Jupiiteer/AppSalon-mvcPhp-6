<h1 class="nombre-pagina">Nuevo Servicio</h1>
<p class="descripcio-pagina">Administración de Servicios</p>

<?php
// include_once __DIR__ . '/../templates/barra.php';
include_once __DIR__ . '/../templates/alertas.php';
?>

<form action="/servicios/crear" method="post" class="formulario">
    <?php include_once __DIR__ . '/formulario.php' ?>
    <input type="submit" class="boton" value="Guardar Servicio">
</form>