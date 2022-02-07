<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reportes seguros y polizas</title>
	<link rel="stylesheet" type="text/css" href="style_proyecto/Menus.css" style="text-decoration:none">
	
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
    Sucursales donde viven clientes que tienen más de 5 pólizas de cualquier tipo.
    </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nombre Sucursal</th>
                <th scope="col">Ciudad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $host="bihmjsqmjuzv93yzuyjb-mysql.services.clever-cloud.com";
                    $database="bihmjsqmjuzv93yzuyjb";
                    $user="u6zp5irrvsbyntyd";
                    $password="YItp7ofnGTt8NbLiifkD";
                    $conexion = mysqli_connect($host, $user, $password, $database);
                    // $query = "SELECT C.nb_ciudad ,S.nb_sucursal, S.id_sucursal , P.id_poliza
                    // FROM ciudad AS C ,sucursal AS S, sucursal AS E , cliente AS L, titular AS P, poliza
                    // WHERE (C.id_ciudad=S.id_ciudad) AND (S.id_sucursal=E.id_sucursal) AND 
                    //        (E.id_empleado=L.id_asesor_personal) AND (L.id_cliente=P.id_cliente) 
                    //        HAVING COUNT(P.id_poliza)>5";
<<<<<<< HEAD


                    $query = "SELECT S.nb_sucursal, C.nb_ciudad 
                    FROM sucursal AS sucursal, ciudad AS C,
                    where (S.id_ciudad=C.id_ciudad) 
                    -- AND (S.id_sucursal=cliente.id_sucursal)
                    -- AND (cliente.id_cliente=titular.id_cliente) HAVING COUNT(titular.nro_poliza)>5
                    ";
=======

>>>>>>> main


                    $resultado = mysqli_query($conexion,$query);
                    while($fila=mysqli_fetch_row($resultado)){
                        echo "<tr>";
                        echo "<th scope='row'>";
                        echo $fila[7] . "</td><td>";
                        echo $fila[6] . "</td><td>";
                        echo "</tr>";
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