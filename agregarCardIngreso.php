<?php
include("connect.php");

if($conex){
    echo "conectado brooo!!!!!!";
}


if(isset($_POST['register'])){

    if(strlen($_POST['producto']) >= 1 && strlen($_POST['precio']) >= 1 && strlen($_POST['stock']) >= 1 && strlen($_POST['colegio']) >= 1 ){
        $producto = trim($_POST['producto']);
        $precio = trim($_POST['precio']);
        $stock = trim($_POST['stock']);
        $colegio = trim($_POST['colegio']);

        
        }

        if(isset($_POST['6'])){
            $consulta = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','6','$colegio','$stock','$precio')";

        }

        if(isset($_POST['8'])){
            $consulta2 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','8','$colegio','$stock','$precio')";
            
        }

        if(isset($_POST['10'])){
            $consulta3 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','10','$colegio','$stock','$precio')";
            
        }

        if(isset($_POST['12'])){
            $consulta4 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','12','$colegio','$stock','$precio')";
            
        }

        if(isset($_POST['14'])){
            $consulta5 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','14','$colegio','$stock','$precio')";
            
        }

        if(isset($_POST['16'])){
            $consulta6 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','16','$colegio','$stock','$precio')";
            
        }

        if(isset($_POST['s'])){
            $consulta7 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','s','$colegio','$stock','$precio')";
            
        }

        if(isset($_POST['m'])){
            $consulta8 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','m','$colegio','$stock','$precio')";
            
        }

        if(isset($_POST['l'])){
            $consulta9 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','l','$colegio','$stock','$precio')";
            
        }

        if(isset($_POST['xl'])){
            $consulta10 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','xl','$colegio','$stock','$precio')";
            
        }

        if(isset($_POST['xxl'])){
            $consulta11 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','xxl','$colegio','$stock','$precio')";
            
        }

        if(isset($_POST['xxxl'])){
            $consulta12 = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','xxxl','$colegio','$stock','$precio')";
            
        }

    
        $resultado = mysqli_query($conex,$consulta);
        $resultado2 = mysqli_query($conex,$consulta2);
        $resultado3 = mysqli_query($conex,$consulta3);
        $resultado4 = mysqli_query($conex,$consulta4);
        $resultado5 = mysqli_query($conex,$consulta5);
        $resultado6 = mysqli_query($conex,$consulta6);
        $resultado7 = mysqli_query($conex,$consulta7);
        $resultado8 = mysqli_query($conex,$consulta8);
        $resultado9 = mysqli_query($conex,$consulta9);
        $resultado10 = mysqli_query($conex,$consulta10);
        $resultado11 = mysqli_query($conex,$consulta11);
        $resultado12 = mysqli_query($conex,$consulta12);
    
        if($resultado || $resultado2 || $resultado3 || $resultado4 || $resultado5 || $resultado6 || $resultado7 || $resultado8 || $resultado9 || $resultado10 || $resultado11 || $resultado12 ){
?>
        <h3> consulta realizada </h3>
<?php

    }
}

?>