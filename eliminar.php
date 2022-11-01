<?php

    include("connect.php");
    $num="SELECT nro_producto FROM catalogo ORDER BY nro_producto DESC";
    $ero = mysqli_query($conex,$num);
    $fila2 = $ero -> fetch_array();
    $a = 1;
    $i = 0;
    for($x = 1 ; $x <= $fila2[0] ; $x++)
    {
        $ta="SELECT producto FROM catalogo WHERE nro_producto = $x  ";
        $lle=$conex -> query($ta);
        $b = $lle -> fetch_array();
        if($b !== $a)
        {
            $fila3[$i] = $b;
            $a = $b;
            $i ++;
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

    <section class="row bg">
      <div class="col-lg-5">
        <img src="myu.png" alt="" class="cardCat my-3">
      </div>
      <div class="col-lg-7 m-auto">
        
        <!-- empieza -->
        <form action="eliminar.php" method="post">
        <!-- <option selected >Producto</option> -->
        <h1>Elija el producto a eliminar</h1>
        <select  name="talle" class="form-select form-select-sm mb-4" id="select" aria-label=".form-select-sm example">
        
          <?php
          for($y = 0; $y < $i; $y++)
          {
            if($fila3[$y] != ""){
              
              ?>
            <option value="<?php echo $fila3[$y][0] ?>"><?php echo $fila3[$y][0] ?></option>
            
            <?php
            }
          }
        ?>
      </select>

      
      <!-- termina -->
        <input type="submit" id="bonton" class="btn btn-outline-primary" value="Eliminar">
      </form>

      <?php
      
        if(isset($_POST['talle'])){

          //echo "holaaaa tatiii!!!!!!";

          $producto = $_POST['talle'];
          
          $consultaUpdate = "DELETE FROM catalogo WHERE producto='$producto'";
          $cambio = mysqli_query($conex,$consultaUpdate);

          if($cambio){

            echo "cambio realizado";
  
           }
           else
           {
             echo "el cambio no ha sido realizada";

            
           }

        }

      ?>
        
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
    </body>
  </html>