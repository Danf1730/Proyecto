<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir Multa</title>
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
			<p class="h3">Añadir Multa</p>
  		</blockquote>
		<figcaption class="blockquote">Por favor ingrese los siguientes datos de la multa</figcaption>
	</figure>

    <form action="insertarMultaBD.php" method="POST">
        <label for="">ID multa:</label>
        <input type="text" name="id_multa" id="id_multa">
        <label for="">ID vehiculo:</label>
        <input type="text" name="id_vehiculo" id="id_vehiculo">
        <label for="">ID Conductor:</label>
        <input type="text" name="id_cliente_conductor" id="id_cliente_conductor">
        <label for="">Importe:</label>
        <input type="text" name="importe" id="importe"> 
        <label for="">Fecha multa:</label>
        <input type="date" name="f_multa" id="f_multa">
        <label for="">Lugar:</label>
        <input type="text" name="lugar" id="lugar">
        <label for="">Gravedad:</label>
        <input type="text" name="nivel_gravedad" id="nivel_gravedad">
        <input type="submit" name="Asubmit" class="mt-3">
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