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

    <form class="w-30 p-3 border-0" style="background-color: white;">
        <div class="row g-3">
          <div class="col-auto">
            <label for="" class="visually-hidden">ID Cliente Incolucrado</label>
            <input type="text" name="id_involucrado" class="form-control mb-3" style="background-color: #E3F2FD;">
          </div>
          <div class="col-auto">
            <label for="" class="visually-hidden">ID Vehículo</label>
            <input type="text" name="id_vehiculo" class="form-control mb-3" style="background-color: #E3F2FD;">
          </div>
        </div>
        <div class="row g-3">
          <div class="col-auto">
            <label for="" class="visually-hidden">Id Persona Incolucrado</label>
            <input type="text" name="id_persona" class="form-control mb-3" style="background-color: #E3F2FD;" placeholder="Añadido en persona adicional">
          </div>
          <div class="col-auto">
            <label for="" class="visually-hidden">Id Multa</label>
            <input type="text" name="id_multa" class="form-control mb-3" style="background-color: #E3F2FD;">
          </div>
        </div>
        <label for="">Fecha y Hora del accidente:</label>
        <input type="datetime-local" name="Fecha" class="form-control mb-3" style="background-color: #E3F2FD;">
        <label for="">Lugar:</label>
        <input type="text" name="Lugar" class="form-control mb-3" style="background-color: #E3F2FD;">
        <input type="submit" name="submit" class="mt-5">
        

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