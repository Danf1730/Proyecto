<?php
include 'AñadirVehiculo.php';
       //Datos Poliza //
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
       ////////////////////////
       //Datos Poliza Vehiculo//
       $id_poliza2=$_POST['id_poliza'];
       $categoria=$_POST['categoria_vehiculo'];
       $edad=$_POST['edad_vehiculo'];
       $edad2=$_POST['edad_conductor'];
       $cobertura2=$_POST['tipo_cobertura'];
       $prima2 =$_POST['prima'];
       ////////////////////////
        //Datos Propietario//  
        $id_cliente=$_POST['id_cliente'];
        $id_poliza3=$_POST['id_poliza'];
        $id_empleado2=$_POST['id_empleado'];
        $contrato2 =$_POST['f_contrato']; 
        ////////////////////


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
                   //Datos Poliza //
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
                            /////////////////////////
                            //Datos Poliza Vehiculo//
              $sql2="INSERT INTO  poliza_vehiculo ( id_poliza ,  categoria_vehiculo , 
                                                    edad_vehiculo ,  edad_conductor , 
                                                    tipo_cobertura , prima_asignada) 
                     VALUES (:id_poliza,:categoria_vehiculo
                            ,:edad_vehiculo,:edad_conductor,:tipo_cobertura
                            ,:prima)";

              $resultado2=$base->prepare($sql2);
              $resultado2->execute(array(":id_poliza"=>$id_poliza2,
                                        ":categoria_vehiculo"=>$categoria,
                                        ":edad_vehiculo"=>$edad,
                                        ":edad_conductor"=>$edad2,
                                        ":tipo_cobertura"=>$cobertura2,
                                        ":prima"=>$prima2));
                                        //////////////////
                      //Datos Propietario// 
                      $sql3="INSERT INTO propietario_poliza ( id_cliente, id_poliza, id_agente_personal, f_ultimo_uso) 
                      VALUES (:id_cliente,:id_poliza,:id_empleado,:f_contrato)";
   
$resultado3=$base->prepare($sql3);
$resultado3->execute(array(":id_cliente"=>$id_cliente,
                      ":id_poliza"=>$id_poliza3,
                      ":id_empleado"=>$id_empleado2,
                      ":f_contrato"=>$contrato2,));           
                      //////////////////////       

                                        echo "Registrado correctamente";
                            
                     }else { echo "Error al registra, no pueden haber campos vacios"; }

       }catch(Exception $e){
             
       
              echo "mensaje error". $e->getMessage();
       }

       finally{
              $base=null;}
            
    ?>       