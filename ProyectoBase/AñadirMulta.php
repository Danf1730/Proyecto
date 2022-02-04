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

    <form action="insertarMultaBD.php" method="POST" class="w-30 p-3 border-0" style="background-color: white;">
        <div class="row g-3">
          <div class="col-auto">
            <label for="">ID Multa</label>
            <input type="text" name="id_multa" id="id_multa" class="form-control mb-3" style="background-color: #E3F2FD;">
          </div>
          <div class="col-auto">
            <label for="">Matricula Vehículo</label>
            <input type="text" name="matricula" id="matricula" class="form-control mb-3" style="background-color: #E3F2FD;">
          </div>
        </div>
        <div class="row g-3">
          <div class="col-auto">
            <label for="">Fecha de la Multa</label>
            <input type="date" name="f_multa" id="f_multa" class="form-control mb-3" style="background-color: #E3F2FD;">
          </div>
          <div class="col-auto">
            <label for="">hora de la Multa</label>
            <input type="time" name="h_multa" id="h_multa" class="form-control mb-3" style="background-color: #E3F2FD;">
          </div>
        </div>
        <label for="">Importe</label>
        <input type="text" name="importe" id="importe" class="form-control mb-3" style="background-color: #E3F2FD;"> 
        <label for="">Lugar</label>
        <input type="text" name="lugar" id="lugar" class="form-control mb-3" style="background-color: #E3F2FD;">
        <label for="">Gravedad</label>
        <input type="text" name="nivel_gravedad" id="nivel_gravedad" class="form-control mb-3" style="background-color: #E3F2FD;" placeholder="De 1 a 10">
        <input type="submit" name="Asubmit" class="mt-5">
</form>
	
    <nav class="navbar bottom navbar-light mt-5" style="background-color: #2196F3;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> </a>
	        <nav aria-label="Page navigation example">
  		        <ul class="pagination justify-content-end">
    		        <li class="page-item"><a class="page-link" href="MenuAgente.php">Regresar</a></li>
  		        </ul>
	        </nav>
        </div>
    </nav>

</body>
</html>