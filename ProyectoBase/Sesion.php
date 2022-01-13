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
		<h1>Introduce tus datos</h1>
	
	<form action="comprueba_datos.php" method="post" >
		<table>
		<tr>
	    <td class="izq">
		usuario</td><td class="der"><input type="text" name="usuario"></td></tr>
		
		<tr><td class="izq">
		clave</td><td class="der"><input type="password" name="clave"></td></tr>
		<tr><td colspan="2"><input type="submit" name="enviar" value="login"></tr>
		</table>
        
</form>
	<div class="footer">
		<p> <a href="Inicio.php" style="float:right">Regresar</a> </p>
	</div>
    
</body>
</html>