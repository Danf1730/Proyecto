<?php
include 'AñadirAgentes.php';
       //// Datos información Agente//////
       $agente=$_POST['id_agente']; 
       $direc=$_POST['Direc_Agente'];
       $tipo=$_POST['Tipo_agente'];
       /////////////////////////
        //// Datos información personas//////
        $empleado=$_POST['id_agente']; 
        $inicio=$_POST['fecha_inicio_empresa'];;
        /////////////////////////



       try{
              $base=new PDO("mysql:host=bihmjsqmjuzv93yzuyjb-mysql.services.clever-cloud.com:3306; dbname=bihmjsqmjuzv93yzuyjb" ,"u6zp5irrvsbyntyd","YItp7ofnGTt8NbLiifkD");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if( strlen($_POST['id_agente'])>=1 
              && strlen($_POST['Direc_Agente'])>=1 
              && strlen($_POST['Tipo_agente'])>=1  ){


            /////Añade persona AGENTE//////
              $sql="INSERT INTO agente(id_agente , Direc_Agente , Tipo_agente )
                           VALUES (:id_agente,:Direc_Agente,:Tipo_agente)";
                     
              $resultado=$base->prepare($sql);
              $resultado->execute(array( ":id_agente"=>$agente,
                                        ":Direc_Agente"=>$direc,
                                        ":Tipo_agente"=>$tipo)); 
              /////Añade persona emplead//////
              $sql="INSERT INTO empleado(id_empleado ,fecha_inicio_empresa  )
                           VALUES (:id_agente,:fecha_inicio_empresa)";
                     
              $resultado=$base->prepare($sql);
              $resultado->execute(array( ":id_agente"=>$empleado,
                                        ":fecha_inicio_empresa"=>$inicio)); 
                     
                                        echo "Registrado correctamente";
                                   
                                   }else { echo "Error al registar";    
                                   }

                                    


       }catch(Exception $e){
              

              echo "mensaje error". $e->getMessage();
       }

       finally{
              $base=null;}
            
    ?>  