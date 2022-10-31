<?php
include("connect.php");




if(isset($_POST['register'])){

    if(strlen($_POST['producto']) >= 1 && strlen($_POST['precio']) >= 1 && strlen($_POST['stock']) >= 1 && strlen($_POST['colegio']) >= 1 ){
        $producto = trim($_POST['producto']);
        $precio = trim($_POST['precio']);
        $stock = trim($_POST['stock']);
        $colegio = trim($_POST['colegio']);
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        
        }

        if(isset($_POST['6'])){
            $consulta = "INSERT INTO catalogo (producto, talle, colegio, stock, precio, imagen) VALUES ('$producto','6','$colegio','$stock','$precio','$imagen')";
            $resultado = mysqli_query($conex,$consulta);
        }

        if(isset($_POST['8'])){
            $consulta2 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio, imagen) VALUES ('$producto','8','$colegio','$stock','$precio','$imagen')";
            $resultado2 = mysqli_query($conex,$consulta2);
        }

        if(isset($_POST['10'])){
            $consulta3 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio, imagen) VALUES ('$producto','10','$colegio','$stock','$precio','$imagen')";
            $resultado3 = mysqli_query($conex,$consulta3);
        }

        if(isset($_POST['12'])){
            $consulta4 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio, imagen) VALUES ('$producto','12','$colegio','$stock','$precio','$imagen')";
            $resultado4 = mysqli_query($conex,$consulta4);
        }

        if(isset($_POST['14'])){
            $consulta5 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio, imagen) VALUES ('$producto','14','$colegio','$stock','$precio','$imagen')";
            $resultado5 = mysqli_query($conex,$consulta5);
        }

        if(isset($_POST['16'])){
            $consulta6 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio, imagen) VALUES ('$producto','16','$colegio','$stock','$precio', '$imagen')";
            $resultado6 = mysqli_query($conex,$consulta6);
        }

        if(isset($_POST['s'])){
            $consulta7 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio, imagen) VALUES ('$producto','s','$colegio','$stock','$precio', '$imagen')";
            $resultado7 = mysqli_query($conex,$consulta7);
        }

        if(isset($_POST['m'])){
            $consulta8 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio. imagen) VALUES ('$producto','m','$colegio','$stock','$precio','$imagen')";
            $resultado8 = mysqli_query($conex,$consulta8);
        }

        if(isset($_POST['l'])){
            $consulta9 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio, imagen) VALUES ('$producto','l','$colegio','$stock','$precio', '$imagen')";
            $resultado9 = mysqli_query($conex,$consulta9);
        }

        if(isset($_POST['xl'])){
            $consulta10 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio, imagen) VALUES ('$producto','xl','$colegio','$stock','$precio', '$imagen')";
            $resultado10 = mysqli_query($conex,$consulta10);
        }

        if(isset($_POST['xxl'])){
            $consulta11 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio, imagen) VALUES ('$producto','xxl','$colegio','$stock','$precio', '$imagen')";
            $resultado11 = mysqli_query($conex,$consulta11);
        }

        if(isset($_POST['xxxl'])){
            $consulta12 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio, imagen) VALUES ('$producto','xxxl','$colegio','$stock','$precio', '$imagen')";
            $resultado12 = mysqli_query($conex,$consulta12);
        }
        if(empty($resultado)==FALSE || empty($resultado2)==FALSE || empty($resultado3)==FALSE || empty($resultado4)==FALSE || empty($resultado5)==FALSE || empty($resultado6)==FALSE || empty($resultado7)==FALSE || empty($resultado8)==FALSE || empty($resultado9)==FALSE || empty($resultado10)==FALSE || empty($resultado11)==FALSE || empty($resultado12)==FALSE ){
?>
        <h2> Articulo cargado </h2>
<?php

    }
}

?>