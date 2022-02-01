<?php
include 'AñadirTrabaja.php';
       //// Datos información Trabajador//////
       $empleado=$_POST['id_empleado']; 
       $banda=$_POST['id_banda']; 
       $sucursal=$_POST['id_sucursal'];
       $fecha=$_POST['f_inicio_sucursal']; 
       $salario=$_POST['acumulado_salario'];
       /////////////////////////



       try{
              $base=new PDO("mysql:host=bihmjsqmjuzv93yzuyjb-mysql.services.clever-cloud.com:3306; dbname=bihmjsqmjuzv93yzuyjb" ,"u6zp5irrvsbyntyd","YItp7ofnGTt8NbLiifkD");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if( strlen($_POST['id_banda'])>=1  
              && strlen($_POST['id_empleado'])>=1 
              && strlen($_POST['id_sucursal'])>=1 
              && strlen($_POST['f_inicio_sucursal'])>=1 
              && strlen($_POST['acumulado_salario'])>=1 ){


                ////AÑADE TRABAJDOR ///////
                $sql="INSERT INTO trabaja(id_empleado, id_sucursal, id_banda ,f_inicio_sucursal, acumulado_salario) 
                VALUES (:id_empleado,:id_sucursal,:id_banda,:f_inicio_sucursal,:acumulado_salario)";
                
         $resultado=$base->prepare($sql);
         $resultado->execute(array( ":id_empleado"=>$empleado,
                                   ":id_sucursal"=>$sucursal,
                                   ":id_banda"=>$banda,
                                   ":f_inicio_sucursal"=>$fecha,
                                   ":acumulado_salario"=>$salario)); 

                                        
                     
                                        echo "Registrado correctamente";
                                   
                                   }else { echo "Error al registar";    
                                   }

                                    


       }catch(Exception $e){
              

              echo "mensaje error". $e->getMessage();
       }

       finally{
              $base=null;}
            
    ?>  