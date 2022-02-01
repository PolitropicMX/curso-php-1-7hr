<?php
    if($_POST){
        $boton = $_POST['bimbo'];

        for($i = 0; $i <= $boton; $i++){
            echo "numero ".$i."<br/>";
        }
        $j = 0;
        while($j < $boton){
            echo "WUWUWUW"."<br/>";
            $j++;
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
        <form action="ejercicio10.php" method="post">
            <input type="submit" name="bimbo" value="5">
            <br/>
            <input type="submit" name="bimbo" value="6">
            <br/>
            <input type="submit" name="bimbo" value="7">
        </form>
    </body>
</html>
    