<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir Vehículo</title>
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
			<p class="h3">Añadir póliza de Vehículo</p>
  		</blockquote>
		<figcaption class="blockquote">Por favor ingrese los siguientes datos de la póliza del vehículo</figcaption>
	</figure>

    <form action="insertarvehiculo.php" method="POST" class="w-30 p-3 border-0" style="background-color: white;">
       
        <h1 class="mt-3"></h1>
	    <figure class="text-start">
		    <figcaption class="blockquote">Datos del Vehículo</figcaption>
	    </figure>
        <div class="row g-3">
            <div class="col-auto">
                <label for="" class="visually-hidden">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control mb-3" style="background-color: #E3F2FD;">
            </div>
            <div class="col-auto">
                <label for="" class="visually-hidden">Modelo</label>
                <input type="tex" name="modelo" id="modelo" class="form-control mb-3" style="background-color: #E3F2FD;">
            </div>
        </div>

		<label for="" class="visually-hidden">Matrícula</label>
                <input type="text" name="matricula" id="matricula" class="form-control mb-3" style="background-color: #E3F2FD;">

	             <label for="" class="visually-hidden">Año del Vehículo</label>
                <input type="int" name="annio" id="annio" class="form-control mb-3" style="background-color: #E3F2FD;">
		
			<label for="">Id Categoría del Vehículo</label>
            <input type="text" name="id_categoria" id="id_categoria" class="form-control mb-3" style="background-color: #E3F2FD;" placeholder="1.Utilitario,2.Gama media,3.Gama alta,4.Gran turismo,5.Lujo,6.Otros">  
            
			<label for="">Id Tipo Cobertura</label>
           <input type="text" name="id_tipo_cobertura" id="id_tipo_cobertura" class="form-control mb-3" style="background-color: #E3F2FD;" placeholder="1.Todo riesgo, 2.Franquicia, 3.Terceros, 4.Otros
">
           
        
       
        <input type="submit" name="añadir" class="mt-5">			
    </form>

    <nav class="navbar bottom navbar-light mt-5" style="background-color: #2196F3;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> </a>
	        <nav aria-label="Page navigation example">
  		        <ul class="pagination justify-content-end">
    		        <li class="page-item"><a class="page-link" href="AgenteVehiculo.php">Regresar</a></li>
  		        </ul>
	        </nav>
        </div>
    </nav>
    
</body>
</html>