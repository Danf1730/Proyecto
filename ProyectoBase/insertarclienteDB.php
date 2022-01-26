<?php
      include 'AñadirClientes.php'; 
       $name =$_POST['Nombre'];        $ape =$_POST['Apellido']; 
       $calle =$_POST['Calle'];        $ciudad =$_POST['Ciudad']; 
       $cel =$_POST['Telefono'];       $cedula =$_POST['Cedula'];
       $nan =$_POST['f_nacimineto'];   $prof =$_POST['prof']; 

       $sucursal =$_POST['id_sucursal']; $agente =$_POST['id_agente'];  
       $genero =$_POST['Genero'];   $prestamo  =$_POST['id_prestamo'];



       try{
              $base=new PDO("mysql:host=bcfwtrpmeo8khveqpqcu-mysql.services.clever-cloud.com:3306; dbname=bcfwtrpmeo8khveqpqcu" ,"uimjtch6xs9bod2v","fMfmvxQzfl8D6VWnmeCq");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if(strlen($_POST['Nombre'])>=1 && strlen($_POST['Apellido'])>=1 && strlen($_POST['Calle'])>=1 && strlen($_POST['Ciudad'])
        >=1 && strlen($_POST['Telefono'])>=1 && strlen($_POST['Cedula'])>=1 && strlen($_POST['f_nacimineto'])>=1 && strlen($_POST['prof'])
        >=1 && strlen($_POST['id_sucursal'])>=1 && strlen($_POST['id_agente'])>=1 && strlen($_POST['Genero'])
        >=1 && strlen($_POST['id_prestamo'])){

              $sql="INSERT INTO cliente (id_sucursal,id_agente_prestamo,id_asesor_personal

                                             , nombre, apellido, calle, ciudad, genero, fecha_nacimiento
                                           , telefono,cedula,profesion) 
                                   VALUES (:id_sucursal,:id_prestamo,:id_agente
                                          ,:Nombre,:Apellido,:Calle,:Ciudad ,:Genero
                                          ,:f_nacimineto,:Telefono,:Cedula,:prof)";
                     
              $resultado=$base->prepare($sql);
              $resultado->execute(array(":id_sucursal"=>$sucursal,
                                        ":id_prestamo"=>$prestamo,
                                        ":id_agente"=>$agente,
                                        ":Nombre"=>$name,
                                        ":Apellido"=>$ape,
                                        ":Calle"=>$calle,
                                        ":Ciudad"=>$ciudad,
                                        ":Genero"=>$genero,
                                        ":f_nacimineto"=>$nan,
                                        ":Telefono"=>$cel,
                                        ":Cedula"=>$cedula,
                                        ":prof"=>$prof));

                                        echo "Registrado correctamente";
                                        
                                    }else { echo "vacio";}
                                  
       }catch(Exception $e){
             echo "mensaje error". $e->getMessage();
       }

       finally{
              $base=null;}
            
    ?>       