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
        <label for="">Fecha:</label>
        <input type="text" name="Fecha">
        <label for="">Hora:</label>
        <input type="text" name="Hora">
        <label for="">Lugar:</label>
        <input type="text" name="Lugar">
        <label for="">Persona(s) involucrada(s):</label>
        <input type="text" name="Conductor">
        <label for="">Vehiculo(s) involucrado(s):</label>
        <input type="string" name="Ivehiculo">
        <input type="submit" name="Asubmit">
</form>
	<div class="footer">
	<p> <a href="AgenteMenu.php" style="float:right">Regresar</a> </p>
	</div>
    
</body>
</html>