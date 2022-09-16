<?php
include("config.php");
$catalogo = "SELECT * FROM catalogo";
$resultado = mysqli_query($conex, $catalogo);
while($row-> mysql_fetch_array($resultado));
    $nro_producto=$row['nro_producto'];
    $producto =$row['producto'];
    $talle =$row['talle'];
    $colegio = $row['colegio'];
    $stock=$row['stock'];
    $precio=$row['precio'];

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
    <link rel="shortcut icon" href="MYU PERFIL.PNG">   
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
      

      <section class="text-center p__articulo">
        <div class="row py-3 justify-content-around">
          <div class="card m-1 col-md-5 col-lg-3">
            <img src="imagenesropa/imagen5.jpeg" class="card-img-top d-block w-100" alt="...">
            <div class="card-body">
              <h3 class="card-title"><?php echo $producto[1] ?></h3>
              <div class="precio"> 
								<div class="box-precio">
									<span class="precio2"><?php echo $precio[1] ?></span>
								</div>
							</div>
							<select class="form-select form-select-sm" id="talle" aria-label=".form-select-sm example">
							  <option selected>Talles:</option>
							  <option value="1">Small</option>
							  <option value="2">Medium</option>
							  <option value="3">Large</option>
							  <option value="4">XL</option>
							</select>
              <a href="#" class="btn" id="btn-cat">
                <img src="carrito.png" alt="">
              </a>
            </div>
          </div>

          
          <div class="card m-1 col-md-5 col-lg-3">
            <img src="imagenesropa/imagen12.jpeg" class="card-img-top d-block w-100" alt="...">
            <div class="card-body">
              <h3 class="card-title"><?php echo $producto[5] ?></h3>
              <div class="precio"> 
								<div class="box-precio">
									<span class="precio2"><?php echo $precio[5] ?></span>
								</div>
							</div>
							<select class="form-select form-select-sm" id="talle" aria-label=".form-select-sm example">
							  <option selected>Talles:</option>
							  <option value="1">Small</option>
							  <option value="2">Medium</option>
							  <option value="3">Large</option>
							  <option value="4">XL</option>
							</select>
              <a href="#" class="btn" id="btn-cat">
                <img src="carrito.png" alt="">
              </a>
            </div>
          </div>

          <div class="card m-1 col-md-5 col-lg-3">
            <img src="imagenesropa/imagen11.jpeg" class="card-img-top d-block w-100" alt="...">
            <div class="card-body">
              <h3 class="card-title"><?php echo $producto[9] ?></h3>
              <div class="precio"> 
								<div class="box-precio">
									<span class="precio2"><?php echo $precio[9] ?></span>
								</div>
							</div>
							<select class="form-select form-select-sm" id="talle" aria-label=".form-select-sm example">
							  <option selected>Talles:</option>
							  <option value="1">Small</option>
							  <option value="2">Medium</option>
							  <option value="3">Large</option>
							  <option value="4">XL</option>
							</select>
              <a href="#" class="btn" id="btn-cat">
                <img src="carrito.png" alt="">
              </a>
            </div>
          </div>

          <div class="card m-1 col-md-5 col-lg-3">
            <img src="imagenesropa/imagen4.jpeg" class="card-img-top d-block w-100" alt="...">
            <div class="card-body">
              <h3 class="card-title"><?php echo $producto[13] ?></h3>
              <div class="precio"> 
								<div class="box-precio">
									<span class="precio2"><?php echo $precio[13] ?></span>
								</div>
							</div>
							<select class="form-select form-select-sm" id="talle" aria-label=".form-select-sm example">
							  <option selected>Talles:</option>
							  <option value="1">Small</option>
							  <option value="2">Medium</option>
							  <option value="3">Large</option>
							  <option value="4">XL</option>
							</select>
              <a href="#" class="btn" id="btn-cat">
                <img src="carrito.png" alt="">
              </a>
            </div>
          </div>

          <div class="card m-1 col-md-5 col-lg-3">
            <img src="imagenesropa/imagen8.jpeg" class="card-img-top d-block w-100" alt="...">
            <div class="card-body">
              <h3 class="card-title">Indumentaria</h3>
              <div class="precio"> 
								<div class="box-precio">
									<span class="precio2">$2500</span>
								</div>
							</div>
							<select class="form-select form-select-sm" id="talle" aria-label=".form-select-sm example">
							  <option selected>Talles:</option>
							  <option value="1">Small</option>
							  <option value="2">Medium</option>
							  <option value="3">Large</option>
							  <option value="4">XL</option>
							</select>
              <a href="#" class="btn" id="btn-cat">
                <img src="carrito.png" alt="">
              </a>
            </div>
          </div>

          <div class="card m-1 col-md-5 col-lg-3">
            <img src="imagenesropa/imagen6.jpeg" class="card-img-top d-block w-100" alt="...">
            <div class="card-body">
              <h3 class="card-title">Indumentaria</h3>
              <div class="precio"> 
								<div class="box-precio">
									<span class="precio2">$2500</span>
								</div>
							</div>
							<select class="form-select form-select-sm" id="talle" aria-label=".form-select-sm example">
							  <option selected>Talles:</option>
							  <option value="1">Small</option>
							  <option value="2">Medium</option>
							  <option value="3">Large</option>
							  <option value="4">XL</option>
							</select>
              <a href="#" class="btn" id="btn-cat">
                <img src="carrito.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </section>
    </header>
    <div aria-label="Page navigation example" id="paginas">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </div>
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