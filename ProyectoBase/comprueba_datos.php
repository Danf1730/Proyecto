<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio sesión</title>
    
</head>

<body>

<?php 

try{
     $base=new PDO("mysql:host=localhost; dbname=proyectobase" ,"root","");
     $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql="SELECT *FROM login WHERE usuario=:login AND clave=:clave";
     $resultado=$base->prepare($sql);
     $login=htmlentities(addslashes($_POST["usuario"]));
     $passwor=htmlentities(addslashes($_POST["clave"]));
     $resultado->bindValue(":login",$login);
     $resultado->bindValue(":clave",$passwor);
     $resultado->execute();
     $numero_registro=$resultado->rowCount();
     if ($numero_registro!=0){
        echo "<h2>buenas 20</h2>";
     }else{
        echo "<h2>buenas</h2>";
     }

}catch(Exception $e){
    die("errro:" . $e->getMessage());
}

?>

</body>
</html>