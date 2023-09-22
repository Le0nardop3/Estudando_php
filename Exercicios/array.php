<?php

    $idades = [50,18,60,35,25];
    //          0  1  2  3  4

    $acum_idades = 0;
    $contador_idades = 0;

    for($i = 0; $i < 5; $i++){
        echo $idades[$i] . "<br>";
        $acum_idades += $idades[$i];
        if($idades[$i] >= 50){
            $contador_idades++;
        }
    }

    $media_idades = $acum_idades/5;

    echo "Quantidade de idades maior ou igual a 50: $contador_idades <br>";
    echo "Média de Idades: $media_idades <br>";
    echo "Fim do PHP <br>";
?>