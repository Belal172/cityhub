<?php
   
    require 'classes/User.php';
    $informations = new User();
    session_start();
    if(!isset($_SESSION['username']) && !isset($_SESSION['is_admin'])){
        header("Location:login.php");
    }
    $id = $_GET['id'];
    $deleted = $informations->deleteUser($id);
    if($deleted){
        header("Location:users.php");
    }else{
        echo "try again";
    }
    
   
    
?>