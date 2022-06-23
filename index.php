<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>MYU Indumentaria</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet"/>
		<link rel="shortcut icon" href="MYU PERFIL.PNG">   
		<link rel="stylesheet" href="iNDEXGODCSS.css" />
	</head>
	<body>
		<div class="contenedor">
			<header class="header">
				<div class="logo">
					<a href="index.html"><h1>MyU Indumentaria</h1></a>
				</div>
				<nav class="menu">
					<a href="#">Inicio</a>
					<a href="Catalogo.html">Catalogo</a>
					<a href="Loginn.php">Iniciar sesión</a>
			    </nav>

                <div class="slide">
                    <div class="slide-inner">
                        <input class="slide-open" type="radio" id="slide-1" 
                              name="slide" aria-hidden="true" hidden="" checked="checked">
                        <div class="slide-item">
                            <img src="imagenesropa/imagen1.jpeg">
                        </div>
                        <input class="slide-open" type="radio" id="slide-2" 
                              name="slide" aria-hidden="true" hidden="">
                        <div class="slide-item">
                            <img src="imagenesropa/imagen4.jpeg">
                        </div>
                        <input class="slide-open" type="radio" id="slide-3" 
                              name="slide" aria-hidden="true" hidden="">
                        <div class="slide-item">
                            <img src="imagenesropa/imagen12.jpeg">
                        </div>
                        <label for="slide-3" class="slide-control prev control-1">‹</label>
                        <label for="slide-2" class="slide-control next control-1">›</label>
                        <label for="slide-1" class="slide-control prev control-2">‹</label>
                        <label for="slide-3" class="slide-control next control-2">›</label>
                        <label for="slide-2" class="slide-control prev control-3">‹</label>
                        <label for="slide-1" class="slide-control next control-3">›</label>
                        <ol class="slide-indicador">
                            <li>
                                <label for="slide-1" class="slide-circulo">•</label>
                            </li>
                            <li>
                                <label for="slide-2" class="slide-circulo">•</label>
                            </li>
                            <li>
                                <label for="slide-3" class="slide-circulo">•</label>
                            </li>
                        </ol>
                    </div>
                </div>
		    </header>
    </body>
 </html>