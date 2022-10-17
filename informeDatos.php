<?php

    include("connect.php");
    $informe = 'SELECT * FROM informe_ventas';
    $hoy = new Datetime();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    echo $hoy = $hoy-> format('Y/m');


?>
    
</body>
</html>