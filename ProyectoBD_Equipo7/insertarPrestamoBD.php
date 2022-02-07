<?php
include 'AñadirSiniestro.php';
       //// Datos  prestamo//////
       $id_prestamo=$_POST['id_prestamo'];
       $importe=$_POST['importe'];
       /////////////////////////
        //// Datos  pagp//////
        $id_prestamo2=$_POST['id_prestamo'];
        $f_pago=$_POST['f_pago'];
        $pago=$_POST['pago'];
        /////////////////////////
         //// Datos  prestario//////
         $id_prestamo3=$_POST['id_prestamo'];
       $id_cliente=$_POST['id_cliente'];
       $id_financiadora=$_POST['id_financiadora'];
       $interes=$_POST['interes'];
       /////////////////////////



       try{
              $base=new PDO("mysql:host=bihmjsqmjuzv93yzuyjb-mysql.services.clever-cloud.com:3306; dbname=bihmjsqmjuzv93yzuyjb" ,"u6zp5irrvsbyntyd","YItp7ofnGTt8NbLiifkD");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if( strlen($_POST['id_prestamo'])>=1 
              && strlen($_POST['importe'])>=1 
              && strlen($_POST['f_pago'])>=1 
              && strlen($_POST['pago'])>=1  
              && strlen($_POST['id_cliente'])>=1 
              && strlen($_POST['id_financiadora'])>=1 
              && strlen($_POST['interes'])>=1  ){


        

             /////// Prestamo////////////////
             $sql="INSERT INTO prestamo(id_prestamo, importe_prestamo) 
                   VALUES (:id_prestamo,:importe)";
             $resultado=$base->prepare($sql);
             $resultado->execute(array(":id_prestamo"=>$id_prestamo,
                                       ":importe"=>$importe)); 

                /////Pago //////
                $sql="INSERT INTO pago( id_prestamo, f_pago, importe_pago) 
                      VALUES (:id_prestamo,:f_pago,:pago)";
                 
          $resultado=$base->prepare($sql);
          $resultado->execute(array(":id_prestamo"=>$id_prestamo2,
                                    ":f_pago"=>$f_pago,
                                    ":pago"=>$pago)); 
                  /////Prestario//////
                  $sql="INSERT INTO prestatario(id_prestamo, id_cliente, id_financiadora, tipo_interes) 
                        VALUES (:id_prestamo,:id_cliente,:id_financiadora,:interes)";
                 
                  $resultado=$base->prepare($sql);
                  $resultado->execute(array(":id_prestamo"=>$id_prestamo3,
                                            ":id_cliente"=>$id_cliente, 
                                            ":id_financiadora"=>$id_financiadora,
                                            ":interes"=>$interes)); 

                     
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