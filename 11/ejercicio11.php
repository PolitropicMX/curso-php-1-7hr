<?php
    if($_POST){
        $boton = $_POST['Avalue'];
        function printname($i,$j){
            echo "hola ".$i." ".$j."<br/>";
        }
        for($j = 0; $j < 6; $j++){
            printname($boton,$j);
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
        <form action="ejercicio11.php" method="post">
            Tu nombre es: 
            <input type="text" name="Avalue" id="">
            <input type="submit" value="Send">
        </form>
    </body>
</html>