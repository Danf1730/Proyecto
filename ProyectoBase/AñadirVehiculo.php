<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir Vehiculo</title>
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
			<p class="h3">Añadir poliza de Vehículo</p>
  		</blockquote>
		<figcaption class="blockquote">Por favor ingrese los siguientes datos de la poliza del vehículo</figcaption>
	</figure>

    <form action="insertarpolizaVehiculoBD.php" method="POST" class="w-30 p-3 border-0" style="background-color: white;">
   
    <label for="">Id Póliza</label>--
        <input type="text" name="nro_poliza" id="nro_poliza" class="form-control mb-3" style="background-color: #E3F2FD;">
        <div class="row g-3">
          <div class="col-auto">
           <label for="" class="visually-hidden">Id Agente </label>-
            <input type="text" name="id_agente" id="id_agente" class="form-control mb-3" style="background-color: #E3F2FD;">
          </div>
          <div class="col-auto">
          <label for="" class="visually-hidden">Id Cliente</label>--
            <input type="text" name="id_cliente" id="id_cliente" class="form-control mb-3" style="background-color: #E3F2FD;">
          </div>
       
        </div>
        
        <label for="">Descripción</label>-
        <input type="text" name="descrip_poliza" id="descrip_poliza" class="form-control mb-3" style="background-color: #E3F2FD;">
       
        <div class="row g-3">
          <div class="col-auto">
            <label for="" class="visually-hidden">Fecha del Contrato</label>---
            <input type="date" name="f_contrato" id="f_contrato" class="form-control mb-3" style="background-color: #E3F2FD;">
          </div>
          <div class="col-auto">
          <label for="" class="visually-hidden">Fecha de Renovación</label>-
            <input type="date" name="f_renovacion" id="f_renovacion" class="form-control mb-3" style="background-color: #E3F2FD;">
          </div>
        </div>
         
        <div class="row g-3">
          <div class="col-auto">
           <label for="" class="visually-hidden">Vigente</label>
            <input type="text" name="estado_contrato" id="estado_contrato	" class="form-control mb-3" placeholder="Si / No" style="background-color: #E3F2FD;">
          </div>
         
          <div class="col-auto">
           <label for="" class="visually-hidden">Prima</label>--
            <input type="text" name="prima" id="prima" class="form-control mb-3" style="background-color: #E3F2FD;">
          </div>
        </div>

        <h1 class="mt-3"></h1>
	    <figure class="text-start">
		    <figcaption class="blockquote">Datos del Vehículo</figcaption>
	    </figure>
        <div class="row g-3">
            <div class="col-auto">
                <label for="" class="visually-hidden">Matricula del Vehículo</label>
                <input type="text" name="matricula" id="matricula" class="form-control mb-3" style="background-color: #E3F2FD;">
            </div>
            <div class="col-auto">
                <label for="" class="visually-hidden">Recargo</label>
                <input type="text" name="recargo" id="recargo" class="form-control mb-3" style="background-color: #E3F2FD;">
            </div>
            <div class="col-auto">
                <label for="" class="visually-hidden">Descuento</label>
                <input type="text" name="descuento" id="descuento" class="form-control mb-3" style="background-color: #E3F2FD;">
            </div>
        </div>
        <input type="submit" name="añadir" class="mt-5">
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