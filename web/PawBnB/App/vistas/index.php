<!--Imagenes sacadas de FreePick-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo RUTA_URL?>img/logo-reducido.webp">
    <title>Pawbnb</title>
    <link rel="stylesheet" href="<?php echo RUTA_URL?>css/style.css">
    <!--Boostrap Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Boostrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Sweet alert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">

</head>
<body>

<!--Quitar fase desarrollo --> 

 <!-- Modal de Bootstrap -->
 <div id="developmentModal" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="developmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="developmentModalLabel">Alerta de Desarrollo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          La web está en desarrollo.
        </div>
      </div>
    </div>
  </div>
<!--Quitar fase desarrollo --> 

    <?php require_once RUTA_APP.'/vistas/inc/header_no_logueado.php'?>
    <div id="content-start" class="container-fluid">
        <div id="fila-1" class="row">
            <div class="col-lg-7 col-sm-12 d-flex flex-column justify-content-center" id="fila-1-izq"> 
                <img src="<?php echo RUTA_URL?>img/logo.webp" alt="Logo Pawbnb" class="img-fluid d-block mx-auto" id="logo">
                <h2 class="text-center fs-2 mt-2">Mascotas felices, viajes tranquilos.</h2>
                <a href="<?php echo RUTA_URL?>Login" class="text-reset text-decoration-none"> <button class="btn btn-primary mt-4 btn-lg w-lg-25 w-sm-30 d-block mx-auto"> Comenzar ahora!</button></a>
            </div>
            <div class="col-lg-4 col-sm-12" id="fila-1-der">
                <img src="<?php echo RUTA_URL?>img/Perro.png" alt="Perro" class="img-fluid float-center" id="imagen_perro">
            </div>
        </div>
    </div>
    <div id="content" class="container-xl">
        <div id="fila-2" class="row d-flex flex-row justify-content-center">            
            <div class="cardincio  col-lg-2 col-sm-1 mx-2 text-center">
                <i class="iconinicio bi bi-person-workspace"></i>
            <p class="fw-semibold">Busca un cuidador de confianza.</p>
            </div>

            <div class="cardincio  col-lg-2  col-sm-2 mx-2 text-center">
                <i class="iconinicio bi bi-chat-dots"></i>
                <p class="fw-semibold">Comunícate y acuerda un precio.</p>
            </div>

            <div class="cardincio  col-lg-2  col-sm-2 mx-2 text-center">
                <i class="iconinicio bi bi-person-walking"></i>
                <p class="fw-semibold">Coordina la entrega de tu mascota.</p>
            </div>

            <div id="card-largo" class="cardincio  col-lg-2  col-sm-2 mx-2 text-center">
                <i class="iconinicio bi bi-chat-heart"></i>
                <p class="fw-semibold">Mantén contacto para asegurarte de su cuidado.</p>
            </div>
        </div>  
    </div>
    <div>
        <p></p>
    </div>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
     document.addEventListener('DOMContentLoaded', function() {
      Swal.fire({
        title: '¡Sitio en Desarrollo!',
        text: 'Estamos trabajando en mejoras en el sitio. Disculpa las molestias.',
        icon: 'info',
        confirmButtonText: 'Entendido'
      });
    });
    </script>
    <?php require_once RUTA_APP.'/vistas/inc/footer.php'?>

