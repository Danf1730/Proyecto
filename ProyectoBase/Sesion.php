<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio sesión</title>
	<link rel="stylesheet" type="text/css" href="style_proyecto/Añadir.css" style="text-decoration:none">
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<nav class="navbar navbar-light bg-primary">
        <div class="container-fluid col-md-11">
          <h1 class="navbar-brand text-light p-1 fs-3">Aseguradora UCAB Continental</h1>
		  	<img src="img/Logo_UCAB_2.png" alt="" width="145" height="45">
        </div>
</nav>
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
		<p> <a href="MenuCliente.php" style="float:right">Regresar</a> </p>
	</div>
    
</body>
</html>