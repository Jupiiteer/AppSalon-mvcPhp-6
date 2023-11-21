<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form action="/" method="POST" class="formulario">
    <div class="campo">
        <label for="email"><span class="material-symbols-outlined">
                alternate_email
            </span></label>
        <input type="email" name="email" id="email" placeholder="Correo Electrónico" value="<?php echo s($auth->email); ?>">
    </div>
    <div class="campo">
        <label for="password"><span class="material-symbols-outlined">
                pin
            </span></label>
        <input type="password" name="password" id="password" placeholder="Contraseña" value="<?php echo s($auth->password); ?>">
    </div>
    <input type="submit" value="Iniciar Sesión" class="boton">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿No tienes una cuenta?</a>
    <a href="/olvide">¿Olvidaste tu contraseña?</a>
</div>