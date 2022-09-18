<?php 
include('config.php');
if(isset($_POST['registro'])){
    $usuario = $_POST['mail'];
    $pass = $_POST['contrasenia'];
    $passCifrada = password_hash($pass,PASSWORD_DEFAULT);
    
    
    $consultaUser = $conn -> prepare("SELECT * FROM clientes WHERE mail= :user");
    $consultaUser -> bindParam("mail",$usuario,PDO::PARAM_STR);
    $consultaUser -> execute();

    $resultadoUser = $consultaUser->fetch(PDO::FETCH_ASSOC);
    if($resultadoUser){ 
        echo'<script type="text/javascript">
        alert("El usuario ya existe");
        window.location.href="Registro.php";
        </script>';
    }
    else{
        $consultaRegistro = $conn -> prepare("INSERT INTO clientes(nombre, contrasenia) VALUES (mail, contrasenia)");
        $consultaRegistro -> bindParam("usuario",$usuario,PDO::PARAM_STR);
        $consultaRegistro -> bindParam("pass",$passCifrada,PDO::PARAM_STR);
        $resultadoRegistro = $consultaRegistro -> execute();
        if(!$resultadoRegistro){ 
            echo'<script type="text/javascript">
            alert("No se pudo registrar el usuario");
            window.location.href="Registro.php";
            </script>';
        }
        else{
            echo'<script type="text/javascript">
            window.location.href="index.php";
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
    <link rel="shortcut icon" href="MYU PERFIL.PNG">   
  </head>
  <body>

    <div class="login-box">
      <img src="MYU PERFIL.PNG" class="avatar" alt="Avatar Image">
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
