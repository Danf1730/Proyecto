<?php
include 'AñadirSiniestro.php';
       //// Datos información personas//////
       $siniestro=$_POST['id_siniestro'];
       $poliza=$_POST['id_poliza'];
       $f_siniestro=$_POST['f_siniestro'];
       $f_respuesta=$_POST['f_respuesta'];
       $rechazo=$_POST['rechazo'];
       $reconoccido=$_POST['reconoccido'];
       $solicitado=$_POST['solicitado'];
       $descripcion=$_POST['descripcion'];
       /////////////////////////



       try{
              $base=new PDO("mysql:host=bihmjsqmjuzv93yzuyjb-mysql.services.clever-cloud.com:3306; dbname=bihmjsqmjuzv93yzuyjb" ,"u6zp5irrvsbyntyd","YItp7ofnGTt8NbLiifkD");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if( strlen($_POST['id_siniestro'])>=1 
              && strlen($_POST['id_poliza'])>=1 
              && strlen($_POST['f_siniestro'])>=1 
              && strlen($_POST['f_respuesta'])>=1  
              && strlen($_POST['rechazo'])>=1 
              && strlen($_POST['reconoccido'])>=1 
              && strlen($_POST['solicitado'])>=1 
              && strlen($_POST['descripcion'])>=1 ){


        

             /////// siniestro////////////////
             $sql="INSERT INTO siniestro(nro_siniestro, descripcion_siniestro) 
             VALUES (:id_siniestro,:descripcion)";
             $resultado=$base->prepare($sql);
             $resultado->execute(array(":id_siniestro"=>$siniestro,
                                       ":descripcion"=>$descripcion)); 

                /////Añade registro siniestro //////
                $sql="INSERT INTO registro_siniestro(nro_siniestro, nro_poliza, f_siniestro, f_respuesta, id_rechazo, monto_reconocido, monto_solicitado) 
                VALUES (:id_siniestro,:id_poliza,:f_siniestro,:f_respuesta,:rechazo,:reconoccido,:solicitado)";
                 
          $resultado=$base->prepare($sql);
          $resultado->execute(array(":id_siniestro"=>$siniestro,
                                    ":id_poliza"=>$poliza,
                                    ":f_siniestro"=>$f_siniestro,
                                    ":f_respuesta"=>$f_respuesta,
                                    ":rechazo"=>$rechazo,
                                    ":reconoccido"=>$reconoccido,
                                    ":solicitado"=>$solicitado)); 

                     
                                        echo "Registrado correctamente";
                                   
                                   }else { echo "Error al registar";    
                                   }

                                    


       }catch(Exception $e){
              

              echo "mensaje error". $e->getMessage();
              echo "linea error".$e->getLine();
       }

       finally{
              $base=null;}
            
    ?>   