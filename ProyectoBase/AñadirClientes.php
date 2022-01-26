<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir Cliente</title>
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
			<p class="h3">Añadir Cliente</p>
  		</blockquote>
		<figcaption class="blockquote">Por favor ingrese los siguientes datos del cliente</figcaption>
	</figure>
		
        
     <form action="insertarclienteDB.php" method="POST" >
      
       <label for="">Nombre:</label>
        <input type="text" name="Nombre" id="Nombre">
        <label for="">Apellido:</label>
        <input type="text" name="Apellido" id="Apellido">
        <label for="">Calle:</label>
        <input type="text" name="Calle" id="Calle">
        <label for="">Ciudad:</label>
        <input type="text" name="Ciudad" id="Ciudad">
        <label for="">Nº de Contacto:</label>
        <input type="string" name="Telefono" id="Telefono">
        <label for="">Cédula de identidad:</label>
        <input type="text" name="Cedula" id="Cedula">
        <label for="">Genero:</label>
        <input type="text" name="Genero" id="Genero">
        <label for="">Fecha Nacimiento:</label>
        <input type="date" name="f_nacimineto" id="f_nacimineto">
        <label for="">Profesion:</label>
        <input type="text" name="prof" id="prof">
        <label for="">id cliente:</label>
        <input type="text" name="id_cliente" id="id_cliente">
        <label for="">id sucursal registro:</label>
        <input type="text" name="id_sucursal" id="id_sucursal">
        <label for="">id agente personal:</label>
        <input type="text" name="id_agente" id="id_agente">
        <label for="">id agente prestamo:</label>
        <input type="text" name="id_prestamo" id="id_prestamo">
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