<?php
    if($_POST){
        $valorA = $_POST['Avalue'];
        $valorB = $_POST['Bvalue'];
        $suma = $valorA + $valorB;
        $resta = $valorA - $valorB;
        $multi = $valorA * $valorB;
        $div = $valorA / $valorB;
        echo "<br/>".$suma;
        echo "<br/>".$resta;
        echo "<br/>".$multi;
        echo "<br/>".$div;
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
        <form action="ejercicios7.php" method="post">
            A value: 
            <input type="text" name="Avalue" id="">
            <br/>
            B value: 
            <input type="text" name="Bvalue" id="">
            <br/>
            <input type="submit" value="Enviar">
        </form>
    </body>
    