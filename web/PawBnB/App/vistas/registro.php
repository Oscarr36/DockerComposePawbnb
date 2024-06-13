<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo RUTA_URL?>img/logo-reducido.webp">
    <title>Registro</title>
    <!-- Alerts --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
<?php require_once RUTA_APP.'/vistas/inc/header_no_logueado.php'?>
    <div class="container">
        
<div class="container-xl mt-5 vh-100">
    <div class="row d-flex justify-content-center align-item-center shadow-lg rounded p-5">
        <form method="POST">
            <div class="row">
                <div class="mb-3 col-lg-4 ">
                    <label for="Nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese su nombre" required>
                </div>
                <div class="mb-3 col-lg-8">
                    <label for="Apellidos" class="form-label">Apellidos:</label>
                    <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Ingrese sus apellidos" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-lg-3">
                    <label for="fecha_nac" class="form-label">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" required>
                </div>
                <div class="mb-3 col-lg-3">
                    <label for="telef" class="form-label">Telefono:</label>
                    <input type="text" class="form-control" id="telef" name="telef" placeholder="Ingrese su numero de Telefono" required>
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="correo_electronico" class="form-label">Correo Electrónico:</label>
                    <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" placeholder="Ingrese su correo electrónico" required>
                </div>
              
            </div>
            <div class="row"> 
                <div class="mb-3 col-lg-4">
                    <label for="ccaa" class="form-label" id="labelccaa">Comunidad Autónoma:</label>
                    <select class="form-select" id="ccaa" name="ccaa" required></select>
                </div>
                <div class="mb-3  col-lg-4">
                    <label for="provincia" class="form-label" id="labelprovincia">Provincia:</label>
                    <select class="form-select" id="provincia" name="provincia" required></select>
                </div>
                <div class="mb-3  col-lg-4">
                    <label for="localidad" class="form-label"  id="labellocalidad">Localidad:</label>
                    <select class="form-select" id="localidad" name="localidad" required></select>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="contrasena" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese su contraseña" required>
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="contrasena2" class="form-label">Repetir Contraseña:</label>
                    <input type="password" class="form-control" id="contrasena2" name="contrasena2" placeholder="Repita su contraseña" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    </div>
</div>



    <script src="<?php echo RUTA_URL ?>js/CargarMunicipios.js"></script>
    <!-- Cargamos los datos al select de ccaa -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <?php require_once RUTA_APP.'/vistas/inc/footer.php'?>
</body>
</html>
