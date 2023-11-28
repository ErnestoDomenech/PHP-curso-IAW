<?php 
//crear variable con la conexión
$link = 'mysql:host=localhost; dbname=tienda';
$usuario = 'web';
$pass = '1234asdf';

try{
    $pdo = new PDO($link, $usuario, $pass);
    //echo 'Conectado';
    echo 'última conexión: ';
    print date("d/m/y G:i:s", time());
}catch (PDOException $e) {
    print "Error: ".$e->getMessage()."<br>";
    die();
}

?>