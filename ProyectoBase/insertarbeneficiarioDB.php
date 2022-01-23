<?php
include 'AñadirBeneficiario.php';

       //// Datos beneficiario poliza//////
       $persona2=$_POST['id_persona_beneficiario'];
       $bene=$_POST['id_persona'];
       $poli=$_POST['id_poliza'];
       //////////////////////


       try{
              $base=new PDO("mysql:host=bcfwtrpmeo8khveqpqcu-mysql.services.clever-cloud.com:3306; dbname=bcfwtrpmeo8khveqpqcu" ,"uimjtch6xs9bod2v","fMfmvxQzfl8D6VWnmeCq");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if(strlen($_POST['id_persona'])>=1  
              && strlen($_POST['id_persona_beneficiario'])>=1 
              && strlen($_POST['id_poliza'])>=1){

/////Añade beneficiario poliza//////
              $sql="INSERT INTO beneficiario_poliza(id_beneficiario, id_persona_beneficiario, id_poliza) 
              VALUES (:id_persona_beneficiario,:id_persona,:id_poliza)" ; 

              $resultado=$base->prepare($sql);
              $resultado->execute(array(":id_persona_beneficiario"=>$persona2,
                                        ":id_persona"=>$bene,
                                        ":id_poliza"=>$poli,));   
                     
                                        echo "Registrado correctamente";
                                   
                                   }else { echo "Error al registar";    
                                   }

                                    


       }catch(Exception $e){
              

              echo "mensaje error". $e->getMessage();
       }

       finally{
              $base=null;}
            
    ?>       