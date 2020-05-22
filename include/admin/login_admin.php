<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../res/css/login.css">
    <title>Login - Administrador</title>
</head>

<body>
    <div class="login-box">
        <img src="../res/img/avatar.png" class="avatar">
        <form action="" class="form-admin">
            <!--Title-->
            <h2 class="form-title">Inicia sesión con tu cuenta</h2>
            <!--Error-->
            <div class="error-block">
                <p class="error"></p>
            </div>
            <!--Username-->
            <div class="input-block">
                <label for="username" class="label">Usuario</label>
                <input type="text" name="username" class="input username-input">
            </div>
            <!--Password-->
            <div class="input-block">
                <label for="password" class="label">Contraseña</label>
                <input type="password" name="password" class="input password-input">
            </div>
            <!--Button-->
            <div class="input-block">
                <input type="submit" value="Iniciar sesión" class="btnAdminLogin">
            </div>
        </form>
    </div>
</body>
</html> 