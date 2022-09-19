<?php
include("connect.php");
$catalogo = "SELECT * FROM catalogo WHERE talle = '6'";
$resultado = mysqli_query($conex, $catalogo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link href="hamburgers.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="COGOLLO NOT MYU.png">
    <title>MYU Indumentaria</title>
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
                    <a href="#">Catalogo</a>
                  </li>
                  <li class="nav-item">
                    <a href="#contact">Contacto</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Acceder 
                    </a>
                    <ul class="dropdown-menu" id="drop1" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" id="drop" href="Loginn.php">Iniciar Sesion</a></li>
                      <li><a class="dropdown-item" id="drop" href="Registro.php">Registrarte</a></li>
                    </ul>
                  </li>
                  <li><i class='bx bx-cart-add bx-border' style='font-size: 1.5em; color: #a13431;'></i></li>
                </ul>
              </div>
            </div>
          </nav>
    </div>

    <header class="header">
    <a class="btn btn-dark" href="agregarCard.php" role="button">COGOLLO GOMA</a>
    <section class="text-center p__articulo">
        <div class="row py-3 justify-content-around">
   
          <div class="card m-1 col-md-5 col-lg-3" id="div">
            <img src="imagenesropa/imagen5.jpeg" class="card-img-top d-block w-100" alt="...">
            <div class="card-body">
              <h3 class="card-title">Campera Juan XXIII</h3>
              <div class="precio"> 
								<div class="box-precio">
									<span class="precio2">$2500</span>
								</div>
							</div>
                <a href="articulo1.php" class="btn" id="btn-cat">
                    <img src="settings.svg" alt="" class="ajuste">
                </a>
                <a href="#" class="btn" id="btn-cat">
                    <img src="tacho.svg" alt="" class="ajuste" onClick = "removeCard()">
                </a>
            </div>
          </div>
    
          
      <?php      
    while($row = $resultado-> fetch_array()){
      $producto =$row['producto'];
      $precio=$row['precio'];
      ?>

      <div class="card m-1 col-md-5 col-lg-3">
      <img src="imagenesropa/imagen5.jpeg" class="card-img-top d-block w-100" alt="...">
      <div class="card-body">
        <h3 class="card-title"><?php echo $producto; ?></h3>
        <div class="precio"> 
          <div class="box-precio">
            <span class="precio2"> <?php echo $precio; ?></span>
          </div>
        </div>
          <a href="articulo1.php" class="btn" id="btn-cat">
              <img src="settings.svg" alt="" class="ajuste">
          </a>
          <a href="#" class="btn" id="btn-cat">
              <img src="tacho.svg" alt="" class="ajuste">
          </a>
      </div>
    </div>
    <?php
    } 
    ?>
  