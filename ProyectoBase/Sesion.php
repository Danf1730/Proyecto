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
<nav class="navbar navbar-light" style="background-color: #2196F3;">
        <div class="container-fluid col-md-11">
          <h1 class="navbar-brand text-light p-1 fs-3">Aseguradora UCAB Continental</h1>
		  	<img src="img/Logo_UCAB_2.png" alt="" width="145" height="45">
        </div>
</nav>
<nav class="navbar fixed-bottom navbar-light" style="background-color: #2196F3;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> </a>
	<nav aria-label="Page navigation example">
  		<ul class="pagination justify-content-end">
    		<li class="page-item"><a class="page-link" href="MenuCliente.php">Regresar</a></li>
  		</ul>
	</nav>
  </div>
</nav>
<body>
		<h1></h1>
		<figure class="text-center">
  			<blockquote class="blockquote">
			  <p class="h2">Ingrese sus datos</p>
  			</blockquote>
		</figure>
	
		<form action="comprueba_datos.php" method="post">
  			<div class="row mb-3">
    			<label for="usuario" class="col-sm-2 col-form-label"> </label>
    			<div class="col-sm-10">
      				<input type="text" class="form-control" placeholder="Usuario" name="usuario">
    			</div>
  			</div>
  			<div class="row mb-3">
    			<label for="clave" class="col-sm-2 col-form-label"> </label>
    			<div class="col-sm-10">
      				<input type="password" class="form-control" placeholder="Clave" name="clave">
    			</div>
  			</div>
  			<button type="submit" name="enviar" value="login" class="btn btn-primary">Sign in</button>
		</form>
    
</body>
</html>