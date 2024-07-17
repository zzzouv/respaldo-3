<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}

$username = $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Informacion de <?php echo htmlspecialchars($username); ?> - ValoLine</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="info-perfil.css">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
          <h1>ValoLine</h1>
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="index.html" class="active">Principio</a></li>
            <li><a href="about.html">Nosotros</a></li>
            <li class="dropdown"><a href="#"><span>Mapas</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li class="dropdown"><a href="#"><span>Seleccionar mapa</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                  <ul>
                    <li class="dropdown">
                      <a><span>Bind</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                          <li><a href="brimstone.html">Brimstone</a></li>
                          <li><a href="viper.html">Viper</a></li>
                          <li><a href="kayo.html">Kayo</a></li>
                          <li><a href="fade.html">Fade</a></li>
                          <li><a href="killjoy.html">Killjoy</a></li>
                          <li><a href="gekko.html">Gekko</a></li>
                          <li><a href="raze.html">Raze</a></li>
                          <li><a href="sova.html">Sova</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a><span>Breeze</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                        <li><a href="brimstonebreeze.html">Brimstone</a></li>
                        <li><a href="viperbreeze.html">Viper</a></li>
                        <li><a href="kayobreeze.html">Kayo</a></li>
                        <li><a href="fadebreeze.html">Fade</a></li>
                        <li><a href="killjoybreeze.html">Killjoy</a></li>
                        <li><a href="gekkobreeze.html">Gekko</a></li>
                        <li><a href="razebreeze.html">Raze</a></li>
                        <li><a href="sovabreeze.html">Sova</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a><span>Fracture</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                          <li><a href="brimstonefracture.html">Brimstone</a></li>
                          <li><a href="viperfracture.html">Viper</a></li>
                          <li><a href="kayofracture.html">Kayo</a></li>
                          <li><a href="fadefracture.html">Fade</a></li>
                          <li><a href="killjoyfracture.html">Killjoy</a></li>
                          <li><a href="gekkofracture.html">Gekko</a></li>
                          <li><a href="razefracture.html">Raze</a></li>
                          <li><a href="sovafracture.html">Sova</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a><span>Ascent</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                          <li><a href="brimstoneascent.html">Brimstone</a></li>
                          <li><a href="viperascent.html">Viper</a></li>
                          <li><a href="kayoascent.html">Kayo</a></li>
                          <li><a href="fadeascent.html">Fade</a></li>
                          <li><a href="killjoyascent.html">Killjoy</a></li>
                          <li><a href="gekkoascent.html">Gekko</a></li>
                          <li><a href="razeascent.html">Raze</a></li>
                          <li><a href="sovaascent.html">Sova</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a><span>Heaven</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                          <li><a href="brimstoneheaven.html">Brimstone</a></li>
                          <li><a href="viperheaven.html">Viper</a></li>
                          <li><a href="kayoheaven.html">Kayo</a></li>
                          <li><a href="fadeheaven.html">Fade</a></li>
                          <li><a href="killjoyheaven.html">Killjoy</a></li>
                          <li><a href="gekkoheaven.html">Gekko</a></li>
                          <li><a href="razeheaven.html">Raze</a></li>
                          <li><a href="sovaheaven.html">Sova</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a><span>Icebox</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                          <li><a href="brimstoneicebox.html">Brimstone</a></li>
                          <li><a href="vipericebox.html">Viper</a></li>
                          <li><a href="kayoicebox.html">Kayo</a></li>
                          <li><a href="fadeicebox.html">Fade</a></li>
                          <li><a href="killjoyicebox.html">Killjoy</a></li>
                          <li><a href="gekkoicebox.html">Gekko</a></li>
                          <li><a href="razeicebox.html">Raze</a></li>
                          <li><a href="sovaicebox.html">Sova</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a><span>Lottus</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                          <li><a href="brimstonelottus.html">Brimstone</a></li>
                          <li><a href="viperlottus.html">Viper</a></li>
                          <li><a href="kayolottus.html">Kayo</a></li>
                          <li><a href="fadelottus.html">Fade</a></li>
                          <li><a href="killjoylottus.html">Killjoy</a></li>
                          <li><a href="gekkolottus.html">Gekko</a></li>
                          <li><a href="razelottus.html">Raze</a></li>
                          <li><a href="sovalottus.html">Sova</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a><span>Pearl</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                          <li><a href="brimstonepearl.html">Brimstone</a></li>
                          <li><a href="viperpearl.html">Viper</a></li>
                          <li><a href="kayopearl.html">Kayo</a></li>
                          <li><a href="fadepearl.html">Fade</a></li>
                          <li><a href="killjoypearl.html">Killjoy</a></li>
                          <li><a href="gekkopearl.html">Gekko</a></li>
                          <li><a href="razepearl.html">Raze</a></li>
                          <li><a href="sovapearl.html">Sova</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a><span>Split</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                          <li><a href="brimstonesplit.html">Brimstone</a></li>
                          <li><a href="vipersplit.html">Viper</a></li>
                          <li><a href="kayosplit.html">Kayo</a></li>
                          <li><a href="fadesplit.html">Fade</a></li>
                          <li><a href="killjoysplit.html">Killjoy</a></li>
                          <li><a href="gekkosplit.html">Gekko</a></li>
                          <li><a href="razesplit.html">Raze</a></li>
                          <li><a href="sovasplit.html">Sova</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="services.html">Servicios</a></li>
            <li><a href="contact.html">Contacto</a></li>
            <li><a href="products.html">Tienda</a></li>

            <li class="dropdown" id="cuentaMenu">
              <a href="#" id="cuentaLink">Cuenta <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul class="submenu">
                <li id="loginOption"><a href="login.html">Iniciar sesión</a></li>
                <li id="registerOption"><a href="register.html">Registrarse</a></li>
                <li id="logoutOption" style="display: none;"><a href="#" onclick="cerrarSesion()">Cerrar sesión</a></li>
              </ul>
            </li>

            <li><a href="perfil.php" id="perfilLink" style="display: none;">Perfil</a></li>

          
          </ul>
        </nav><!-- .navbar -->

        <div class="header-social-links">
          <a href="https://twitter.com/Valoline631" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/valo_line_ups/" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      </div>
    </header><!-- End Header -->


<style type="text/css">


</style>
    <!--==========================
=            html            =
===========================-->
    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="imgg/perfil.webp" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <i class="far fa-image"></i>
                    </button>
                </div>
                <button type="button" class="boton-portada">
                  <i class="far fa-image"></i> Cambiar fondo
                </button>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo"><?php echo htmlspecialchars($username); ?></h3>
                <p class="texto">Biografia de <?php echo htmlspecialchars($username); ?>, por el momento queda con texto predeterminado, aun esta en proceso la 
                creacion de las biografia de nuestros usuarios, muchas gracias.</p>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li style="display: flex; align-items: center;">
                        <img src="imgg/usuario.png" alt="Usuario" style="width: 20px; height: 20px; margin-right: 5px;">
                        <i class="icono fas fa-map-signs"></i> Nombre de usuario: <?php echo htmlspecialchars($username); ?>
                    </li>
                    <li style="display: flex; align-items: center;">
                       <img src="imgg/carrito-de-compras.png" alt="Carrito de Compras" style="width: 20px; height: 20px; margin-right: 5px;">
                       <i class="icono fas fa-phone-alt"></i> Historial de Compras:
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--====  End of html  ====-->

<style>
.mensaje a {
    color: inherit;
    margin-right: .5rem;
    display: inline-block;
}
.mensaje a:hover {
    color: #309B76;
    transform: scale(1.4)
}
</style>

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const cuentaLink = document.getElementById('cuentaLink');
      const loginOption = document.getElementById('loginOption');
      const registerOption = document.getElementById('registerOption');
      const logoutOption = document.getElementById('logoutOption');
      const perfilLink = document.getElementById('perfilLink');
    
      // Función para actualizar el menú
      function actualizarMenu() {
        fetch('php/check_session.php')
          .then(response => response.json())
          .then(data => {
            if (data.loggedIn) {
             cuentaLink.innerHTML = `${data.username} <i class="bi bi-chevron-down dropdown-indicator"></i>`;
             loginOption.style.display = 'none';
             registerOption.style.display = 'none';
             logoutOption.style.display = 'block';
             perfilLink.style.display = 'inline-block'; // Muestra el enlace al perfil
           } else {
             cuentaLink.innerHTML = 'Cuenta <i class="bi bi-chevron-down dropdown-indicator"></i>';
             loginOption.style.display = 'block';
             registerOption.style.display = 'block';
             logoutOption.style.display = 'none';
             perfilLink.style.display = 'none'; // Oculta el enlace al perfil
           }
         });
     }
    
      // Función para cerrar sesión
      window.cerrarSesion = function() {
        fetch('php/logout.php')
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              actualizarMenu();
              Swal.fire({
                title: 'Sesión cerrada',
                text: 'Has cerrado sesión exitosamente',
                icon: 'success',
                timer: 2000,
                showConfirmButton: false
                }).then(() => {
                  // Redirigir al index después de que se cierre el mensaje
                  window.location.href = 'index.html';
              });
            }
          });
      }
    
      // Función para mostrar mensaje de bienvenida
      function mostrarMensajeBienvenida(username) {
        Swal.fire({
          title: `¡Bienvenido ${username} a ValoLine!`,
          icon: 'success',
          timer: 2000,
          showConfirmButton: false
        });
      }
    
      // Actualizar el menú al cargar la página
      actualizarMenu();
    });
  </script>
</body>

</html>
