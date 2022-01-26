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
    Lista de los datos de todas las pólizas por sucursal 
    ordenadas cronológicamente por la fecha de la póliza..
    </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Indice</th>
                <th scope="col">ID Sucursal</th>
                <th scope="col">ID Poliza</th>
                <th scope="col">Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $host="bcfwtrpmeo8khveqpqcu-mysql.services.clever-cloud.com";
                    $database="bcfwtrpmeo8khveqpqcu";
                    $user="uimjtch6xs9bod2v";
                    $password="fMfmvxQzfl8D6VWnmeCq";
                    $conexion = mysqli_connect($host, $user, $password, $database);
                    $query = "SELECT P.id_poliza,P.f_contrato,S.id_sucursal
                    From sucursal AS S, poliza AS P , empleado AS E
                    WHERE (S.id_sucursal=E.id_sucursal) AND (E.id_empleado=P.id_empleado) 
                  order by S.id_sucursal ,P.f_contrato";


                    $resultado = mysqli_query($conexion,$query);
                    $indice = 0;
                    while($fila=mysqli_fetch_row($resultado)){
                        echo "<tr>";
                        echo "<th scope='row'>" .++$indice."</th><td>";
                        echo $fila[2] . "</td><td>";
                        echo $fila[0]. "</td><td>";
                        echo $fila[1]. "</td><td>";
                        echo "</tr>";
                    }
           
                ?>
                </tbody>
        </table>
    </div>
        </br>
    
</body>
</html>