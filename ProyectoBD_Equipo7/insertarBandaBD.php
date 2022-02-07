<?php
include 'AñadirBanda.php';
       //// Datos información banda//////
       $min=$_POST['Banda_Min']; 
       $max=$_POST['Banda_Max'];
    /////////////////////////////



       try{
              $base=new PDO("mysql:host=bihmjsqmjuzv93yzuyjb-mysql.services.clever-cloud.com:3306; dbname=bihmjsqmjuzv93yzuyjb" ,"u6zp5irrvsbyntyd","YItp7ofnGTt8NbLiifkD");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if( strlen($_POST['Banda_Min'])>=1 
              && strlen($_POST['Banda_Max'])>=1   ){


            /////Añade Banda salarial//////
              $sql="INSERT INTO banda_salarial( Banda_Min, Banda_Max) 
                     VALUES (:Banda_Min,:Banda_Max)";
                     
              $resultado=$base->prepare($sql);
              $resultado->execute(array( ":Banda_Min"=>$min,
                                        ":Banda_Max"=>$max)); 
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