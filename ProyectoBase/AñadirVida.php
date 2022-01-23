<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir Vida</title>
	<link rel="stylesheet" type="text/css" href="style_proyecto/añadir.css">
	<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
</head>

<body>
	<div class="cabeza">
		<h1>Aseguradora UCAB Continental </h1>
	</div>
    <form action="insertarpolizaVidaBD.php" method="POST">
        <ul>Añadir Poliza de vida</ul>
        <ul>Ingrese los siguientes datos</ul>
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
        <ul>Datos de Vida</ul>
        <label for="">Edad cliene:</label>
        <input type="date" name="edad_cliente" id="edad_cliente">
        <label for="">Profesion:</label>
        <input type="text" name="profesion_cliente" id="profesion_cliente">
        <label for="">Cobertura economica:</label>
        <input type="double" name="Cobertura2" id="Cobertuta2">
        <input type="submit" name="añadir">
</form>
	
	<div class="footer">
	<p> <a href="AgenteMenu.php" style="float:right">Regresar</a> </p>
	</div>
    
</body>
</html>