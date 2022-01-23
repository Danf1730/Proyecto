<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir Persona Adicional </title>
	<link rel="stylesheet" type="text/css" href="style_proyecto/añadir.css">
</head>

<body>
	<div class="cabeza">
        <h1> Aseguradora UCAB Continental </h1>
	 </div>
		
        
     <form action="insertarbeneficiarioDB.php" method="POST" >
        <ul>Ingrese los siguientes datos de persona adiciaonal </ul>
      

        <label for="">id Beneficiario:</label>
        <input type="text" name="id_persona" id="id_persona"> 
        <label for="">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <label for="">Apellido:</label>
        <input type="text" name="apellido" id="apellido">
        <label for="">Cédula de identidad:</label>
        <input type="text" name="cedula" id="cedula">

        <label for="">Direccion:</label>
        <input type="text" name="direccion" id="direccion">
        
        <label for="">Ciudad:</label>
        <input type="text" name="ciudad" id="ciudad">
        <label for="">Nº de Contacto:</label>
        <input type="string" name="telefono" id="telefono">
        <input type="submit" name="añadir">

    </form>
	
	<div class="footer">
	<p> <a href="MenuCliente.php" style="float:right">Regresar</a> </p>
	</div>
    
</body>
</html>