<div class="nombre-pagina">Crear Cuenta</div>
<div class="descripcion-pagina">Llena el siguiente formulario para crear una nueva cuenta</div>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form action="/crear-cuenta" class="formulario" method="POST">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo s($usuario->nombre); ?>" placeholder="Tú Nombre">
    </div>
    <div class="campo">
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" value="<?php echo s($usuario->apellido); ?>" name="apellido" placeholder="Tú Apellido">
    </div>
    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input type="tel" id="telefono" value="<?php echo s($usuario->telefono); ?>" name="telefono" placeholder="Tú Teléfono">
    </div>
    <div class="campo">
        <label for="email">E-mail</label>
        <input type="email" id="email" value="<?php echo s($usuario->email); ?>" name="email" placeholder="Tú Correo electronico">
    </div>
    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Tú Contraseña">
    </div>
    <div class="campo">
        <label for="password">Confirmar contraseña</label>
        <input type="password" id="password" name="password" placeholder="Repita la misma Contraseña">
    </div>
    <input type="submit" value="Crear Cuenta" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta?</a>
    <a href="/olvide">¿Olvidaste tu contraseña?</a>
</div>