<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reportes seguros y polizas</title>
	<link rel="stylesheet" type="text/css" href="style_proyecto/Menus.css" style="text-decoration:none">
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-primary">
        <div class="container-fluid col-md-11">
          <h1 class="navbar-brand text-light p-1 fs-3">Aseguradora UCAB Continental</h1>
		  	<img src="img/Logo_UCAB_2.png" alt="" width="145" height="45">
        
        </div>
</nav>
    <div class="container">
    <div class="alert alert-primary" role="alert">
    sucursales donde viven usuarios que tengas más de 5 pólizas de cualquier tipo.
    </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Indice</th>
                <th scope="col">ID Sucursal</th>
                <th scope="col">Nombre Sucursal</th>
                <th scope="col">Ciudad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $host="bcfwtrpmeo8khveqpqcu-mysql.services.clever-cloud.com";
                    $database="bcfwtrpmeo8khveqpqcu";
                    $user="uimjtch6xs9bod2v";
                    $password="fMfmvxQzfl8D6VWnmeCq";
                    $conexion = mysqli_connect($host, $user, $password, $database);
                    $query = "SELECT C.nb_ciudad ,S.nombre, S.id_sucursal , P.id_poliza
                    FROM ciudad AS C ,sucursal AS S, empleado AS E , cliente AS L, propietario_poliza AS P
                    WHERE (C.id_ciudad=S.id_ciudad) AND (S.id_sucursal=E.id_sucursal) AND 
                           (E.id_empleado=L.id_asesor_personal) AND (L.id_cliente=P.id_cliente) 
                           HAVING COUNT(P.id_poliza)>5";


                    $resultado = mysqli_query($conexion,$query);
                    $indice = 0;
                    while($fila=mysqli_fetch_row($resultado)){
                        echo "<tr>";
                        echo "<th scope='row'>" .++$indice."</th><td>";
                        echo $fila[2] . "</td><td>";
                        echo $fila[1]. "</td><td>";
                        echo $fila[0]. "</td><td>";
                        echo "</tr>";
                    }
           
                ?>
                </tbody>
        </table>
    </div>
        </br>
    
</body>
</html>