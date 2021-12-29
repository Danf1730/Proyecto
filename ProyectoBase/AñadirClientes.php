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
    <form>
        <ul>Añadir Clientes</ul>
        <ul>Ingrese los siguientes datos de cliente</ul>
        <label for="">Nombre:</label>
        <input type="text" name="Cnombre">
        <label for="">Apellido:</label>
        <input type="text" name="Capellido">
        <label for="">Edad:</label>
        <input type="text" name="Cedad">
        <ul></ul>
        <label for="">Calle:</label>
        <input type="text" name="Ccalle">
        <label for="">Ciudad:</label>
        <input type="text" name="Ciudad">
        <ul></ul>
        <label for="">Nº de Contacto:</label>
        <input type="string" name="Ctelefono">
        <label for="">Cédula de identidad:</label>
        <input type="text" name="Ccedula">
        <input type="submit" name="Csubmit">
</form>
	
	<div class="footer">
	<p> <a href="Inicio.php" style="float:right">Regresar</a> </p>
	</div>
    
</body>
</html>