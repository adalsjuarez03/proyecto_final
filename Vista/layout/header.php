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
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/proyecto_final/Vista/css/style.css">
</head>
<body>

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
