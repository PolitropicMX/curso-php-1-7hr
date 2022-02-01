<?php
    if($_POST){
        $boton = $_POST['bimbo'];
        switch($boton){
            case 1:
                echo "1";
                break;
            case 2:
                echo "2";
                break;
            case 3:
                echo "3";
                break;
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
        <form action="ejercicio9.php" method="post">
            <input type="submit" name="bimbo" value="1">
            <br/>
            <input type="submit" name="bimbo" value="2">
            <br/>
            <input type="submit" name="bimbo" value="3">
        </form>
    </body>
    