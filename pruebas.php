<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>
<form metod="post">
<input type="submit" name="boton">
</form>

<?php
    $_POST['boton'] = 10;
    if(empty($_POST['boton'] == false)){

        $_session["x"] + 1;
        echo $_session["x"];
    }
    else
    {
        echo "hola";
    }
?>


</body>
</html>