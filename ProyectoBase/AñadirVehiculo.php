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

    <form action="insertarpolizaVehiculoBD.php" method="POST">
        <!-- <label for="">id poliza:</label>
        <input type="text" name="id_poliza" id="id_poliza"> -->
        <div class="row g-3">
          <div class="col-auto">
            <label for="" class="visually-hidden">Id empleado asegurador</label>
            <input type="text" name="id_empleado" id="id_empleado" class="form-control mb-3">
          </div>
          <div class="col-auto">
            <label for="" class="visually-hidden">Id cliente</label>
            <input type="text" name="id_cliente" id="id_cliente" class="form-control mb-3">
          </div>
        </div>
        <label for="">Nombre Cliente</label>
        <input type="text" name="nombre_tomador" id="nombre_tomador" class="form-control mb-3">
        <label for="">Cobertura</label>
        <input type="double" name="Cobertura" id="Cobertuta" class="form-control mb-3">
        <label for="">Forma de pago</label>
        <input type="text" name="forma_de_pago" id="forma_de_pago" class="form-control mb-3">
        <div class="row g-3">
          <div class="col-auto">
            <label for="" class="visually-hidden">Fecha del contrato</label>
            <input type="date" name="f_contrato" id="f_contrato" class="form-control mb-3">
          </div>
          <div class="col-auto">
            <label for="" class="visually-hidden">Fecha de renovación</label>
            <input type="date" name="f_renovacion" id="f_renovacon" class="form-control mb-3">
          </div>
        </div>
        <div class="row g-3">
          <div class="col-auto">
            <label for="" class="visually-hidden">Vigente</label>
            <input type="text" name="vigente" id="vigente" class="form-control mb-3" placeholder="Si / No">
          </div>
          <div class="col-auto">
            <label for="" class="visually-hidden">Prima</label>
            <input type="text" name="prima" id="prima" class="form-control mb-3">
          </div>
        </div>
        <label for="">Tipo</label>
        <input type="text" name="tipo" id="tipo" class="form-control mb-3" placeholder="Vehiculo / Vida / Hogar">
       
       
        <!-- <ul>Datos Vehiculo</ul>

        <label for="">Categoria del Vehiculo</label>
        <input type="text" name="categoria_vehiculo" id="categoria_vehiculo" class="form-control mb-3">
        <div class="row g-3">
          <div class="col-auto">
            <label for="" class="visually-hidden">Año del Vehículo</label>
            <input type="text" name="edad_vehiculo" id="edad_vehiculo" class="form-control mb-3">
          </div>
          <div class="col-auto">
            <label for="" class="visually-hidden">Fecha de Nacimiento</label>
            <input type="date" name="edad_conductor" id="edad_conductor" class="form-control mb-3">
          </div>
        </div>
        <label for="">Tipo Cobertura</label>
        <input type="text" name="tipo_cobertura" id="tipo_cobertura" class="form-control mb-3">
        <input type="submit" name="añadir" class="mt-3"> -->
</form>
	
    <h1 class="mt-5"></h1>
	<figure class="text-center">
		<figcaption class="blockquote">Datos del vehículo</figcaption>
	</figure>
    <form action="insertarpolizaVehiculoBD.php" method="POST">
        <label for="">Categoria del Vehiculo</label>
        <input type="text" name="categoria_vehiculo" id="categoria_vehiculo" class="form-control mb-3">
        <div class="row g-3">
            <div class="col-auto">
                <label for="" class="visually-hidden">Año del Vehículo</label>
                <input type="text" name="edad_vehiculo" id="edad_vehiculo" class="form-control mb-3">
            </div>
            <div class="col-auto">
                <label for="" class="visually-hidden">Fecha de Nacimiento</label>
                <input type="date" name="edad_conductor" id="edad_conductor" class="form-control mb-3">
            </div>
        </div>
        <label for="">Tipo Cobertura</label>
        <input type="text" name="tipo_cobertura" id="tipo_cobertura" class="form-control mb-3">
        <input type="submit" name="añadir" class="mt-3">			
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