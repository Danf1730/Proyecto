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

<nav class="navbar navbar-light" style="background-color: #2196F3;">
        <div class="container-fluid col-md-11">
          <h1 class="navbar-brand text-light p-1 fs-3">Aseguradora UCAB Continental</h1>
		  	<img src="img/Logo_UCAB_2.png" alt="" width="145" height="45">
        
        </div>
</nav>

<body>

    <div class="container mt-3">
    <div class="alert alert-primary" role="alert">
    Lista de los agentes que han realizado contratos de las pólizas y en que fecha. 
    La información es necesaria para el pago de comisiones y carteras.
    </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Cédula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Fecha póliza</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $host="bihmjsqmjuzv93yzuyjb-mysql.services.clever-cloud.com";
                    $database="bihmjsqmjuzv93yzuyjb";
                    $user="u6zp5irrvsbyntyd";
                    $password="YItp7ofnGTt8NbLiifkD";
                    $conexion = mysqli_connect($host, $user, $password, $database);
                    $query = "SELECT P.NombPersona, P.cedula, A.Direc_Agente, CV.f_contrato
                              FROM persona AS P, agente AS A, contrata_vehiculo AS CV, contrata_vida AS CVI, contrata_inmueble AS CI
                              where P.Tipo_persona='AGENTE'
                              AND (A.id_agente in (
                                                  SELECT distinct CV.id_agente FROM contrata_vehiculo
                                                  where (A.id_agente=CV.id_agente)
                                                )
                              or A.id_agente in (
                                                  SELECT distinct CVI.id_agente FROM contrata_vida
                                                  where (A.id_agente=CVI.id_agente)
                                                )
                              or A.id_agente in (
                                                  SELECT distinct CI.id_agente FROM contrata_inmueble
                                                  where (A.id_agente=CI.id_agente)
                                                ))
                                                group by P.cedula ";



                    $resultado = mysqli_query($conexion,$query);
                    $indice = 0;
                    while($fila=mysqli_fetch_row($resultado)){
                        echo "<th scope='row'>" ;
                        echo $fila[1] . "</td><td>";
                        echo $fila[0]. "</td><td>";
                        echo $fila[2]. "</td><td>";
                        echo $fila[3] . "</td>";
                        echo "</tr>";
                        echo "</br>";
                        echo "</br>";
                    }
           
                ?>
                </tbody>
        </table>
    </div>

    <nav class="navbar bottom navbar-light mt-5" style="background-color: #2196F3;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> </a>
	        <nav aria-label="Page navigation example">
  		        <ul class="pagination justify-content-end">
    		        <li class="page-item"><a class="page-link" href="ReportePoliza.php">Regresar</a></li>
  		        </ul>
	        </nav>
        </div>
    </nav>
    
</body>
</html>