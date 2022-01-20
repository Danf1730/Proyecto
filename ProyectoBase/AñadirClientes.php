<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir Cliente</title>
	<link rel="stylesheet" type="text/css" href="style_proyecto/añadir.css">
</head>

<body>
	<div class="cabeza">
        <h1> Aseguradora UCAB Continental </h1>
	 </div>
		
        
     <form action="insertarclienteDB.php" method="POST" >
        <ul>Ingrese los siguientes datos de cliente</ul>
      
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
        <input type="submit" name="añadir">

    </form>
	
	<div class="footer">
	<p> <a href="AgenteMenu.php" style="float:right">Regresar</a> </p>
	</div>
    
</body>
</html>