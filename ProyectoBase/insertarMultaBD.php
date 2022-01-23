<?php
       include 'AñadirMulta.php';
       $multa =$_POST['id_multa'];        
       $vehiculo =$_POST['id_vehiculo']; 
       $conductor =$_POST['id_cliente_conductor'];        
       $importe=$_POST['importe']; 
       $f_multa =$_POST['f_multa'];       
       $lugar =$_POST['lugar'];
       $gravedad =$_POST['nivel_gravedad'];   


       try{
              $base=new PDO("mysql:host=bcfwtrpmeo8khveqpqcu-mysql.services.clever-cloud.com:3306; dbname=bcfwtrpmeo8khveqpqcu" ,"uimjtch6xs9bod2v","fMfmvxQzfl8D6VWnmeCq");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if(strlen($_POST['id_multa'])>=1 && strlen($_POST['id_vehiculo'])>=1 
              && strlen($_POST['id_cliente_conductor'])>=1 && strlen($_POST['importe'])>=1
              && strlen($_POST['f_multa'])>=1 && strlen($_POST['lugar'])>=1
              && strlen($_POST['nivel_gravedad'])>=1){

              $sql="INSERT INTO multa(id_multa, id_vehiculo, id_cliente_conductor,
                                        importe, f_multa, lugar, nivel_gravedad) 
                          VALUES (:id_multa,:id_vehiculo,:id_cliente_conductor,:importe,
                                  :f_multa,:lugar,:nivel_gravedad)";
                     
              $resultado=$base->prepare($sql);
              $resultado->execute(array(":id_multa"=>$multa,
                                        ":id_vehiculo"=>$vehiculo,
                                        ":id_cliente_conductor"=>$conductor,
                                        ":importe"=>$importe,
                                        ":f_multa"=>$f_multa,
                                        ":lugar"=>$lugar,
                                        ":nivel_gravedad"=>$gravedad));

                                        echo "Registrado correctamente";
                                        
                                    }else { echo "vacio";
                                        
                                        
                                        }
                                  
       }catch(Exception $e){

              echo "mensaje error". $e->getMessage();
       }

       finally{
              $base=null;}
            
    ?> 