<?php

include('config.php');
session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $consulta = $conn->prepare("SELECT * FROM clientes WHERE username =:usuario");
    $consulta->bindParam("usuario", $username, PDO::PARAM_STR); 
    $consulta ->execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    if(!$resultado){
        echo'<script type="text/javascript">
        alert("User y pass incorrectos");
        window.location.href="Loginn.php";
        </script>';
    }
    else{

        if(password_verify($pass,$resultado['pass'])){ 
            $_SESSION['IdUsuario'] = $resultado['ID'];
            $_SESSION['username'] = $resultado['username'];
            if($_SESSION['username'] == "admin"){
              header("Location: administracion.php");
            }
            else
            {
              header("Location: indexAdentro.php");
            }
        }
        else{
            echo'<script type="text/javascript">
            alert("User y pass incorrectos");
            window.location.href="Loginn.php";
            </script>';
        }
    }
}

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio de sesión | MYU</title>
    <link rel="stylesheet" href="Logan.css">
    <link rel="shortcut icon" href="myu.png">
  </head>
  <body>

    <div class="login-box">
      <img src="myu.png" class="avatar" alt="Avatar Image">
      <h1>Inicio de sesión</h1>
      <form action="Loginn.php" method="POST" id="formLogin">
        <label for="username">Usuario</label>
        <input type="text" id="username" placeholder="Ingresa tu Usuario" name="username" required >
        <label for="password">Contraseña</label>
        <input type="password" id="pass" placeholder="Ingresa tu Contraseña" name="pass" required>
        <input type="submit" value="Iniciar sesión" id="login" name="login" form="formLogin">
        <a href="Registro.php">¿No tenes cuenta? Registrate.</a>
      </form>
    </div>
  </body>
</html>
