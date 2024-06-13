<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo RUTA_URL?>img/logo-reducido.webp">
    <title>Pawbnb - Login</title>
    <link rel="stylesheet" href="<?php echo RUTA_URL?>css/style_login.css">
    <!--Boostrap Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php require_once RUTA_APP.'/vistas/inc/header_no_logueado.php'?>

    <div class="container-xl mt-5 vh-100">

        <div class="row d-flex justify-content-center align-item-center shadow-lg rounded">

            <div id="register" class="col-xl-5 col-sm-12 d-none d-xl-block">
                <img src="<?php echo RUTA_URL?>img/Login/img.png" alt="Foto Mascota" class="w-100">
            </div>


            <div id="login" class="col-xl-5 col-sm-12 p-4 "> 
            <img src="<?php echo RUTA_URL?>img/Login/login.png" alt="Foto Mascota" class="w-100">
                        <form action="" class="d-flex flex-column">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="correo-login" placeholder=" ">
                                    <label for="correo-login">Correo electrónico</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="pass-login" placeholder=" ">
                                    <label for="pass-login">Contraseña</label>
                                </div>
                            <button id="inciosesionbutton" type="submit" class="btn">Iniciar Sesión</button>

                        </form>
                        <div class="row">
                            <a href="/registro" ><button id="registrobutton" style="width: 100%;" class="btn mt-2">¿No tienes Cuenta?</button></a>  
                        </div>
            </div>  
            
            
        </div>
    </div>

<?php require_once RUTA_APP.'/vistas/inc/footer.php'?>
