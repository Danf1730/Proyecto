<?php
       include 'AñadirAccidente.php';
       $accidente =$_POST['id_accidente'];         
       $matricula =$_POST['matricula']; 
       $f_multa =$_POST['f_multa']; 
       $h_multa =$_POST['h_multa'];        
       $tipo=$_POST['tipo'];       
       $lugar =$_POST['lugar'];
       $cliente =$_POST['id_persona'];   


       try{
              $base=new PDO("mysql:host=bihmjsqmjuzv93yzuyjb-mysql.services.clever-cloud.com:3306; dbname=bihmjsqmjuzv93yzuyjb" ,"u6zp5irrvsbyntyd","YItp7ofnGTt8NbLiifkD");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if(strlen($_POST['id_accidente'])>=1 && strlen($_POST['matricula'])>=1 
              && strlen($_POST['f_multa'])>=1 && strlen($_POST['h_multa'])>=1
              && strlen($_POST['tipo'])>=1 && strlen($_POST['lugar'])>=1
              && strlen($_POST['id_persona'])>=1){

              $sql="INSERT INTO accidente(nro_referenciaAcc, f_acc, lugar_acc, hora_acc, id_categoria)
                   VALUES (:id_accidente,:f_multa,:lugar,:h_multa,:tipo)";
                     
              $resultado=$base->prepare($sql);
              $resultado->execute(array(":id_accidente"=>$accidente,
                                        ":h_multa"=>$h_multa,
                                        ":f_multa"=>$f_multa,
                                        ":lugar"=>$lugar,
                                        ":tipo"=>$tipo));

               $sql="INSERT INTO involucra (nro_referenciaAcc, matricula, id_persona) 
                     VALUES (:id_accidente,:matricula,:id_persona)";
                                          
               $resultado=$base->prepare($sql);
                $resultado->execute(array(":id_accidente"=>$accidente,
                                          ":matricula"=>$matricula,
                                          ":id_persona"=>$cliente));

                                        echo "Registrado correctamente";
                                        
                                    }else { echo "vacio";
                                        
                                        
                                        }
                                  
       }catch(Exception $e){

              echo "mensaje error". $e->getMessage();
       }

       finally{
              $base=null;}
            
    ?> 