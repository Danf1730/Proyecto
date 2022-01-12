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
		<h1>Aseguradora UCAB Continental </h1>
	</div>
        
     <form method="POST" >
        <ul>Ingrese los siguientes datos de cliente</ul>
      
       <label for="">Nombre:</label>
        <input type="text" name="Nombre">
        <label for="">Apellido:</label>
        <input type="text" name="Apellido">
        <label for="">Calle:</label>
        <input type="text" name="Calle">
        <label for="">Ciudad:</label>
        <input type="text" name="Ciudad">
        <label for="">Nº de Contacto:</label>
        <input type="string" name="Telefono">
        <label for="">Cédula de identidad:</label>
        <input type="text" name="Cedula">
        <label for="">Genero:</label>
        <input type="text" name="Genero">
        <label for="">Fecha Nacimiento:</label>
        <input type="text" name="f_nacimineto">
        <label for="">Profesion:</label>
        <input type="text" name="prof">
        <label for="">id cliente:</label>
        <input type="text" name="id_cliente">
        <label for="">id sucursal registro:</label>
        <input type="text" name="id_sucursal">
        <label for="">id agente personal:</label>
        <input type="text" name="id_agente">
        <label for="">id agente prestamo:</label>
        <input type="text" name="id_prestamo">
        <input type="submit" name="añadir">

        <?php
       $con=new PDO("mysql:host=bcfwtrpmeo8khveqpqcu-mysql.services.clever-cloud.com:3306; dbname=bcfwtrpmeo8khveqpqcu" ,"uimjtch6xs9bod2v","fMfmvxQzfl8D6VWnmeCq");
       if(isset($_POST['añadir'])){
        if(strlen($_POST['Nombre'])>=1 && strlen($_POST['Apellido'])>=1 && strlen($_POST['Calle'])>=1 && strlen($_POST['Ciudad'])
        >=1 && strlen($_POST['Telefono'])>=1 && strlen($_POST['Cedula'])>=1 && strlen($_POST['f_nacimineto'])>=1 && strlen($_POST['prof'])
        >=1 && strlen($_POST['id_cliente'])>=1 && strlen($_POST['id_sucursal'])>=1 && strlen($_POST['id_agente'])>=1 && strlen($_POST['Genero'])){
            
            $name =$_POST['Nombre'];  $ape =$_POST['Apellido']; $calle =$_POST['Calle'];
            $ciudad =$_POST['Ciudad']; $cel =$_POST['Telefono']; $cedula =$_POST['Cedula'];
            $nan =$_POST['f_nacimineto']; $prof =$_POST['prof']; $cliente =$_POST['id_cliente'];
            $sucursal =$_POST['id_sucursal']; $agente =$_POST['id_agente']; $genero =$_POST['Genero'];
            $prestamo  =$_POST['id_prestamo'];
            
            $anadir=$con->prepare("INSERT INTO cliente (id_cliente, id_sucursal,id_agente_prestamo,id_asesor_personal
                                             , nombre, apellido, calle, ciudad, genero, fecha_nacimiento
                                           , telefono,cedula,profesion) 
                                   VALUES (:id_cliente,:id_sucursal,:id_prestamo,:id_agente
                                          ,:Nombre,:Apellido,:Calle,:Ciudad ,:Genero
                                          ,:f_nacimineto,:Telefono,:Cedula,:prof)");

            $anadir->bindParam(':id_cliente',$cliente);   $anadir->bindParam(':id_sucursal',$sucursal); 
            $anadir->bindParam(':id_prestamo',$prestamo); $anadir->bindParam(':id_agente',$agnete); 
            $anadir->bindParam(':Nombre',$name);  $anadir->bindParam(':Apellido',$ape); 
            $anadir->bindParam(':Calle',$calle); $anadir->bindParam(':Ciudad',$ciudad); 
            $anadir->bindParam(':Genero',$genero); $anadir->bindParam(':f_nacimineto',$nan); 
            $anadir->bindParam(':Telefono',$cel); $anadir->bindParam(':Cedula',$cedula); 
            $anadir->bindParam(':prof',$prof);                           
            
            if($anadir->execute()){

                echo "¡registrdo corectamente!";

            } else{
                
               echo "¡oh ocurrio un erro!";
            }
        }else{
            ?>
            <h3 >por favor rellene los campos requeridos </h3>
            <?php
        }

       }
     
    

    
        
        ?>



    </form>
	
	<div class="footer">
	<p> <a href="Inicio.php" style="float:right">Regresar</a> </p>
	</div>
    
</body>
</html>