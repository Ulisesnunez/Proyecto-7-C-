<?php 
include('connect.php');
session_start();
if(isset($_POST['registro'])){
    $usuario = $_POST['username'];
    $pass = $_POST['pass'];
    $passCifrada = password_hash($pass,PASSWORD_DEFAULT);
    
    $a = "SELECT * FROM clientes WHERE username = '$usuario'";
    $conexion = mysqli_query($conex,$a);
    $var = $conexion -> fetch_array();
    if(EMPTY($var[0]) == false){ 
        echo'<script type="text/javascript">
        alert("El usuario ya existe");
        window.location.href="Registro.php";
        </script>';
    }
    else{
       /*  $consultaRegistro = $conex -> prepare("INSERT INTO clientes(username, pass) VALUES ('$usuario', '$pass')");
        $consultaRegistro -> bindParam("username",$usuario,PDO::PARAM_STR);
        $consultaRegistro -> bindParam("pass",$passCifrada,PDO::PARAM_STR);
        $resultadoRegistro = $consultaRegistro -> execute(); */

        $b = "INSERT INTO clientes(username, pass) VALUES ('$usuario', '$passCifrada')";
        $conexion2 = mysqli_query($conex,$b);
        if(EMPTY($conexion2) == TRUE){ 
            echo'<script type="text/javascript">
            alert("No se pudo registrar el usuario");
            window.location.href="Registro.php";
            </script>';
        }
        else{
            echo'<script type="text/javascript">
            window.location.href="indexAdentro.php";
            </script>';
        }
        
    }
}
?>


<html>
  <head>
    <meta charset="utf-8">
    <title>Regístrate | MYU</title>
    <link rel="stylesheet" href="Registro.css">
    <link rel="shortcut icon" href="myu.png">  
  </head>
  <body>

    <div class="login-box">
      <img src="myu.png" class="avatar" alt="Avatar Image">
      <h1>Regístrate</h1>
      <form method="POST" id="formRegistro" onsubmit="return verificarPass();">
        <label for="email">Email</label>
        <input type="text" placeholder="Ingresa tu Email">
       
        <label for="username">Usuario</label>
        <input type="text"  id="username" placeholder="Ingresa tu Usuario" name="username" required>
        
        <label for="password">Contraseña</label>
        <input type="password" id="pass" placeholder="Ingresa tu Contraseña" name="pass" required>
       
        <input type="submit" value="Registrarme" id="registro" name="registro" form="formRegistro">
       
        <a href="Loginn.php">Inicia sesión.</a>
      </form>
    </div>
  </body>
</html>
