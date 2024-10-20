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
    <title>Oferta</title>
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
<center><h1>Ofertas</h1></center>
<br>
<div style="margin: 0 20px;">
   <p>Para la disposicion de los clientes, todo el tiempo contamos con ofertas en algunos paquetes de viajes, siempre
   tratamos de cada fin de mes tener nuevas ofertas, asi para que nuestros clientes aprovechen para poder tomarse
   esas vacaciones que tanto anhelan. Y siempre tratamos de hacer unos buenos paquetes para que puedas disfrutarlo con
   la persona mas especial para ti, ya que tenemos paquetes hasta del 2x1, con unos precios bien accesibles.
   Aqui abajo encontraras algunas de las ofertas de este mes, espero que les guste y vengan a visitarnos muy pronto.
   Estamos a sus disposicion.</P>
</div>
<br>
<div class="image-container">
  <div class="card custom-card">
    <img src="/proyecto_final/Vista/img/canon-del-sumidero_oferta.jpg" class="card-img-top" alt="">
    <h5>Cañon del sumidero</h5>
    <p>Paseo en lancha, con un guia de tour experto, desayuno incluido, y transporte.</p>
    <p>¡¡Con una promocion del 2X1!!  <b>Desde $1,000.00</b></p>
  </div>

  <div class="card custom-card">
    <img src="/proyecto_final/Vista/img/parque-de-la-marimba_oferta.jpg" class="card-img-top cropped-image" alt="">
    <h5>Parque de la marimba</h5>
    <p>Los llevaremos a disfrutar de un grandioso tour a uno de los parques mas visitados en la Capital de Chiapas.
      Con una estancia de un dia en un hotel, un desayuno y transporte para dezplazarse.
    </p>
    <p>¡¡Lo mas increible, viaje en familia, para 5 personas!!  <b>Desde $3,500.00</b></p>
  </div>
</div>
<br>
<div class="image-container">
  <div class="card custom-card">
    <img src="/proyecto_final/Vista/img/chamula_oferta.jpg" class="card-img-top" alt="">
    <h5>San Juan Chamula</h5>
    <p>A disfrutar otra de los lugares mas grandiosos de Chiapas, los llevaremos de tour a su grandioso iglesia
      para precenciar la bonita tradicion y costumbre. Tiene incluido transporte, un hospedaje en un hotel y un especialista
      como guia de tour. Ven y disfruta en pareja esta aventura.
    </p>
    <p>¡¡Con una promocion del 2X1!!  <b>Desde $3,000.00</b></p>
  </div>

  <div class="card custom-card">
    <img src="/proyecto_final/Vista/img/san cristobal_oferta.jpg" class="card-img-top cropped-image" alt="">
    <h5>San cristobal de las Casas</h5>
    <p>Ven y disfruta de una noche increible en pareja, llevandolos a conocer los lugares mas bonitos para parejas.
      Con transporte incluido, un desayuno en pareja y un hospedaje en hotel.
    </p>
    <p>¡¡Con una promocion del 2x1!!  <b>Desde $2,800.00</b></p>
  </div>
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