<?php
      include 'AñadirAccidente.php'; 
       $Lugar =$_POST['Lugar'];        
       $Fecha =$_POST['Fecha']; 
       $involucrado =$_POST['id_involucrado'];        
       $vehiculo =$_POST['id_vehiculo']; 
       $persona =$_POST['id_persona'];        
       $multa =$_POST['id_multa']; 


       try{
              $base=new PDO("mysql:host=bcfwtrpmeo8khveqpqcu-mysql.services.clever-cloud.com:3306; dbname=bcfwtrpmeo8khveqpqcu" ,"uimjtch6xs9bod2v","fMfmvxQzfl8D6VWnmeCq");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if(strlen($_POST['Fecha'])>=1 && strlen($_POST['Lugar'])>=1){

              $sql="INSERT INTO vehiculo_accidente(lugar, f_accidente) 
              VALUES (:Lugar,:Fecha)";
                     
              $resultado=$base->prepare($sql);
              $resultado->execute(array(":Lugar"=>$Lugar,
                                        ":Fecha"=>$Fecha));


              $sql2="INSERT INTO involucrado_vehiculo(id_involucrado, id_vehiculo, id_persona, id_multa) 
               VALUES (:id_involucrado,:id_vehiculo,:id_persona,:id_multa)";
                                               
              $resultado2=$base2->prepare($sql2);
              $resultado2->execute(array(":id_involucrado"=>$involucrado,
                                         ":id_vehiculo"=>$vehiculo,
                                         ":id_persona"=>$persona,
                                         ":id_multa"=>$multa));
                          

                                        echo "Registrado correctamente";
                                        
                                    }else { echo "vacio";}
                                  
       }catch(Exception $e){
             echo "mensaje error". $e->getMessage();
       }

       finally{
              $base=null;
            $base2=null;}
            
    ?>       