<?php
include("connect.php");
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
    <link href="hamburgers.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="myu.png">
    <title>MYU Indumentaria</title>

</head>
<body>
    <div class="head sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-nav">
            <div class="container-fluid">
              <a class="logo__name" href="administracion.php">MYU INDUMENTARIA</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a href="catalogo2admin.php">Catalogo</a>
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
                  <!-- <li><i class='bx bx-cart-add bx-border' style='font-size: 1.5em; color: #a13431;'></i></li> -->
                </ul>
              </div>
            </div>
          </nav>
    </div>

    <form action="#" method="post" enctype="multipart/form-data">
    <section class="row bg">
    <div class="col-lg-5">
        <div class="cont">
        <a href="administracion.php"><button id="atras" class="btn btn-outline-primary">Volver</button></a>
        </div>
        <img src="myu.png" alt="" class="cardCat mt-1 mb-3">
      </div>
        
      
      <div class="col-lg-7 m-auto">
        <h1 class="titu mt-4">Ingresar nombre del articulo:</h1>
        <div class="cambiar">
          <div class="form-floating newtitle m-auto">
            <input type = "text" class="form-control" id="floatingInput" name="producto" placeholder="Nombre del producto" requiere>
            <label for="floatingInput">Nombre del producto</label>
          </div>
        </div>


        <h1 class="mt-3 titu">Ingresar el precio:</h1>
        <div class="cambiar">
          <div class="form-floating newtitle m-auto">
            <input type="text" class="form-control" id="floatingInput" name="precio" placeholder="Precio del producto" requiere>
            <label for="floatingInput">Precio del producto</label>
      
          </div>
        </div>

        <h1 class="mt-3 titu">Ingresar el stock:</h1>
        <div class="cambiar">
          <div class="form-floating newtitle m-auto">
            <input type="text" class="form-control" id="floatingInput" name="stock" placeholder="Stock disponible" require>
            <label for="floatingInput">Stock disponible</label>
          </div>
        </div>

        <h1 class="mt-3 titu">Ingresar el colegio correspondiente:</h1>
        <div class="cambiar">
          <div class="form-floating newtitle m-auto">
            <input type="text" class="form-control" id="floatingInput" name="colegio" placeholder="Colegio" require>
            <label for="floatingInput">Colegio</label>
          </div>
        </div>

        <h2 class="mt-4">Talles</h2>
        <div class="talles row justify-content-evenly">
        <div class="col-2"> 
        <input type= "checkbox" id="cuadradito" name="06">
        <label for="flexCheckChecked" class="form-check-label talle">
          Talle 6
        </label>
        </div>
        <div class="col-2">
        <input type= "checkbox" name="08">
        <label for="flexCheckChecked" class="form-check-label talle">
          Talle 8
        </label>
        </div>
        <div class="col-2">
        <input type= "checkbox" name="10">
        <label for="flexCheckChecked" class="form-check-label talle">
          Talle 10
        </label>
        </div>
        <div class="col-2">
        <input type= "checkbox" name="12">
        <label for="flexCheckChecked" class="form-check-label talle">
          Talle 12
        </label>
        </div>
        <div class="col-2">
        <input type= "checkbox" name="14">
        <label for="flexCheckChecked" class="form-check-label talle">
          Talle 14
        </label>
        </div>
        <div class="col-2">
        <input type= "checkbox" name="16">
        <label for="flexCheckChecked" class="form-check-label talle">
          Talle 16
        </label>
        </div>
        <div class="col-2">
        <input type= "checkbox" name="s">
        <label for="flexCheckChecked" class="form-check-label talle">
          Talle S
        </label>
        </div>
        <div class="col-2">
        <input type= "checkbox" name="m">
        <label for="flexCheckChecked" class="form-check-label talle">
          Talle M
        </label>
        </div>
        <div class="col-2">
        <input type= "checkbox" name="l">
        <label for="flexCheckChecked" class="form-check-label talle">
          Talle L
        </label>
        </div>
        <div class="col-2">
        <input type= "checkbox" name="xl">
        <label for="flexCheckChecked" class="form-check-label talle">
          Talle XL
        </label>
        </div>
        <div class="col-2">
        <input type= "checkbox" name="xxl">
        <label for="flexCheckChecked" class="form-check-label talle">
          Talle XXL
        </label>
        </div>
        <div class="col-2">
        <input type= "checkbox" name="xxxl">
        <label for="flexCheckChecked" class="form-check-label talle">
          Talle XXXL
        </label>
        </div>
        <div class="col-2 mt-3">
        <div class="input-group mb-3">
          <input type="file" name= "imagen" class="form-control" id="inputGroupFile02">
        </div>
        <input type="submit" id="bonton" class="btn btn-outline-primary" name = "register">
        </div>
        </div>
       
        
    </div>
</form>
    <?php
    include("agregarCardIngreso.php");
    ?>
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
    </body>
  </html>