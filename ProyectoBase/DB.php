<!-- Daniel Nuñez,Javier Rojas ,Ashly Colmenares -->

<?php 
class DB{

    Private $bd_host;
    Private $bd_usuario;
    Private $bd_contra;
    Private $bd_nombre;

    public function construct(){
        $this -> bd_host="bcfwtrpmeo8khveqpqcu-mysql.services.clever-cloud.com:3306";
        $this -> bd_usuario="uimjtch6xs9bod2v";
        $this -> bd_contra="fMfmvxQzfl8D6VWnmeCq";
        $this -> bd_nombre="bcfwtrpmeo8khveqpqcu";
    }

       function connect(){
        try{
            $connection="mysql:host=". $this->bd_usuario . ";bdname=".$this->bd_nombre .";charset=";
            
            $options=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                      PDO::ATTR_EMULATE_PREPARES=>FALSE,];
            $pdo= new PDO($connection, $this->bd_usuario,$this->bd_contra,$options);
            return $pdo;}
        catch(PDOException $e){
            print_r(`Error connection:`. $e->getMessage());
        }
    }
       
    
  
}
?>

