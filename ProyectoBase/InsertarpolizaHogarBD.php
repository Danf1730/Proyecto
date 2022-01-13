<?php
       //// Datos Poliza//////
       $id_poliza=$_POST['id_poliza'];  
       $id_empleado=$_POST['id_empleado']; 
       $nombre =$_POST['nombre_tomador'];
       $cobertura=$_POST['Cobertura']; 
       $pago=$_POST['forma_de_pago']; 
       $contrato =$_POST['f_contrato'];
       $renovacion =$_POST['f_renovacion']; 
       $vigente=$_POST['vigente']; 
       $tipo =$_POST['tipo'];
       $prima =$_POST['prima']; 
       /////////////////////////
       //// Datos Hogar //////
       $id_poliza2=$_POST['id_poliza'];
       $nitem=$_POST['nombre_item'];
       $titem=$_POST['tipo_item'];
       $valor=$_POST['valor_item'];
       $prima2 =$_POST['prima']; 
       //////////////////////


       try{
              $base=new PDO("mysql:host=bcfwtrpmeo8khveqpqcu-mysql.services.clever-cloud.com:3306; dbname=bcfwtrpmeo8khveqpqcu" ,"uimjtch6xs9bod2v","fMfmvxQzfl8D6VWnmeCq");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if(strlen($_POST['id_poliza'])>=1 
              && strlen($_POST['id_empleado'])>=1 
              && strlen($_POST['nombre_tomador'])>=1 
              && strlen($_POST['Cobertura'])>=1 
              && strlen($_POST['forma_de_pago'])>=1 
              && strlen($_POST['f_contrato'])>=1 
              && strlen($_POST['f_renovacion'])>=1 
              && strlen($_POST['vigente'])>=1 
              && strlen($_POST['tipo'])>=1 
              && strlen($_POST['prima'])>=1){

              $sql="INSERT INTO  poliza (id_poliza,  
                                         id_empleado, 
                                         nombre_tomador,
                                         cobertura, 
                                         forma_de_pago, 
                                         f_contrato,
                                         f_Renovacion, 
                                         vigente, 
                                         tipo,
                                         prima) 
                                       
                    VALUES (:id_poliza,
                            :id_empleado,
                            :nombre_tomador,
                            :Cobertura,
                            :forma_de_pago,
                            :f_contrato,
                            :f_renovacion,
                            :vigente,
                            :tipo,
                            :prima)";
                     
              $resultado=$base->prepare($sql);
              $resultado->execute(array(":id_poliza"=>$id_poliza,
                                        ":id_empleado"=>$id_empleado,
                                        ":nombre_tomador"=>$nombre,
                                        ":Cobertura"=>$cobertura,
                                        ":forma_de_pago"=>$pago,
                                        ":f_contrato"=>$contrato,
                                        ":f_renovacion"=>$renovacion,
                                        ":vigente"=>$vigente,
                                        ":tipo"=>$tipo,
                                        ":prima"=>$prima));
              $sql2="INSERT INTO poliza_hogar(id_poliza, nombre_item, 
                                             tipo_item, valor_item, prima_asignada) 
                      VALUES (:id_poliza,:nombre_item,
                              :tipo_item,:valor_item,:prima)" ; 
              $resultado2=$base->prepare($sql2);
              $resultado2->execute(array(":id_poliza"=>$id_poliza2,
                                        ":nombre_item"=>$nitem,
                                        ":tipo_item"=>$titem,
                                        ":valor_item"=>$prima,
                                        ":prima"=>$prima2,));                
                                   
                                   }else { echo "Error al registar";     header("Location:AñadirHogar.php");
                                   }

                                   echo "Registrado con exito:";  
                                   header("Location:AñadirHogar.php");
                                    


       }catch(Exception $e){
              echo "linea del erro:". $e->getLine();
       
              echo "mensaje error". $e->getMessage();
       }

       finally{
              $base=null;}
            
    ?>       