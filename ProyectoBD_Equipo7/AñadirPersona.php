<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir Persona Adicional </title>
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
			<p class="h3">Añadir Persona</p>
  		</blockquote>
		<figcaption class="blockquote">Por favor ingrese los siguientes datos de la persona adicional</figcaption>
	</figure>
        
     <form action="insertarPersonaDB.php" method="POST" class="w-30 p-3 border-0" style="background-color: white;">

        <label for="">Nombre</label>
        <input type="text" name="NombPersona" id="NombPersona" class="form-control mb-3" style="background-color: #E3F2FD;">
        
        <label for="">Cédula de Identidad</label>
        <input type="text" name="cedula" id="cedula" class="form-control mb-3" style="background-color: #E3F2FD;">
        
        <label for="">Número de Contacto</label>
        <input type="string" name="NumTlfPersona" id="NumTlfPersona" class="form-control mb-3" style="background-color: #E3F2FD;">
        
        <label for="">Tipo Persona</label>
        <input type="string" name="Tipo_persona" id="Tipo_persona" class="form-control mb-3" style="background-color: #E3F2FD;" placeholder="CLIENTE-EMPLEADO-AGENTE-BENEFICIARIO">
        
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