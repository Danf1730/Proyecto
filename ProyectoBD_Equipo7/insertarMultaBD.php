<?php
       include 'AñadirMulta.php';
       $multa =$_POST['id_multa'];         
       $matricula =$_POST['matricula']; 
       $f_multa =$_POST['f_multa']; 
       $h_multa =$_POST['h_multa'];        
       $importe=$_POST['importe'];       
       $lugar =$_POST['lugar'];
       $gravedad =$_POST['nivel_gravedad'];   


       try{
              $base=new PDO("mysql:host=bihmjsqmjuzv93yzuyjb-mysql.services.clever-cloud.com:3306; dbname=bihmjsqmjuzv93yzuyjb" ,"u6zp5irrvsbyntyd","YItp7ofnGTt8NbLiifkD");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              if(strlen($_POST['id_multa'])>=1 && strlen($_POST['matricula'])>=1 
              && strlen($_POST['f_multa'])>=1 && strlen($_POST['h_multa'])>=1
              && strlen($_POST['importe'])>=1 && strlen($_POST['lugar'])>=1
              && strlen($_POST['nivel_gravedad'])>=1){

              $sql="INSERT INTO multa(id_multa, f_multa, lugar_multa, hora_multa, importe, matricula, nivel_gravedad) 
                    VALUES (:id_multa,:f_multa,:lugar,:h_multa,:importe,:matricula,:nivel_gravedad)";
                     
              $resultado=$base->prepare($sql);
              $resultado->execute(array(":id_multa"=>$multa,
                                        ":matricula"=>$matricula,
                                        ":h_multa"=>$h_multa,
                                        ":importe"=>$importe,
                                        ":f_multa"=>$f_multa,
                                        ":lugar"=>$lugar,
                                        ":nivel_gravedad"=>$gravedad));

                                        echo "Registrado correctamente";
                                        
                                    }else { echo "vacio";
                                        
                                        
                                        }
                                  
       }catch(Exception $e){

              echo "mensaje error". $e->getMessage();
       }

       finally{
              $base=null;}
            
    ?> 