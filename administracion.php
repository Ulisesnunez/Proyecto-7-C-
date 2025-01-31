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
              <a class="logo__name" href="#">MYU INDUMENTARIA</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a href="Catalogo2admin.php">Catalogo</a>
                  </li>
                  <li class="nav-item">
                    <a href="#contact">Contacto</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <?php echo "Bienvenido " . $_SESSION['username'];?>
                    </a>
                    <ul class="dropdown-menu" id="drop1" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" id="drop" href="index.php">Cerrar Sesion</a></li>
                    </ul>
                  </li>
                 <!--  <li><i class='bx bx-cart-add bx-border' style='font-size: 1.5em; color: #a13431;'></i></li> -->
                </ul>
              </div>
            </div>
          </nav>
    </div>

    <section class="contenido sau"> 

        <h2 class="title">MYU</h2>
        
        <div class="box-container">
            <div class="boxAdmin">
                <h3>Agregar un producto</h3>
                <a href="agregarCard.php" class="btn" id="btn-cat">
                    <img src="agregar.svg" alt="" class="ajuste">
                </a>
            </div>
            <div class="boxAdmin">
                <h3>Modificar un producto</h3>
                <a href="articulo1.php" class="btn" id="btn-cat">
                    <img src="settings.svg" alt="" class="ajuste">
                </a>
            </div>
            <div class="boxAdmin">
                <h3>Eliminar un producto</h3>
                <a href="eliminar.php" class="btn" id="btn-cat">
                    <img src="tacho.svg" alt="" class="ajuste" onClick = "removeCard()">
                </a>
            </div>
        </div>
        <div class="boxAdmin">
                <h3>Informe de pedidos</h3>
                <a href="Informesdeventa.php" class="btn" id="btn-cat">
                    <img src="graph-up.svg" alt="" class="ajuste">
                </a>
            </div>


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