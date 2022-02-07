<?php
include 'AñadirPropietario.php';
       //// Datos información banda//////
       $id_persona=$_POST['id_persona']; 
       $matricula=$_POST['matricula'];
    /////////////////////////////



       try{
              $base=new PDO("mysql:host=bihmjsqmjuzv93yzuyjb-mysql.services.clever-cloud.com:3306; dbname=bihmjsqmjuzv93yzuyjb" ,"u6zp5irrvsbyntyd","YItp7ofnGTt8NbLiifkD");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if( strlen($_POST['id_persona'])>=1 
              && strlen($_POST['matricula'])>=1   ){


            /////Añade Banda salarial//////
              $sql="INSERT INTO posee ( id_persona, matricula) 
                     VALUES (:id_persona,:matricula)";
                     
              $resultado=$base->prepare($sql);
              $resultado->execute(array( ":id_persona"=>$id_persona,
                                        ":matricula"=>$matricula)); 
                ///////////////////////////

                                        
                     
                                        echo "Registrado correctamente";
                                   
                                   }else { echo "Error al registar";    
                                   }

                                    


       }catch(Exception $e){
              

              echo "mensaje error". $e->getMessage();
       }

       finally{
              $base=null;}
            
    ?> 