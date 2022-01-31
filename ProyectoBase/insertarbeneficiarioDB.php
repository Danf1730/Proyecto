<?php
include 'AñadirBeneficiario.php';

       //// Datos beneficiario poliza//////
       $bene=$_POST['id_persona_beneficiario'];
       $persona=$_POST['id_beneficiario'];
       $poli=$_POST['id_poliza'];
       //////////////////////


       try{
              $base=new PDO("mysql:host=bcfwtrpmeo8khveqpqcu-mysql.services.clever-cloud.com:3306; dbname=bcfwtrpmeo8khveqpqcu" ,"uimjtch6xs9bod2v","fMfmvxQzfl8D6VWnmeCq");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if(strlen($_POST['id_beneficiario'])>=1  
              && strlen($_POST['id_persona_beneficiario'])>=1 
              && strlen($_POST['id_poliza'])>=1){

                          /////Añade beneficiario poliza//////
              $sql="INSERT INTO beneficiario_poliza(id_beneficiario, id_persona_beneficiario, id_poliza) 
              VALUES (:id_beneficiario,:id_persona_beneficiario,:id_poliza)" ; 

              $resultado=$base->prepare($sql);
              $resultado->execute(array( ":id_poliza"=>$poli,
                                        ":id__beneficiario"=>$persona,

                                        ":id_persona_beneficiario"=>$bene,
                                       ));   
                     
                                        echo "Registrado correctamente";
                                   
                                   }else { echo "Error al registar";    
                                   }

                                    


       }catch(Exception $e){
              echo "linea error". $e->getLine();

              echo "mensaje error". $e->getMessage();
       }

       finally{
              $base=null;}
            
    ?>       