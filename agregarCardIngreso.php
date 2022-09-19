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
            $consulta = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','s','$colegio','$stock','$precio')";
            
        }

        if(isset($_POST['m'])){
            $consulta = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','m','$colegio','$stock','$precio')";
            
        }

        if(isset($_POST['l'])){
            $consulta = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','l','$colegio','$stock','$precio')";
            
        }

        if(isset($_POST['xl'])){
            $consulta = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','xl','$colegio','$stock','$precio')";
            
        }

        if(isset($_POST['xxl'])){
            $consulta = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','xxl','$colegio','$stock','$precio')";
            
        }

        if(isset($_POST['xxxl'])){
            $consulta = "INSERT INTO catalogo (producto, talle, colegio, stock, precio) VALUES ('$producto','xxxl','$colegio','$stock','$precio')";
            
        }

    
        $resultado = mysqli_query($conex,$consulta);
        $resultado2 = mysqli_query($conex,$consulta2);
        $resultado3 = mysqli_query($conex,$consulta3);
        $resultado4 = mysqli_query($conex,$consulta4);
        $resultado5 = mysqli_query($conex,$consulta5);
        $resultado6 = mysqli_query($conex,$consulta6);
    
        if($resultado || $resultado2 || $resultado3 || $resultado4 || $resultado5 || $resultado6){
?>
        <h3> consulta realizada </h3>
<?php

    }
}

?>