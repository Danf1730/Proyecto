
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
          <h1 class="navbar-brand text-light p-1 fs-3">Aseguradora UCAB Continental</h1>
          <!--<img src="https://www.ucab.edu.ve/wp-content/uploads/sites/2/2019/04/Logo_UCAB_2.png" width="200"/> --> 
        
        </div>
</nav>

    <div class="container">
    <div class="alert alert-primary" role="alert">
    Liste toda la información del asegurado que tengan en su nombre la cadena
    “Jos”, que tengan una suscripción de póliza activa de vehículo y cuyo vehículo
    haya sufrido al menos 2 accidentes.

    </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Indice</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Calle</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Genero</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Telefono</th>
                <th scope="col">Cedula</th>
                <th scope="col">Profesion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $host="bcfwtrpmeo8khveqpqcu-mysql.services.clever-cloud.com";
                    $database="bcfwtrpmeo8khveqpqcu";
                    $user="uimjtch6xs9bod2v";
                    $password="fMfmvxQzfl8D6VWnmeCq";

                    $conexion = mysqli_connect($host, $user, $password, $database);

                    $query = "SELECT * FROM cliente 
                    where nombre like '%Jos%' 
                    and id_cliente in (
                                        SELECT id_cliente from propietario_poliza 
                                        where id_poliza in (
                                                            select id_poliza from poliza 
                                                            where vigente = 'Si' 
                                                            and id_poliza in(
                                                                            SELECT id_poliza from poliza_vehiculo
                                                                            )

                                                            )
                                        )
                    and id_cliente in (
                    SELECT id_cliente from vehiculo
                    where id_vehiculo in (
                                         SELECT id_vehiculo from involucrado_vehiculo
                                         )
                    )";

                    $resultado = mysqli_query($conexion,$query);

                    $indice = 0;

                    while($fila=mysqli_fetch_row($resultado)){
                        echo "<tr>";
                        echo "<th scope='row'>" .++$indice."</th><td>";
                        echo $fila[4] . "</td><td>";
                        echo $fila[5]. "</td><td>";
                        echo $fila[6]. "</td><td>";
                        echo $fila[7] . "</td><td>";
                        echo $fila[8] . "</td><td>";
                        echo $fila[9] . "</td><td>";
                        echo $fila[10] . "</td><td>";
                        echo $fila[11] . "</td><td>";
                        echo $fila[12] . "</td>";

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