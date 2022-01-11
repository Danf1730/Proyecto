<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio sesión</title>
	<link rel="stylesheet" type="text/css" href="style_proyecto/Añadir.css">
    <body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
</head>

<body>
		<form action="" method="POST">
			<?php
			
			if(isset($errorLogin)){
				echo $errorLogin;
			}

			?>
			<h2>Iniciar Sesión</h2>
			
			<p>Nombre de usuario:<br>
			<input type="text" name="username"></p>
			<p> Contraseña: <br>
			<input type="password" name="password"></p>
			<p class="center"><input type="submit" value="Iniciar Sesión"></p>
		</form>
    
</body>
</html>