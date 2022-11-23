<?php

include("connect.php");
session_start();
$num="SELECT nro_producto FROM catalogo ORDER BY nro_producto DESC";
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

    <section class="row bg">
      <div class="col-lg-5">
      <div class="cont">
        <a href="administracion.php"><button id="atras" class="btn btn-outline-primary">Volver</button></a>
        </div>
        <img src="myu.png" alt="" class="cardCat my-3">
      </div>
      <div class="col-lg-7 m-auto">
        
        <!-- empieza -->
        <form action="articulo1.php" method="post" enctype="multipart/form-data">
        <!-- <option selected >Producto</option> -->
        <select  name="talle" class="form-select form-select-sm mt-4 mb-3" id="select" aria-label=".form-select-sm example">
        
          <?php
      
      //while($row = $resultado -> fetch_array()){
        $b=0;
        for($y = 0; $y < $i; $y++)
        {
            $nombre = $fila3[$y]['producto'];
           
        

        ?>
          <option value="<?php echo $nombre ?>"><?php echo $nombre ?></option>
          
        <?php

      }

        ?>
      </select>

      
      <!-- termina -->
  
      
        <h1>Cambiar nombre:</h1>
        <div class="cambiar">
          <div class="form-floating newtitle m-auto">
            <input type="text" class="form-control" id="floatingInput" name="nombre" placeholder="Nuevo nombre">
            <label for="floatingInput">Nuevo nombre</label>
          </div>
        </div>

        <h1>Cambiar colegio:</h1>
        <div class="cambiar">
          <div class="form-floating newtitle m-auto">
            <input type="text" class="form-control" id="floatingInput" name="colegio" placeholder="Nuevo colegio">
            <label for="floatingInput">Nuevo colegio</label>
          </div>
        </div>


        <h1 class="mt-3">Cambiar precio:</h1>
        <div class="cambiar">
          <div class="form-floating newtitle m-auto">
          <input type= "text" class="form-control" id="floatingInput" name="precio" placeholder="Nuevo precio">
          <label for="floatingInput">Nuevo precio</label>
          </div>
        </div>
        <br>
        <input type="file" name="imagen">
        <input type="submit" id="bonton" class="btn btn-outline-primary" value="Cambiar">
      </form>

      <?php
      
        if(isset($_POST['talle'])){

          //echo "holaaaa tatiii!!!!!!";

          $producto = $_POST['talle'];
          $nombre = $_POST['nombre'];
          $colegio = $_POST['colegio'];
          $precio = $_POST['precio'];
          $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
          
          $consultaUpdate = 'UPDATE catalogo SET producto = \''.$nombre.'\', colegio = \''.$colegio.'\', precio = \''.$precio.'\', imagen= \''.$imagen.'\' WHERE producto = \''.$producto.'\'';
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