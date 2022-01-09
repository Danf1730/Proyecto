<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir Cliente</title>
	<link rel="stylesheet" type="text/css" href="style_proyecto/añadir.css">
	<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
</head>

<body>
	<div class="cabeza">
		<h1>Aseguradora UCAB Continental </h1>
	</div>
        
     <form name="form1" method="get" action="insertarcliente.php">
        <ul>Ingrese los siguientes datos de cliente</ul>
      
       <label for="">Nombre:</label>
        <input type="text" name="Nombre">
        <label for="">Apellido:</label>
        <input type="text" name="Apellido">
        <label for="">Calle:</label>
        <input type="text" name="Calle">
        <label for="">Ciudad:</label>
        <input type="text" name="Ciudad">
        <label for="">Nº de Contacto:</label>
        <input type="string" name="Telefono">
        <label for="">Cédula de identidad:</label>
        <input type="text" name="Cedula">
        <label for="">Genero:</label>
        <input type="text" name="Genero">
        <label for="">Fecha Nacimiento:</label>
        <input type="text" name="f_nacimineto">
        <label for="">id cliente:</label>
        <input type="text" name="id_cliente">
        <label for="">id sucursal:</label>
        <input type="text" name="id_sucursal">
        <label for="">id agente:</label>
        <input type="text" name="id_agente">
        <input type="submit" name="submit">

    </form>
	
	<div class="footer">
	<p> <a href="Inicio.php" style="float:right">Regresar</a> </p>
	</div>
    
</body>
</html>