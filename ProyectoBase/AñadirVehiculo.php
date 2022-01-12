<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir Vehiculo</title>
	<link rel="stylesheet" type="text/css" href="style_proyecto/añadir.css">
	<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
</head>

<body>
	<div class="cabeza">
		<h1>Aseguradora UCAB Continental </h1>
	</div>
    <form>
        <ul>Añadir Poliza de Vehiculo</ul>
        <ul>Ingrese los siguientes datos</ul>
        <label for="">Titular:</label>
        <input type="text" name="Vtitular">
        <label for="">Matricula:</label>
        <input type="text" name="Matricula">
        <label for="">Marca:</label>
        <input type="text" name="Marca">
        <label for="">Modelos:</label>
        <input type="text" name="Modelos">
        <label for="">Categoria:</label>
        <input type="text" name="Categoria">
        <label for="">Años del Vehiculo:</label>
        <input type="string" name="Años">
        <label for="">Edad del contuctor:</label>
        <input type="text" name="Edad">
        <label for="">Prima:</label>
        <input type="text" name="Vprima">
        <label for="">Fecha del pago:</label>
        <input type="date" name="Fpago">
        <label for="">Cobertura:</label>
        <input type="text" name="Vcobertura">
        <label for="">Recargos:</label>
        <input type="text" name="Recargo">
        <label for="">Descuentos:</label>
        <input type="text" name="Descuentos">
        <input type="submit" name="Asubmit">
</form>
	
	<div class="footer">
	<p> <a href="Inicio.php" style="float:right">Regresar</a> </p>
	</div>
    
</body>
</html>