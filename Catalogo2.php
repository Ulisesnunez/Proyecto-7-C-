<?php
include("connect.php");
    session_start();
    $num="SELECT nro_producto FROM catalogo WHERE nro_producto is not null ORDER BY nro_producto DESC";
    $ero = mysqli_query($conex,$num);
    $fila2 = $ero -> fetch_array();
    $a = 1;
    $i = 0;
    for($x = 1 ; $x <= $fila2[0] ; $x++)
    {
        $ta="SELECT * FROM catalogo WHERE nro_producto = $x";
        $lle=$conex -> query($ta);
        $b = $lle -> fetch_array();
        if(empty($b[1]) == false)
        {
          if($b[1] !== $a)
          {
              $fila3[$i] = $b;
              $a = $b[1];
              $i ++;
          }
        }
    }
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
    <link rel="shortcut icon" href="myu.png">   
    <title>MYU Indumentaria</title>
		<link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">		
</head>

<body style="background-color:#fff4e6;">
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

</header>
  
    <div class="modal fade" id="modal_cart" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
   

			</div>
			


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a type="button" class="btn btn-primary" href="borrarcarro.php">Vaciar carrito</a>
      </div>
    </div>
  </div>
</div>
    
    <section class="container">
        <div class="products">
        
            <!-- empieza card -->

            <?php
            $b=0;
            for($y = 0; $y < $i; $y++)
            {
                $nro_producto = $fila3[$y]['nro_producto'];
                $nombre = $fila3[$y]['producto'];
                $colegio = $fila3[$y]['colegio'];
                $stock = $fila3[$y]['stock'];
                $precio = $fila3[$y]['precio'];
                $imagen = $fila3[$y]['imagen']; 
            ?>
                <div class="carts">
                    <div>
                     
                        <img src="data:image/jpg;base64, <?php echo base64_encode($imagen)?>" alt="">
                        <form id="formulario" name="formulario" method="post" action="Carrito.php">
                        <span><p><?php echo $precio?></p></span>
                </div>
                <p class="title mb-1"><?php echo $nombre?></p>
                <input name="titulo" type="hidden" id="titulo" value="<?php echo $nombre?>">
                <p class="title mb-1">Escuela:<?php echo $colegio; ?></p>
                  <?php
                  $hola = "SELECT nro_producto FROM catalogo WHERE producto = '$nombre'";
                  $chau= $conex -> query($hola);
                  $h = 0;
                  $c2 = $chau -> fetch_array();
                  ?>
                  <select class="form-select form-select-sm mb-4" aria-label=".form-select-sm example" id="talle">
                  <option selected>Talles</option>
                  <?php
                  for($z = 1; $z <= $c2[0]; $z++)
                  {
                    $hola2 = "SELECT talle FROM catalogo WHERE producto = '$nombre' and talle > '$h' order by talle asc";
                    $chau2 = $conex -> query($hola2);
                    $c = $chau2 -> fetch_array();
                    if( $c['talle']!= "")
                    {
                  ?>
                  
                      <option value="<?php echo $z ?>"><?php echo $c[0] ?></option>
                    <?php
                    $h = $c[0] ;
                  }
                }
                  ?>
                  
                </select>
                <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                </form>
            </div>
        <?php
              
        }
        
        ?>                                
        <!-- termina  card -->
      </div>
      

        <footer id="contact">
        <h2 class="titles">Contacto</h2>
        <div class="socialmedia">
            <a href="https://web.whatsapp.com/"><i class='socialmedia__icon bx bxl-whatsapp bx-tada' ></i></a>
            <a href=  "https://www.instagram.com/"><i class='socialmedia__icon bx bxl-instagram bx-tada' ></i></a>
            <a href="https://es-la.facebook.com/"><i class='socialmedia__icon bx bxl-facebook-circle bx-tada' ></i></a>
        </div>
    </footer>
</body>
</html>