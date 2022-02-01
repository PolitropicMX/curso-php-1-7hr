<?php
    if($_POST){$txtNombre= $_POST['txtNombre'];
        $txtApellido= $_POST['txtApellido'];}
    echo "Hola ".$txtNombre." ".$txtApellido;
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
        <form action="ejercicio5.php" method="post">
            Nombre:
            <input type="text" name="txtNombre" id="">
            <br/>
            Apellido:
            <input type="text" name="txtApellido" id="">
            <br/>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>