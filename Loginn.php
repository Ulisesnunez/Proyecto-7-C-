<?php

include('config.php');
session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $consulta = $conn->prepare("SELECT * FROM usuarios WHERE username =:usuario");
    $consulta->bindParam("usuario", $username, PDO::PARAM_STR); 
    $consulta ->execute();

    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    if(!$resultado){
        echo'<script type="text/javascript">
        alert("User y pass incorrectos");
        window.location.href="../../loggin.php";
        </script>';
    }
    else{

        if(password_verify($pass,$resultado['pass'])){ 
            $_SESSION['IdUsuario'] = $resultado['ID'];
            $_SESSION['username'] = $resultado['username'];
           header("Location:../../index.php");
        }
        else{
            echo'<script type="text/javascript">
            alert("User y pass incorrectos");
            window.location.href="../../loggin.php";
            </script>';
        }
    }
}
else{
    echo "Error";
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio de sesión | MYU</title>
    <link rel="stylesheet" href="Logan.css">
    <link rel="shortcut icon" href="MYU PERFIL.PNG">   
  </head>
  <body>

    <div class="login-box">
      <img src="COGOLLO-NOT-MYU" class="avatar" alt="Avatar Image">
      <h1>Inicio de sesión</h1>
      <form action="loggin.php" method="POST" id="formLogin">
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
