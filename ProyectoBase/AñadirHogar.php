<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir Hogar</title>
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
			<p class="h3">Añadir Poliza de Hogar</p>
  		</blockquote>
		<figcaption class="blockquote">Por favor ingrese los siguientes datos de la poliza</figcaption>
	</figure>
        
    <form action="insertarpolizaHogarBD.php" method="POST">
        
        <label for="">id poliza:</label>
        <input type="text" name="id_poliza" id="id_poliza">
        <label for="">id empleado asegurador:</label>
        <input type="text" name="id_empleado" id="id_empleado">
        <label for="">id cliente:</label>
        <input type="text" name="id_cliente" id="id_cliente">
        <label for="">Nombre Cliente:</label>
        <input type="text" name="nombre_tomador" id="nombre_tomador">
        <label for="">Cobertura:</label>
        <input type="double" name="Cobertura" id="Cobertuta">
        <label for="">Forma de pago:</label>
        <input type="text" name="forma_de_pago" id="forma_de_pago">
        <label for="">Fecha del contarto:</label>
        <input type="date" name="f_contrato" id="f_contrato">
        <label for="">Fecha de renovacion:</label>
        <input type="date" name="f_renovacion" id="f_renovacon">
        <label for="">Vigente:</label>
        <input type="text" name="vigente" id="vigente">
        <label for="">Tipo:</label>
        <input type="text" name="tipo" id="tipo">
        <label for="">Prima:</label>
        <input type="text" name="prima" id="prima">
        <ul> Datos del Hogar</ul>
        <label for="">Nombre item a asegurar:</label>
        <input type="text" name="nombre_item" id="nombre_item">
        <label for="">Tipo del Item :</label>
        <input type="text" name="tipo_item" id="tipo_item">
        <label for="">Valor del Item :</label>
        <input type="double" name="valor_item" id="valor_item">
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

