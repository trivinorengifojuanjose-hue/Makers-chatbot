<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="iniciodesesion2.css">
    <a href="index.php" id="atras-btn">Atras</a>   
</head>
<body>

<div class="formulario">
<h1>Inicio sesion</h1>
<form action="verusuarios.php" method="post">
<div class="username">
<input type="text" name="nombredeusuario" id="nombreusuario" require placeholder="">
<label>Nombre de usuario</label>

</div>
<div class="username">
<input type="password" name="clave" id="contraseña"require placeholder="">
<label>Contraseña</label>

</div>

<input type="submit" value="Iniciar">
<div class="registrarse">
<a href="crear_cuenta_Usuario.php">Registro de usuario</a>



</div>


</form>

</div>


</body>
</html>