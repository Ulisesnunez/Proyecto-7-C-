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
    <link rel="stylesheet" href="estiloCarrito.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="COGOLLO NOT MYU.png">   
    <title>MYU Indumentaria</title>
		<link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">		
</head>

<body style="background-color:#fff4e6;"></body>
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
            </ul>
          </div>
        </div>
      </nav>
</div>    

<header>
        <div class="header-section container">
            <div>
                <img onmouseover="showCart(this)" class="cart" src="cart.png" alt="">
                <p class="count-product">0</p>
            </div>
            <div class="cart-products" id="products-id">
                <p class="close-btn" onclick="closeBtn()">X</p>
                <h3>Mi carrito</h3>
                <div class="card-items"></div>
                <h2>Total: $<strong class="price-total">0</strong> </h2>
                <a class="btn btn-dark" href="https://www.mercadopago.com.ar/" role="button">Pague Aquí</a>
            </div>
        </div>
    </header>
    <section class="container">
        <div class="products">
            <!-- empieza card -->

            <?php
            while($row = $resultado -> fetch_array()){
                $nro_producto = $row['nro_producto'];
                $nombre = $row['producto'];
                $colegio = $row['colegio'];
                $stock = $row['stock'];
                $precio = $row['precio'];
            ?>
                <div class="carts">
                    <div>
                        <img src="imagenesropa/imagen1.jpeg" alt="">
                        <p><span><?php echo $precio; ?></span>$</p>
                </div>
                <p class="title mb-1"><?php echo $nombre; ?></p>
                <p class="title mb-1"><?php echo $colegio; ?></p>
                <select class="form-select form-select-sm mb-4" aria-label=".form-select-sm example" id="talle">
                    <option selected>Talles</option>
                    <option value="1">6</option>
                    <option value="2">8</option>
                    <option value="3">10</option>
                    <option value="4">12</option>
                    <option value="5">14</option>
                    <option value="6">16</option>
                    <option value="7">S</option>
                    <option value="8">M</option>
                    <option value="9">L</option>
                    <option value="10">XL</option>
                    <option value="11">XXL</option>
                    <option value="12">XXXL</option>
                </select>
                <a href="" data-id="1"  class="btn-add-cart mt-4">Agregar al carrito</a>
            </div>
        <?php
        }        
        ?>
                                                 
        <!-- termina  card -->


        <footer id="contact">
        <h2 class="titles">Contacto</h2>
        <div class="socialmedia">
            <a href="https://web.whatsapp.com/"><i class='socialmedia__icon bx bxl-whatsapp bx-tada' ></i></a>
            <a href=  "https://www.instagram.com/"><i class='socialmedia__icon bx bxl-instagram bx-tada' ></i></a>
            <a href="https://es-la.facebook.com/"><i class='socialmedia__icon bx bxl-facebook-circle bx-tada' ></i></a>
        </div>
    </footer>

    <script>
        function showCart(x){
            document.getElementById("products-id").style.display = "block";
        }
        function closeBtn(){
             document.getElementById("products-id").style.display = "none";
        }

    </script>
    <script src="./custom.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="jquery.min.js"></script>
    <script src="owl.carousel.min.js"></script>
    <script src="main1.js"></script>
</body>
</html>