<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio sesión</title>
    
</head>

<body>

<?php 

$name=$_GET["Nombre"];
$ape=$_GET["Apellido"];
$cal=$_GET["Calle"];
$cid=$_GET["Ciudad"];
$tel=$_GET["Telefono"];
$cel=$_GET["Cedula"];
$nac=$_GET["f_nacimiento"];
$idc=$_GET["id_cliente"];
$ids=$_GET["id_sucursal"];
$ida=$_GET["id_agente"];
require("datos_conexion.php");



?>

</body>
</html>