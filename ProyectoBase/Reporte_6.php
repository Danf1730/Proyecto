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
<nav class="navbar navbar-light" style="background-color: #2196F3;">
        <div class="container-fluid col-md-11">
          <h1 class="navbar-brand text-light p-1 fs-3">Aseguradora UCAB Continental</h1>
		  	<img src="img/Logo_UCAB_2.png" alt="" width="145" height="45">
        
        </div>
</nav>
    <div class="container">
    <div class="alert alert-primary" role="alert">
    Se requiere conocer los datos y las pólizas de los asegurados que son titulares
    </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Indice</th>
                <th scope="col">ID Sucursal</th>
                <th scope="col">Nombre Sucursal</th>
                <th scope="col">ID cliente</th> 
                <th scope="col">Nombre Cliente</th>
                <th scope="col">ID Poliza</th>
                <th scope="col">Tipo Poliza</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $host="bcfwtrpmeo8khveqpqcu-mysql.services.clever-cloud.com";
                    $database="bcfwtrpmeo8khveqpqcu";
                    $user="uimjtch6xs9bod2v";
                    $password="fMfmvxQzfl8D6VWnmeCq";
                    $conexion = mysqli_connect($host, $user, $password, $database);
                    $query = "SELECT S.nombre, S.id_sucursal, C.id_cliente,Q.nombre_tomador,P.id_poliza , Q.tipo 
                    FROM sucursal AS S, empleado AS E , cliente AS C, propietario_poliza AS P , poliza AS Q
                    WHERE (S.id_sucursal=E.id_sucursal) AND (E.id_empleado=C.id_asesor_personal) AND (C.id_cliente=P.id_cliente) AND (P.id_poliza=Q.id_poliza) 
                    ";


                    $resultado = mysqli_query($conexion,$query);
                    $indice = 0;
                    while($fila=mysqli_fetch_row($resultado)){
                        echo "<tr>";
                        echo "<th scope='row'>" .++$indice."</th><td>";
                        echo $fila[1] . "</td><td>";
                        echo $fila[0]. "</td><td>";
                        echo $fila[2]. "</td><td>";
                        echo $fila[3] . "</td><td>";
                        echo $fila[4]. "</td><td>";
                        echo $fila[5]. "</td><td>";
                        echo "</tr>";
                    }
           
                ?>
                </tbody>
        </table>
    </div>
        </br>
    
</body>
</html>