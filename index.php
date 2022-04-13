<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="container-login">

    <form class="" action="validar.php" method="POST">
        <label for="">Bienvenido</label>
        <input type="text" name="correo" placeholder="Correo electronico">
        <input type="password" name="contraseña" placeholder="Contraseña">
        <input type="submit" value="Ingresar">
    </form>
    <div class="password">
    <a href="#">¿Olvidaste tu contraseña?</a>
    </div>
    <div class="recuperar">
    <h4>¿No tienes cuenta? <a href="">Registrate</a></h4>
    </div>
</div>
    
</body>
</html>