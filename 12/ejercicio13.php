<?php
    $frutas1 = array("fresa","manzana","pera");
    // Para añadir elementos y tambien quitarlos de un array se usa
    // array_push paraa añadir
    // array_pop para extraer
    array_push($frutas1, "uva");
    print_r($frutas1);
    $frutas = array("f"=>"fresa", "m"=>"manzana", "p"=>"pera", "u" => "uva");
    print_r($frutas);
    echo $frutas["f"]."<br/>";
    for($f = 0; $f < 3; $f++){
        echo $frutas1[$f]."<br/>";
    }
    foreach($frutas as $indice=>&$valor){
        echo "El valor ".$valor." tiene el indice:".$indice."<br/>";
    }
?>