<?php 
  include('connect.php');
  session_start();
  $month = date('m');
  $whereMonth = 'WHERE fecha BETWEEN "2022-'.$month.'-1" AND "2022-'.$month.'-31"';

  $pedidosQuery = 'SELECT count(*) as CANTIDAD_PEDIDOS_MES FROM `pedidos2` '.$whereMonth;
  $pedidosRes = mysqli_query($conex,$pedidosQuery);
  $cobradoQuery = 'SELECT SUM(cantidad_prod*precio) as valor FROM pedidos2 JOIN puente ON puente.id_pedido = pedidos2.id JOIN catalogo ON puente.id_producto = catalogo.nro_producto '.$whereMonth;
  $cobradoRes = mysqli_query($conex,$cobradoQuery);
  $prodQuery = 'SELECT *, max(SUMA) as TOTALVENDIDO FROM catalogo JOIN (SELECT *, sum(cantidad_prod) as SUMA FROM puente JOIN (SELECT id FROM pedidos2 '.$whereMonth.') A ON A.id = puente.id_pedido GROUP BY id_producto) B ON B.id_producto = catalogo.nro_producto;';
  $prodRes = mysqli_query($conex,$prodQuery);
  $unidQuery = 'SELECT SUM(cantidad_prod) as unidades_totales_mes FROM pedidos2 JOIN puente ON puente.id_pedido = pedidos2.id '.$whereMonth;
  $unidRes = mysqli_query($conex,$unidQuery);
  

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
              <a class="logo__name" href="administracion.php">MYU INDUMENTARIA</a>
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

    <header class="header">
        
        <h1 style="color: #563d35;">INFORME DE VENTAS</h1>

   <strong><p style="color: black;"> CANTIDAD DE PEDIDOS EN EL MES: <?php $row = mysqli_fetch_assoc($pedidosRes); echo $row['CANTIDAD_PEDIDOS_MES'];?> 
   </p></strong>
   <strong><p style="color: black;"> TOTAL FACTURADO EN EL MES: $<?php $row = mysqli_fetch_assoc($cobradoRes); echo $row['valor'];?> </p></strong>
   <strong><p style="color: black;"> PRODUCTO MAS VENDIDO EN EL MES: <?php $row = mysqli_fetch_assoc($prodRes); echo $row['producto'];?> </p></strong>
   <strong><p style="color: black;"> UNIDADES TOTALES VENDIDAS EN EL MES: <?php $row = mysqli_fetch_assoc($unidRes); echo $row['unidades_totales_mes'];?> </p></strong>


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