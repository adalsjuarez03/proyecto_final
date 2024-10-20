// Esperar a que el DOM esté completamente cargado
document.addEventListener("DOMContentLoaded", function() {

    // Primer botón: redirigir a página 1
    const reservaBtn1 = document.getElementById('reservaBtn1');
    reservaBtn1.addEventListener('click', function() {
      window.location.href = '/proyecto_final/Vista/layout/mi_reserva.php';  // Cambia esta URL por la página correspondiente
    });
  
    // Segundo botón: redirigir a página 2
    const reservaBtn2 = document.getElementById('reservaBtn2');
    reservaBtn2.addEventListener('click', function() {
      window.location.href = '/proyecto_final/Vista/layout/mi_reserva.php';  // Cambia esta URL por la página correspondiente
    });
  
    // Tercer botón: redirigir a página 3
    const reservaBtn3 = document.getElementById('reservaBtn3');
    reservaBtn3.addEventListener('click', function() {
      window.location.href = '/proyecto_final/Vista/layout/mi_reserva.php';  // Cambia esta URL por la página correspondiente
    });

    // Botón estático: redirigir a página de contacto
    const botonEstatico = document.getElementById('botonEstático');
    botonEstatico.addEventListener('click', function() {
      window.location.href = '#';  // Cambia esta URL por la página a la que quieras redirigir
    });
});
