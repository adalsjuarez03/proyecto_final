<?php
$base_url = "/proyecto_final/";
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsAp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/proyecto_final/Vista/css/style.css">
</head>
<body class="fondo-especial">
<header>
  <nav class="d-flex justify-content-between align-items-center p-2">
    <!-- Contenedor de imagen y texto -->
    <div class="d-flex align-items-center">
      <img src="/proyecto_final/Vista/img/logo.jpg" alt="Logo" style="width: 50px; height: auto;"> <!-- Imagen pequeña -->
      <span class="ms-2" style="font-size: 14px;">EasyTour</span> <!-- Texto pequeño al lado de la imagen -->
    </div>
    
    <!-- Menú de navegación -->
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/proyecto_final/Vista/index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/proyecto_final/Vista/layout/mi_reserva.php">Mi Reserva</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/proyecto_final/Vista/layout/paquete.php">Paquetes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/proyecto_final/Vista/layout/ofertas.php">Ofertas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/proyecto_final/Vista/layout/contacto.php">Contacto</a>
      </li>
    </ul>
  </nav>
</header>
<br>
<br>
<br>
<center><h1>Mi Reserva</h1></center>
<br>

<img src="/proyecto_final/Vista/img/cerradura.jpg" class="rounded mx-auto d-block" alt="..." style="width: 300px; display: block; margin: 0 auto;">
<br>

<div style="width: 300px; margin: 0 auto;">
  <form>
    <div class="mb-4">
      <label for="exampleInputEmail1" class="form-label">Correo electronico o usuario</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">Nosotros no compartimos tus datos</div>
    </div>
    <div class="mb-4">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-4 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Recordar siempre</label>
    </div>
    <button type="submit" class="btn btn-primary" style="background-color: #4CAF50; border-color: #4CAF50; color: white;">
      Confirmar
    </button>
  </form>
</div>

<style>
  button:hover {
    background-color: red; /* Color cuando el cursor pasa por encima */
  }
</style>
<br>

<footer class="bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-start">
        <h5>Nosotros</h5>
        <p>Somos una empresa de turismo,para el estado de Chiapas, dandoles a conocer las culturas y traciciones, aparte de nuestras bellos
          lugares, como son las floras y faunas, las cascadas y algunos templos antiguos, ven y conocenos.  
        </p>
      </div>
      <div class="col-md-4 text-center">
        <h5>Recomendaciones</h5>
        <p>Palenque</p>
        <p>San Cristobal de las Casas</p>
        <p>Chiapa de Corzo</p>
        <p>Cañon del Sumidero</p>
        <p>Cascadas Agua Azul</p>
      </div>
      <div class="col-md-4 text-end">
        <h5>Contacto</h5>
        <p>turismo@Easytour.com</p>
        <p>+52 961 348 2934</p>
        <p>www.easytour.com</p>
        <p>Av.Central Num.234, 29000  Tuxtla Gutierrez, Chiapas</p>
      </div>
    </div>
  </div>
<br>
<br>
<center><h5>Copyright @2024 | Desarrollado por EasyTour<h5></center>
</footer>
</body>
</html>