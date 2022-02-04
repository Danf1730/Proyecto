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
    Datos de los asegurados con más de 2 pólizas de vehículo y por lo menos una póliza de salud.

    </div>
        <table class="table">
            <thead>
                <tr>
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
                    $host="bihmjsqmjuzv93yzuyjb-mysql.services.clever-cloud.com";
                    $database="bihmjsqmjuzv93yzuyjb";
                    $user="u6zp5irrvsbyntyd";
                    $password="YItp7ofnGTt8NbLiifkD";
                    $conexion = mysqli_connect($host, $user, $password, $database);
                    // $query = 



                    $resultado = mysqli_query($conexion,$query);
                    while($fila=mysqli_fetch_row($resultado)){
                        echo "<tr>";
                        echo "<th scope='row'>" ;
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