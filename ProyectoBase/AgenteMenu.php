<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aseguradora UCAB Contineltal - agente</title>
	<link rel="stylesheet" type="text/css" href="style_proyecto/Menus.css" style="text-decoration:none">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<nav class="navbar navbar-light" style="background-color: #2196F3;">
        <div class="container-fluid col-md-11">
          <h1 class="navbar-brand text-light p-1 fs-3">Aseguradora UCAB Continental</h1>
			  <nav aria-label="Page navigation example">
  				<ul class="pagination justify-content-end">
    				<li class="page-item"><a class="page-link" href="Sesion.php">Iniciar sesion</a></li>
  				</ul>
			</nav>
        </div>
</nav>

<nav class="navbar fixed-bottom navbar-light" style="background-color: #2196F3;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> </a>
  </div>
</nav>

<body>

	<div class="row mt-5">

		<div class="col-3 col-s-3 menu mt-5 ml-5">
			<ul>
                <li>Seguros/Poliza
                    <ul>
						<a href="AgenteVida.php" style="text-decoration:none"><li>Vida</a></li>
						<a href="AgenteHogar.php" style="text-decoration:none"><li>Hogar</a></li>
						<a href="AgenteVehiculo.php" style="text-decoration:none"><li>Vehiculo</a></li>
                    </ul>
                </li>
                <li>Clientes
                    <ul>
						<a href="#" style="text-decoration:none"><li>Consultar</a></li>
						<a href="AñadirClientes.php" style="text-decoration:none"><li>Añadir</a></li>
                    </ul>
                </li>
				 <a href="AñadirPersona.php" style="text-decoration:none"><li>Persona adicional accidentes/beneficiario</li></a>
                <a href="Solicitudes.php" style="text-decoration:none"><li>Solicitudes</a></li>
				<li>Accidentes y multas
                    <ul> 
						<a href="#" style="text-decoration:none"><li>Consultar Accidente</a></li>
						<a href="AñadirAccidente.php" style="text-decoration:none"><li>Añadir Accidente</a></li>
						<a href="#" style="text-decoration:none"><li>Consultar Multa</a></li>
                        <a href="AñadirMulta" style="text-decoration:none"><li>Añadir Multa </li></a>
                    </ul>
                </li> 
				<li>Reportes
                <ul>
						<a href="ReporteVehiculo.php" style="text-decoration:none"><li>Vehiculo</a></li>
						<a href="ReporteVida.php" style="text-decoration:none"><li>Vida</a></li>
						<a href="ReportePoliza.php" style="text-decoration:none"><li>Sucursales y Polizas</a></li>
                    </ul>
                </li>
                
			</ul>
		</div>
	
		<div class="col-6 col-s-9 mt-5 ml-4">
			
			<div class="mt-5" align="center"> <img class="mt-5" src="img/Logo_UCAB_2.png" alt="" width="600" height="200"> </div>
			
		</div>
		
	</div>
    
</body>
</html>