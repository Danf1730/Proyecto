<?php
include 'AñadirPersona.php';
       //// Datos Perzona adicional//////
       $persona=$_POST['id_persona'];  
       $name=$_POST['nombre']; 
       $ape=$_POST['apellido'];
       $cedula=$_POST['cedula']; 
        $direc=$_POST['direccion'];
       $tel=$_POST['telefono'];
       $cid =$_POST['ciudad']; 
       /////////////////////////



       try{
              $base=new PDO("mysql:host=bcfwtrpmeo8khveqpqcu-mysql.services.clever-cloud.com:3306; dbname=bcfwtrpmeo8khveqpqcu" ,"uimjtch6xs9bod2v","fMfmvxQzfl8D6VWnmeCq");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if(strlen($_POST['id_persona'])>=1 
              && strlen($_POST['nombre'])>=1 
              && strlen($_POST['apellido'])>=1 
              && strlen($_POST['cedula'])>=1 
              && strlen($_POST['direccion'])>=1 
              && strlen($_POST['telefono'])>=1 
              && strlen($_POST['ciudad'])>=1 ){


            /////Añade persona adicional//////
              $sql="INSERT INTO persona_adicional(id_persona,nombre,apellido,cedula
                                              ,direccion,telefono,ciudad) 
                                VALUES (:id_persona,:nombre,:apellido,:cedula,:direccion,:telefono,:ciudad)";
                     
              $resultado=$base->prepare($sql);
              $resultado->execute(array(":id_persona"=>$persona,
                                        ":nombre"=>$name,
                                        ":apellido"=>$ape,
                                        ":cedula"=>$cedula,
                                        ":direccion"=>$direc,
                                        ":telefono"=>$tel,
                                        ":ciudad"=>$cid)); 
                     
                                        echo "Registrado correctamente";
                                   
                                   }else { echo "Error al registar";    
                                   }

                                    


       }catch(Exception $e){
              

              echo "mensaje error". $e->getMessage();
       }

       finally{
              $base=null;}
            
    ?>       