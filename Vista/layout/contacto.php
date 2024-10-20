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
    <title>Contacto</title>
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

<img src="/proyecto_final/Vista/img/mapa.jpeg" class="img-fluid" alt="...">
<br>
<center><h1>Contactanos</h1></center>
<br>

<div class="container page-specific"> 
  <div class="row">
    <!-- Primera columna (izquierda) -->
    <div class="col-md-5 offset-md-1">
      <div class="d-flex align-items-center mb-3">
        <div class="me-3">
          <img src="/proyecto_final/Vista/img/llamada.jpg" alt="Teléfono" class="small-icon">
        </div>
        <p>+2 456 348 2934</p>
      </div>
      <div class="d-flex align-items-center mb-3">
        <div class="me-3">
          <img src="/proyecto_final/Vista/img/correo.png" alt="Correo" class="small-icon">
        </div>
        <p><a href="#">turismo@easytour.com</a></p>
      </div>
      <div class="d-flex align-items-center mb-3">
        <div class="me-3">
          <img src="/proyecto_final/Vista/img/ubicacion.png" alt="Ubicación" class="small-icon">
        </div>
        <p>Av. centro. Tuxtla Gutierrez Chiapas. México</p>
      </div>
      <div class="d-flex align-items-center mb-3">
        <div class="me-3">
          <img src="/proyecto_final/Vista/img/sitio.png" alt="Sitio web" class="small-icon">
        </div>
        <p><a href="#">www.easytour.com</a></p>
      </div>
    </div>

    <!-- Segunda columna (derecha) -->
    <div class="col-md-6">
      <div class="d-flex align-items-center mb-3">
        <div class="me-3">
          <img src="/proyecto_final/Vista/img/logo face.png" alt="Teléfono" class="small-icon">
        </div>
        <p>Yo soy EasyTour</p>
      </div>
      <div class="d-flex align-items-center mb-3">
        <div class="me-3">
          <img src="/proyecto_final/Vista/img/logo de twitter.png" alt="Correo" class="small-icon">
        </div>
        <p><a href="#">@soyEasyTour</a></p>
      </div>
      <div class="d-flex align-items-center mb-3">
        <div class="me-3">
          <img src="/proyecto_final/Vista/img/logo de instagram.jpeg" alt="Ubicación" class="small-icon">
        </div>
        <p>EasyTour Oficial</p>
      </div>
      <div class="d-flex align-items-center mb-3">
        <div class="me-3">
          <img src="/proyecto_final/Vista/img/logo whattsapp.jpeg" alt="Ubicación" class="small-icon">
        </div>
        <p>+52 961 348 2934</p>
      </div>
    </div>
  </div>
</div>

<br>
<br>
<div style="margin: 0 20px;">
  <center><h1>¿Quiénes somos?</h1></center>
  <p>
    Somos una empresa dedicada 100% hacia los turistas de Chiapas, llevándoles a otro nivel para conocer más de nuestro querido Estado
    y de todo lo que nos podemos encontrar. Somos nuevos en esta empresa, pero tenemos mucho que mostrarles, les aseguramos que no se arrepentirán.
    Como lo puedes notar, nosotros tenemos un buen enfoque de cómo dividimos el turismo. Tenemos varios paquetes, y cada paquete cuenta con distintos
    servicios, y eso sí, cada servicio está muy bien estructurado, ya que contamos con personas experimentadas en cada servicio, así que 
    no tendrás por qué preocuparte. ¡Conócenos y no te arrepentirás!
  </p>
  <br>
  <h6>Las mejores vacaciones en Chiapas, solo las encuentras con nosotros, EasyTour. No te arrepentirás, ¡ven y conócenos!</h6>
  <br>
  <center><h4>¡¡Te esperamos!!</h4></center>
</div>

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