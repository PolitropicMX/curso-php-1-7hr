<?php
    // recibir informacion del metodo post
    if($_POST){
        $nombre = $_POST['txtNombre'];
        echo "Hola ".$nombre;   
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>
            PHP Programming
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    </head>
    <body>
        <h1>Hola Mundo</h1>
        <form action="ejercicio2.php" method="post">
            Nombre:
            <input type="text" name="txtNombre" id="">
            <br/>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
