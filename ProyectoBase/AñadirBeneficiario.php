<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir Beneficiario Poliza</title>
	<link rel="stylesheet" type="text/css" href="style_proyecto/añadir.css">
</head>

<body>
	<div class="cabeza">
        <h1> Aseguradora UCAB Continental </h1>
	 </div>
		
        
     <form action="insertarbeneficiarioDB.php" method="POST" >
        <ul>Ingrese los siguientes datos de polizaq beneficiario</ul>
        <ul>Importante: Añadir primero informacion de persona adicional</ul>
      

        <label for="">id Beneficiario:</label>
        <input type="text" name="id_persona" id="id_persona"> 
        <label for="">id Benefactor:</label>
        <input type="text" name="id_persona_beneficiario" id="id_persona_beneficiario">
        <label for="">id Poliza:</label>
        <input type="text" name="id_poliza" id="id_poliza">
        <input type="submit" name="añadir">

    </form>
	
	<div class="footer">
	<p> <a href="MenuCliente.php" style="float:right">Regresar</a> </p>
	</div>
    
</body>
</html>