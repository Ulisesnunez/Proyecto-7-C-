<?php
include('config.php');
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="myu.png">   
    <title>MYU Indumentaria</title>
		<link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">		

</head>
<body>
    <div class="head sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-nav">
            <div class="container-fluid">
              <a class="logo__name" href="index.php">MYU INDUMENTARIA</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a href="Catalogo2.php">Catalogo</a>
                  </li>
                  <li class="nav-item">
                  <a href="#contact">Contacto</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <?php echo "Bievenido ". $_SESSION['username'];?> 
                    </a>
                    <ul class="dropdown-menu" id="drop1" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" id="drop" href="index.php">Cerrar sesión</a></li> 
                     </li> 
                  <!-- <li><i class='bx bx-cart-add bx-border' style='font-size: 1.5em; color: #a13431;'></i></li> -->
                </ul>
              </div>
            </div>
          </nav>
    </div>

    <header class="header">
        
      <div class="owl-container">
      <div class="owl-carousel owl-theme">
        <div class="item"><img src="imagenesropa/imagen1.jpeg"></div>
        <div class="item"><img src="imagenesropa/imagen2.jpeg"></div>
        <div class="item"><img src="imagenesropa/imagen3.jpeg"></div>
        <div class="item"><img src="imagenesropa/imagen4.jpeg"></div>
        <div class="item"><img src="imagenesropa/imagen5.jpeg"></div>
        <div class="item"><img src="imagenesropa/imagen6.jpeg"></div>
        <div class="item"><img src="imagenesropa/imagen7.jpeg"></div>
        <div class="item"><img src="imagenesropa/imagen8.jpeg"></div>
        <div class="item"><img src="imagenesropa/imagen9.jpeg"></div>
        <div class="item"><img src="imagenesropa/imagen10.jpeg"></div>
        <div class="item"><img src="imagenesropa/imagen11.jpeg"></div>
        <div class="item"><img src="imagenesropa/imagen12.jpeg"></div>
    </div>
    </div>

    </header>

    <section class="contenido sau"> 

        <h2 class="title">SOBRE MYU</h2>
        <p>MYU es un pequeño local de Indumentaria escolar.</p>
        
        <div class="box-container">
            <div class="box">
                <i class='bx bx-package'></i>
                <h3>Envíos</h3>
                <p>Compras Online, te lo llevamos.
                    Conoce más de nuestra política de envíos.</p>
            </div>
            <div class="box">
                <i class='bx bx-shopping-bag' ></i>
                <h3>Medios de pago</h3>
                <p>Crédito, Debido, Efectivo, y mucho más.
                    Conoce todos los medios de pago.</p>
            </div>
            <div class="box">
                <i class='bx bx-purchase-tag' ></i>
                <h3>Industria Argentina</h3>
                <p>Todos nuestros productos son diseñados
                    y fabricados en Argentina.</p>
            </div>
        </div>

    </section>

    <section class="contenido about">

        <h2 class="title">Nosotros</h2>
        <p>MyU System está conformado por un grupo de estudiantes del JUAN 23, los cuales como finalidad tienen desarrollar un proyecto para fin de año.
        </p>

    </section>


    <section id="contact">
        <h2 class="title">Contacto</h2>
        <div class="socialmedia">
            <a href="https://web.whatsapp.com/"><i class='socialmedia__icon bx bxl-whatsapp bx-tada' ></i></a>
            <a href="https://www.instagram.com/"><i class='socialmedia__icon bx bxl-instagram bx-tada' ></i></a>
            <a href="https://es-la.facebook.com/"><i class='socialmedia__icon bx bxl-facebook-circle bx-tada' ></i></a>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="jquery.min.js"></script>
    <script src="owl.carousel.min.js"></script>
    <script src="main1.js"></script>
  </body>
</html>