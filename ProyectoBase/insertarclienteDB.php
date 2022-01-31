<?php
      include 'AñadirClientes.php'; 
       $cedula=$_POST['cedula'];        $nombre=$_POST['NombPersona']; 
       $telefono=$_POST['NumTlfPersona'];        $sucursal =$_POST['id_sucursal']; 
       $apellido =$_POST['apellido'];       $Direc =$_POST['Direc_Cliente'];
       $calle =$_POST['calle'];   $ciudad =$_POST['ciudad']; 
       $genero =$_POST['genero']; $nacimiento =$_POST['fecha_nacimiento'];  
       $profesion=$_POST['profesion'];

     
       try{

           

            $base=new PDO("mysql:host=bihmjsqmjuzv93yzuyjb-mysql.services.clever-cloud.com:3306; dbname=bihmjsqmjuzv93yzuyjb" ,"u6zp5irrvsbyntyd","YItp7ofnGTt8NbLiifkD");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if(strlen($_POST['cedula'])>=1 && strlen($_POST['NombPersona'])>=1 && strlen($_POST['NumTlfPersona'])>=1 && strlen($_POST['id_sucursal'])
        >=1 && strlen($_POST['apellido'])>=1 && strlen($_POST['Direc_Cliente'])>=1 && strlen($_POST['calle'])>=1 && strlen($_POST['ciudad'])
        >=1 && strlen($_POST['genero'])>=1 && strlen($_POST['fecha_nacimiento'])>=1 && strlen($_POST['profesion'])>=1){
            
            $host="bihmjsqmjuzv93yzuyjb-mysql.services.clever-cloud.com";
            $database="bihmjsqmjuzv93yzuyjb";
            $user="u6zp5irrvsbyntyd";
            $password="YItp7ofnGTt8NbLiifkD";
            $conexion = mysqli_connect($host, $user, $password, $database);
           $query = "SELECT P.id_persona FROM persona as P
            where P.cedula = $_POST[cedula]  ";
            $resultado2 = mysqli_query($conexion,$query);
     
               $_POST['id'] =$resultado2;
               $resultado3= $_POST['id'];
     
           

              $sql="INSERT INTO cliente(id_persona, cedula, NombPersona, NumTlfPersona, id_cliente, id_sucursal, apellido, Direc_Cliente, calle, ciudad, genero, fecha_nacimiento, profesion)
               VALUES (:id,:cedula,:NombPersona,:NumTlfPersona,:id,:id_sucursal,:apellido,:Direc_Cliente,:calle,:ciudad,:genero,:fecha_nacimiento,:profesion)";
                     
              $resultado=$base->prepare($sql);
              $resultado->execute(array(":id"=>$resultado2,
                                        ":cedula"=>$cedula,
                                        ":NombPersona"=>$nombre,
                                        ":NumTlfPersona"=>$telefono,
                                        ":id"=>$resultado3,
                                        ":id_sucursal"=>$sucursal,
                                        ":apellido"=>$apellido,
                                        ":Direc_Cliente"=>$Direc,
                                        ":calle"=>$calle,
                                        ":ciudad"=>$ciudad,
                                        ":genero"=>$genero,
                                        ":fecha_nacimiento"=>$nacimiento,
                                        ":profesion"=>$profesion));

                                        echo "Registrado correctamente";
                                        
                                    }else { echo "vacio";}
                                  
       }catch(Exception $e){
             echo "mensaje error". $e->getMessage();
             echo "linea". $e->getLine();
       }

       finally{
              $base=null;}
            
    ?>       