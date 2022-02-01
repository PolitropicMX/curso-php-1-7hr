<?php
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";

    try{
        $conexion = new PDO("mysql:dbname = album;host=$servidor",$usuario,$contrasena);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "conexion establecida"."<br/>";
    }catch(PDOException $error){
        echo "conexion erronea".$error->getMessage();
    }
?>