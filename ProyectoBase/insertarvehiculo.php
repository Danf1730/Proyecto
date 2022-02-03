<?php
      include 'Vehiculo.php';
       //// Datos Vehiculo//////
       $matricula=$_POST['matricula']; 
       $marca=$_POST['marca'];
       $modelo =$_POST['modelo']; 
       $annio =$_POST['annio']; 
       $id_categoria=$_POST['id_categoria']; 
       $id_tipo_cobertura=$_POST['id_tipo_cobertura']; 
       /////////////////////////
         


       try{
              $base=new PDO("mysql:host=bihmjsqmjuzv93yzuyjb-mysql.services.clever-cloud.com:3306; dbname=bihmjsqmjuzv93yzuyjb" ,"u6zp5irrvsbyntyd","YItp7ofnGTt8NbLiifkD");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if(strlen($_POST['matricula'])>=1 
              && strlen($_POST['marca'])>=1 
              && strlen($_POST['modelo'])>=1 
              && strlen($_POST['annio'])>=1 
              && strlen($_POST['id_categoria'])>=1 
              && strlen($_POST['id_tipo_cobertura'])>=1 
              
              ){
       //////////// Datos Poliza(contrato)////////////////
              $sql="INSERT INTO vehiculo(matricula, marca, modelo, annio, id_categoria, id_tipo_cobertura) 
                    VALUES (:matricula,:marca,:modelo,:annio,:id_categoria,:id_tipo_cobertura)";
                     
              $resultado=$base->prepare($sql);
              $resultado->execute(array(":matricula"=>$matricula,
                                        ":marca"=>$marca,
                                        ":modelo"=>$modelo,
                                        ":annio"=>$annio,
                                        ":id_categoria"=>$id_categoria,
                                        ":id_tipo_cobertura"=>$id_tipo_cobertura, ));
        //////////////////////////////////////////////
       
     

                                        echo "Registrado con exito:";  
                                   }else { echo "Error al registar";   
                                   }

                                   
                                   
                                    


       }catch(Exception $e){
       
              echo "mensaje error". $e->getMessage();
              echo "----linea error". $e->getLine();
       }

       finally{
              $base=null;
              $base2=null;}
            
    ?>    