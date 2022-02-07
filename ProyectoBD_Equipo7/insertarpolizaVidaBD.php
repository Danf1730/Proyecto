<?php
      include 'AñadirHogar.php';
       //// Datos Poliza(contrato)//////
       $nro_poliza=$_POST['nro_poliza']; 
       $descrip_poliza=$_POST['descrip_poliza'];
       $contrato =$_POST['f_contrato']; 
       $contrato2 =$_POST['f_renovacion']; 
       $prima =$_POST['prima']; 
       /////////////////////////
       //Datos Titular//  
       $id_cliente=$_POST['id_cliente'];
       $nro_poliza2=$_POST['nro_poliza'];
       $prima2 =$_POST['prima'];
       $contrato3=$_POST['f_contrato'];
       ////////////////////
       //// Datos vida //////
       $id_vida=$_POST['nro_poliza'];
       $prima3 =$_POST['prima'];
       $descrip_poliza2=$_POST['descrip_poliza'];
       //////////////////////
       //// Datos Contrato //////
       $id_vida2=$_POST['nro_poliza'];
       $id_cliente2=$_POST['id_cliente'];
       $id_agente=$_POST['id_agente'];
       $id_persona=$_POST['id_persona'];
       $contrato4=$_POST['f_contrato'];
       $vigente=$_POST['estado_contrato'];
       $prima4 =$_POST['prima'];
       //////////////////////
         


       try{
              $base=new PDO("mysql:host=bihmjsqmjuzv93yzuyjb-mysql.services.clever-cloud.com:3306; dbname=bihmjsqmjuzv93yzuyjb" ,"u6zp5irrvsbyntyd","YItp7ofnGTt8NbLiifkD");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if(strlen($_POST['nro_poliza'])>=1 
              && strlen($_POST['descrip_poliza'])>=1 
              && strlen($_POST['f_contrato'])>=1 
              && strlen($_POST['f_renovacion'])>=1 
              && strlen($_POST['prima'])>=1 
              && strlen($_POST['id_cliente'])>=1 
              && strlen($_POST['id_persona'])>=1
              && strlen($_POST['id_agente'])>=1
              && strlen($_POST['estado_contrato'])>=1
              
              ){
       //////////// Datos Poliza(contrato)////////////////
              $sql="INSERT INTO poliza(nro_poliza, descrip_poliza, f_contrato, f_renovacion, prima) 
                    VALUES (:nro_poliza,:descrip_poliza,:f_contrato,:f_renovacion,:prima)";
                     
              $resultado=$base->prepare($sql);
              $resultado->execute(array(":nro_poliza"=>$nro_poliza,
                                        ":descrip_poliza"=>$descrip_poliza,
                                        ":f_contrato"=>$contrato,
                                        ":f_renovacion"=>$contrato2,
                                        ":prima"=>$prima));
        //////////////////////////////////////////////
         //////////// Datos Titular////////////////
         $sql2="INSERT INTO titular(id_cliente, nro_poliza, saldo_prima, f_uso_reciente) 
               VALUES (:id_cliente,:nro_poliza,:prima,:f_contrato)";
                     
         $resultado2=$base->prepare($sql2);
         $resultado2->execute(array(":id_cliente"=>$id_cliente,
                                    ":nro_poliza"=>$nro_poliza2,
                                    ":prima"=>$prima2,
                                    ":f_contrato"=>$contrato3));
               //////////////////////////////////////////////
                   //////////// Datos vida////////////////
                      $sql3="INSERT INTO vida(id_vida_salud, prima, cobertura) 
                             VALUES (:nro_poliza,:prima,:descrip_poliza)";
                     
                    $resultado3=$base->prepare($sql3);
                      $resultado3->execute(array(":nro_poliza"=>$id_vida,
                                                 ":prima"=>$prima3,
                                                 ":descrip_poliza"=>$descrip_poliza2));
                //////////////////////////////////////////////
                  //////////// Datos Contrato ///////////////
                      $sql4="INSERT INTO contrata_vida (id_vida_salud, id_cliente, id_persona, id_agente, f_contrato, estado_contrato, monto_comision_Ag) 
                             VALUES (:nro_poliza,:id_cliente,:id_persona,:id_agente,:f_contrato,:estado_contrato,:prima)";
                     
                   $resultado4=$base->prepare($sql4);
                    $resultado4->execute(array(":nro_poliza"=>$id_vida2,
                                               ":id_cliente"=>$id_cliente2,
                                               "id_persona"=>$id_persona,
                                               ":f_contrato"=>$contrato4,
                                               ":estado_contrato"=>$vigente,
                                               ":id_agente"=>$id_agente,
                                               ":prima"=>$prima3));
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