<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir Agente</title>
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
			<p class="h3">Añadir Siniestros</p>
  		</blockquote>
		<figcaption class="blockquote">Por favor ingrese los siguientes datos del siniestro</figcaption>
    
	</figure>
        
     <form action="insertarSiniestroBD.php" method="POST" class="w-30 p-3 border-0" style="background-color: white;">
        
      <div class="row g-3">
        <div class="col-auto">
          <label for="" class="visually-hidden">ID siniestro</label>
          <input type="text" name="id_siniestro" id="id_siniestro" class="form-control mb-3" style="background-color: #E3F2FD;">
        </div>
        <div class="col-auto">
          <label for="" class="visually-hidden">ID Poliza</label>
          <input type="text" name="id_poliza" id="id_poliza" class="form-control mb-3" style="background-color: #E3F2FD;">
        </div>
      
        <div class="col-auto">
          <label for="" class="visually-hidden">Fecha del siniestro</label>
          <input type="date" name="f_siniestro" id="f_siniestro" class="form-control mb-3" style="background-color: #E3F2FD;">
        </div>

        <div class="col-auto">
          <label for="" class="visually-hidden">Fecha de respuetsa</label>
          <input type="date" name="f_respuesta" id="f_respuesta" class="form-control mb-3" style="background-color: #E3F2FD;">
        </div>
        <div class="col-auto">
          <label for="" class="visually-hidden">Rechazo</label>
          <input type="text" name="rechazo" id="rechazo" class="form-control mb-3" style="background-color: #E3F2FD;" placeholder="Si/No">
        </div>
        <div class="col-auto">
          <label for="" class="visually-hidden">Monto Reconocido</label>
          <input type="text" name="reconoccido" id="reconoccido" class="form-control mb-3" style="background-color: #E3F2FD;">
        </div>
        <div class="col-auto">
          <label for="" class="visually-hidden">Monto Solicitado</label>
          <input type="text" name="solicitado" id="solicitado" class="form-control mb-3" style="background-color: #E3F2FD;">
        </div>
        <div class="col-auto">
          <label for="" class="visually-hidden">Descripción</label>
          <input type="text" name="descripcion" id="descripcion" class="form-control mb-3" style="background-color: #E3F2FD;">
        </div>

          </div>
        <input type="submit" name="añadir" class="mt-3">

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