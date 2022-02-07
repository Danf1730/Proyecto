<?php
include 'AñadirPersona.php';
       //// Datos información personas//////
       $cedula=$_POST['cedula']; 
       $nombre=$_POST['NombPersona'];
       $telefono=$_POST['NumTlfPersona']; 
       $tipo=$_POST['Tipo_persona'];
       /////////////////////////



       try{
              $base=new PDO("mysql:host=bihmjsqmjuzv93yzuyjb-mysql.services.clever-cloud.com:3306; dbname=bihmjsqmjuzv93yzuyjb" ,"u6zp5irrvsbyntyd","YItp7ofnGTt8NbLiifkD");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if( strlen($_POST['cedula'])>=1 
              && strlen($_POST['NombPersona'])>=1 
              && strlen($_POST['NumTlfPersona'])>=1 
              && strlen($_POST['Tipo_persona'])>=1  ){


            /////Añade persona adicional//////
              $sql="INSERT INTO persona(cedula , NombPersona , NumTlfPersona , Tipo_persona )
                           VALUES (:cedula,:NombPersona,:NumTlfPersona,:Tipo_persona)";
                     
              $resultado=$base->prepare($sql);
              $resultado->execute(array( ":cedula"=>$cedula,
                                        ":NombPersona"=>$nombre,
                                        ":NumTlfPersona"=>$telefono,
                                        ":Tipo_persona"=>$tipo)); 
                     
                                        echo "Registrado correctamente";
                                   
                                   }else { echo "Error al registar";    
                                   }

                                    


       }catch(Exception $e){
              

              echo "mensaje error". $e->getMessage();
       }

       finally{
              $base=null;}
            
    ?>       