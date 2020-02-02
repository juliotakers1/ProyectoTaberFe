<?php
function Conectar(){
   
    $host = 'localhost';
    $db = 'taber';
    $user = 'root';
    $pwd = '';
    try{
        $conn = new PDO('mysql:host=localhost; dbname='.$db, $user, $pwd);
    }catch(PDOException $e){
        echo 'error al conectar';
    }
    exit;
}
return $conn;
?>