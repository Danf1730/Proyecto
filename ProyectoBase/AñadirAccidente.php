<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir Accidente</title>
	<link rel="stylesheet" type="text/css" href="style_proyecto/añadir.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<nav class="navbar navbar-light" style="background-color: #2196F3;">
        <div class="container-fluid col-md-11">
          <h1 class="navbar-brand text-light p-1 fs-3">Aseguradora UCAB Continental</h1>
		  	<img src="img/Logo_UCAB_2.png" alt="" width="145" height="45">
        </div>
</nav>

<body>

    <h1 class="mt-5"></h1>
	<figure class="text-start ml-5">
  		<blockquote class="blockquote">
			<p class="h3">Añadir Accidente</p>
  		</blockquote>
		<figcaption class="blockquote">Por favor ingrese los siguientes datos del accidente</figcaption>
	</figure>

    <form>
        <label for="">Fecha y Hora del accidente:</label>
        <input type="datetime-local" name="Fecha">
        <label for="">Lugar:</label>
        <input type="text" name="Lugar">
        <label for="">ID cliente incolucrado:</label>
        <input type="text" name="id_involucrado">
        <label for="">ID Vehiculo:</label>
        <input type="text" name="id_vehiculo">
        <label for="">ID persona  incolucrado:</label>
        <label for="">Importante: añadir primero en persona adicional:</label>
        <input type="text" name="id_persona">
        <label for="">ID multa:</label>
        <label for="">Importante: añadir primero información de multa:</label>
        <input type="text" name="id_multa">
        <input type="submit" name="submit" class="mt-3">
        

</form>
<nav class="navbar bottom navbar-light mt-5" style="background-color: #2196F3;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> </a>
	<nav aria-label="Page navigation example">
  		<ul class="pagination justify-content-end">
    		<li class="page-item"><a class="page-link" href="AgenteMenu.php">Regresar</a></li>
  		</ul>
	</nav>
  </div>
</nav>
</body>
</html>