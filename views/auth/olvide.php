<h1 class="nombre-pagina">Olvidaste tu contraseña</h1>
<p class="descripcion-pagina">Reestablece tu contraseña escribiendo tu correo electronico acontinuación</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form class="formulario" action="/olvide" method="POST">
    <div class="campo">
        <label for="email">Correo Electronico</label>
        <input type="email" name="email" id="email" placeholder="Tú Correo Electronico">
    </div>
    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta?</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta?</a>
</div>