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
    <title>Paquete</title>
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
<center><h1>Paquete de Viaje en Chiapas</h1></center>
<br>
<br>
<div class="new-image-container">
  <!-- Primera fila -->
  <div class="card custom-card">
    <img src="/proyecto_final/Vista/img/san cristobal.jpg" class="card-img-top cropped-image" alt="...">
    <div class="card-body">
    <h5>San Cristobal de las Casas</h5>
    <p>Explora el encanto colonial de una de las ciudades mas magicas de Mexico. Las culturas y tradiciones que realizan
      esta a otro nivel, mas conocido como el pueblo magico. </p>
    <p><b>Incluye:</b> Hotel, transporte y tours guiados por la ciudad</p>
    <p>3 días/2 noches, <b>Desde: $2,500.00</b></p>
    </div>
  </div>

  <div class="card custom-card">
    <img src="/proyecto_final/Vista/img/cañon del sumidero.jpg" class="card-img-top cropped-image" alt="...">
    <div class="card-body">
    <h5>Cañon del sumidero</h5>
    <p>Navega por las impresionantes aguas del Cañon del Sumidero y admira majestuosamente toda lo bello que es la
      naturaleza. Esas montañas y el aire fresco que genera, te hara amar y disfrutar de cada momento.
    </p>
    <p><b>Incluye:</b> Hotel, transporte y guia Especializado</p>
    <p><b>Precio Desde: $500.00</b></p>
    </div>
  </div>

  <div class="card custom-card">
    <img src="/proyecto_final/Vista/img/palenque_paquete.jpg" class="card-img-top cropped-image" alt="...">
    <div class="card-body">
    <h5>Palenque</h5>
    <p>Descubre la grandeza de la civilizacion maya en las ruinas de Palenque y disfruta de la naturaleza circundante.</p>
    <p><b>Incluye:</b> Alojamiento, transporte, excursionismo a las ruinas y guias certificados</p>
    <p><b>Precio Desde: $3,500.00</b></p>
    </div>
  </div>
</div>
<br>
<!--segunda fila -->
<div class="new-image-container">
  <div class="card custom-card">
    <img src="/proyecto_final/Vista/img/chiapa de corzo_paquete.jpg" class="card-img-top cropped-image" alt="...">
    <div class="card-body">
    <h5>Chiapa de Corzo</h5>
    <p>Conoce el historico pueblo de Chiapa de Corzo y su famosa fuente colonial.
    Es famoso por su vibrante Fiesta Grande en enero, que incluye la tradicional "Danza de los Parachicos"
    </p>
    <p><b>Incluye:</b> Hotel, transporte y tour guiado</p>
    <p><b>Precio Desde: $2,100.00</b></p>
    </div>
  </div>

  <div class="card custom-card">
    <img src="/proyecto_final/Vista/img/selva lacandona_paquete.jpg" class="card-img-top cropped-image" alt="...">
    <div class="card-body">
    <h5>Selva Lacandona</h5>
    <p>Sumergete en la naturaleza virgen de la Selva Lacandona y descubre su rica biodiversidad.
    Esta vasta y exuberante selva tropical es hogar de numerosas especies de flora y fauna, muchas de ellas en peligro de extinción, como el jaguar, el tapir y varias especies de monos.
    </p>
    <p><b>Incluye:</b> Alojamiento en Cabañas, transporte y guias expertos en la zona</p>
    <p><b>Precio Desde: $3,200.00</b></p>
    </div>
  </div>

  <div class="card custom-card">
    <img src="/proyecto_final/Vista/img/tuxtla_paquete.jpg" class="card-img-top cropped-image" alt="...">
    <div class="card-body">
    <h5>Tuxtla Gutierrez</h5>
    <p>Entre sus principales atracciones destacan el Parque de la Marimba, el Jardín Botánico y su proximidad al Cañón del Sumidero. Además, es un centro clave para el turismo y la gastronomía
       regional, ofreciendo una puerta de entrada a las maravillas de Chiapas.</p>
    <p><b>Incluye:</b> Hospedaje en hotel, tour guiado, transporte y desayuno incluido</p>
    <p><b>Precio Desde: $4,000.00</b></p>
    </div>
  </div>
</div>
<br>
<!--tercera fila -->
<div class="new-image-container">
  <div class="card custom-card">
    <img src="/proyecto_final/Vista/img/agua-azul_paquete.jpg" class="card-img-top cropped-image" alt="...">
    <div class="card-body">
    <h5>Cascadas de Agua Azul</h5>
    <p>Conjunto de cascadas de aguas turquesas que forman piscinas naturales, ideales para nadar y disfrutar del paisaje.
    </p>
    <p><b>Incluye:</b> Hospedaje en cabañas, transporte, tour guiado, excursionismo y tour guiado por especialistas</p>
    <p><b>Precio Desde: $3,200.00</b></p>
    </div>
  </div>

  <div class="card custom-card">
    <img src="/proyecto_final/Vista/img/laguna_paquete.jpg" class="card-img-top cropped-image" alt="...">
    <div class="card-body">
    <h5>Laguna de Montebello</h5>
    <p>Parque nacional con más de 50 lagunas de diferentes tonalidades de azul y verde, perfectas para el ecoturismo.
    </p>
    <p><b>Incluye:</b> Hotel, transporte, guias expertos en la zona, excursionismo, desayuno incluido</p>
    <p><b>Precio Desde: $5,100.00</b></p>
    </div>
  </div>

  <div class="card custom-card">
    <img src="/proyecto_final/Vista/img/Cascadas El Chiflón_paquete.jpeg" class="card-img-top cropped-image" alt="...">
    <div class="card-body">
    <h5>Cascadas en Chiflon</h5>
    <p>Majestuosa cascada que ofrece senderismo, tirolesa y vistas espectaculares del río.</p>
    <p><b>Incluye:</b> Hospedaje en cabañas, tour guiado por especialistas, excursionismo, transporte y desayuno incluido</p>
    <p><b>Precio Desde: $3,800.00</b></p>
    </div>
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