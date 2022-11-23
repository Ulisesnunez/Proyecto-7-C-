<?php 
include('connect.php');
session_start();
$mostrar = 'SELECT * FROM `carrito` C INNER JOIN catalogo CC ON C.id_producto = CC.nro_producto WHERE cliente = \''.$_SESSION['username'].'\'';
//SELECT * FROM `carrito` C INNER JOIN catalogo CC ON C.id_producto = CC.nro_producto WHERE cliente = \''.$_SESSION['username'].'\'';
$resultLista = mysqli_query($conex,$mostrar);



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
              <a class="logo__name" href="indexAdentro.php">MYU INDUMENTARIA</a>
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
                      <?php echo "Bienvenido " . $_SESSION['username'];?> 
                    </a>
                    <ul class="dropdown-menu" id="drop1" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" id="drop" href="index.php">Cerar Sesion</a></li>
                    </ul>
                  </li>
                  <!-- <li><i class='bx bx-cart-add bx-border' style='font-size: 1.5em; color: #a13431;'></i></li> -->
                </ul>
              </div>
            </div>
          </nav>
    </div>

    <header class="header">
    <div class="center mt-5">
    <div class="card pt-3" >
            <p style="font-weight: bold; color: #0F6BB7; font-size: 22px;">Carrito de compras de <?php echo $_SESSION['username'];?></p>
        <div class="container-fluid p-2">
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Artículo</th>
<th scope="col">Cantidad</th>
<th scope="col">Precio</th>
<!-- <th scope="col">Total</th> -->
</tr>
</thead>
<!-- empieza -->
<tbody>  
<div class="container_card">

<?php
$total = 0;
while($rowc = $resultLista -> fetch_array()){
  $imagen = $rowc['imagen'];
  $producto = $rowc['producto'];
  $precio = $rowc['precio'];
  $total = $total + $precio;
  
  ?>
<tr>
<td style="vertical-align: middle;"><?php echo base64_encode($imagen);?></td>
<td style="vertical-align: middle;"><?php echo $producto;?></td>
<td style="vertical-align: middle;"><input type="number" name="cantidad" value="1"></td>
<td style="vertical-align: middle;"><?php echo $precio;?></td>
</tr> 

<?php
}
?>


</tbody>
<!-- termina -->
</table>




<!-- datos cliente -->
  <form  action= "carritolista.php" method = "post">
  <button  style = "float: left;" class="btn btn-success mb-4" type="submit" name="vaciar">Vaciar Carrito</button>
  </form>
  <form action= "carritolista.php" method = "post">
  <button  class="btn btn-success mb-4" type="submit" name="pagar">Pagar y finalizar</button>
  </form>
  <h4 style = "float: right;"><?php echo "Total: ". $total;?></h4>


  <?php
  if(isset($_REQUEST['vaciar'])){

      $convarciar = 'DELETE FROM carrito WHERE cliente = \''.$_SESSION['username'].'\'';
      $resvaciar = mysqli_query($conex,$convarciar);


  }
  
  if($_REQUEST['pagar']){

    //header("Location: confirmarcompra.php");
  } 
  ?>



</form>
</div>

    </div>
</div>
</header>


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