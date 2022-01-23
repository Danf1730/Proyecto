<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reportes seguros y polizas</title>
	<link rel="stylesheet" type="text/css" href="style_proyecto/Menus.css" style="text-decoration:none">
	<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-primary">
        <div class="container-fluid col-md-11">
          <h1 class="navbar-brand text-light p-1 fs-3">Aseguradora Ucab Continental</h1>
          <!--<img src="https://www.ucab.edu.ve/wp-content/uploads/sites/2/2019/04/Logo_UCAB_2.png" width="200"/> --> 
        
        </div>
</nav>
    <div class="container">
    <div class="alert alert-primary" role="alert">
    Listar los datos de todas las pólizas por sucursal ordenadas cronológicamente
por la fecha de la póliza..


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
                    $query = "SELECT id_sucursal FROM sucursal
                    ORDER BY id_sucursal WHERE id_sucursal IN(SELECT id_sucursal FROM empleado
                                                              WHERE id_empleado IN (SELECT id_poliza, f_renovacion FROM poliza
                                                                                    ORDER BY f_renovacion ))";
                    $resultado = mysqli_query($conexion,$query);
                    $indice = 0;
                    while($fila=mysqli_fetch_row($resultado)){
                        echo "<tr>";
                        echo "<th scope='row'>" .++$indice."</th><td>";
                        echo $fila[4] . "</td><td>";
                        echo $fila[5]. "</td><td>";
                        echo $fila[6]. "</td><td>";
                        echo "</tr>";
                        echo "</br>";
                        echo "</br>";
                    }
           
                ?>
                </tbody>
        </table>
    </div>
        </br>
    
</body>
</html>