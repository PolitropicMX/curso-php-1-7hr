<?php
    if($_POST){
        $valorA = $_POST['Avalue'];
        $valorB = $_POST['Bvalue'];
        
        if (($valorA != $valorB) && ($valorA > $valorB)){
            echo "El valor de A es mas grande y diferente que el valor de B";
        }else{
            echo "chingas a tu madre cabron";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>
            PHP Programming
        </title>
        
    </head>
    <body>
        <form action="ejercicio8.php" method="post">
            A value: 
            <input type="text" name="Avalue" id="">
            <br/>
            B value: 
            <input type="text" name="Bvalue" id="">
            <br/>
            <input type="submit" value="Enviar">
        </form>
    </body>
    