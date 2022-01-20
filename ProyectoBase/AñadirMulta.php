<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir Multa</title>
	<link rel="stylesheet" type="text/css" href="style_proyecto/añadir.css">
	<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
</head>

<body>
	<div class="cabeza">
		<h1>Aseguradora UCAB Continental </h1>
	</div>
    <form action="insertarMultaBD.php" method="POST">
        <ul>Añadir Multa</ul>
        <ul>Ingrese los siguientes datos</ul>
        <label for="">ID multa:</label>
        <input type="text" name="id_multa" id="id_multa">
        <label for="">ID vehiculo:</label>
        <input type="text" name="id_vehiculo" id="id_vehiculo">
        <label for="">ID Conductor:</label>
        <input type="text" name="id_cliente_conductor" id="id_cliente_conductor">
        <label for="">Importe:</label>
        <input type="text" name="importe" id="importe"> 
        <label for="">Fecha multa:</label>
        <input type="date" name="f_multa" id="f_multa">
        <label for="">Lugar:</label>
        <input type="text" name="lugar" id="lugar">
        <label for="">Gravedad:</label>
        <input type="text" name="nivel_gravedad" id="nivel_gravedad">
        <input type="submit" name="Asubmit">
</form>
	
	<div class="footer">
	<p> <a href="AgenteMenu.php" style="float:right">Regresar</a> </p>
	</div>
    
</body>
</html>