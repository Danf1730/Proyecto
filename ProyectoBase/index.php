<?php
include_once 'comprueba_datos.php';
include_once 'setuser.php';

$userSession = new userSession();
$user=new User();

if(isset($_SESSION['user'])){
    //echo "<h2>hay sesion</h2>";
}else if (isset($_POST['username'])&&($_POST['password'])){
    //echo "<h2>validacion de login</h2>";
     $userForm =$_POST['username'];
     $passForm =$_POST['pasword'];
     if($user->userExists($userForm,$passForm)){
         //echo "<h2>usuario valido</h2>";
         $userSession->setCurrentUser($userForm);
         $user->setUser($userForm);
         header("location:AgenteMenu.php" );
     } else{
         //echo "nombre de usuario y/o password iavlido";
         $erroLogin="nombre de usuario y/o password iavlido";
         header("location:Sesion.php" );
     }

}else{
    //echo "login";
    header("location:Sesion.php" );
}

?>