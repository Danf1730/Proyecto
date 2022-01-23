<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir Accidente</title>
	<link rel="stylesheet" type="text/css" href="style_proyecto/añadir.css">
	<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
</head>

<body>
	<div class="cabeza">
		<h1>Aseguradora UCAB Continental </h1>
	</div>
    <form>
        <ul>Añadir Accidente</ul>
        <ul>Ingrese los siguientes datos</ul>
        <label for="">Fecha y Hora del accidente:</label>
        <input type="datetime-local" name="Fecha">
        <label for="">Lugar:</label>
        <input type="text" name="Lugar">
        <label for="">ID cliente incolucrado:</label>
        <input type="text" name="id_involucrado">
        <label for="">ID Vehiculo:</label>
        <input type="text" name="id_vehiculo">
        <label for="">ID persona  incolucrado:</label>
        <label for="">Importante: añadir primero en persona adicional:</label>
        <input type="text" name="id_persona">
        <label for="">ID multa:</label>
        <label for="">Importante: añadir primero información de multa:</label>
        <input type="text" name="id_multa">
        <input type="submit" name="submit">

</form>
	<div class="footer">
	<p> <a href="AgenteMenu.php" style="float:right">Regresar</a> </p>
	</div>
    
</body>
</html>