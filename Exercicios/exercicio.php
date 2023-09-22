<?php

    $precos = [10.50, 50, 35, 58, 65, 99.9, 105, 305, 2.50];

    $soma_precos = 0;
    $maior_preco = 0;
    $menor_preco = 0;
    $ind_menor_preco = 0;

    for($i=0; $i<9; $i++){
        if($i == 0){
            $maior_preco = $precos[$i];
            $menor_preco = $precos[$i];
        }
        $soma_precos += $precos[$i];
        if($precos[$i] > $maior_preco){
            $maior_preco = $precos[$i];
        }
        if($precos[$i] < $menor_preco){
            $menor_preco = $precos[$i];
            $ind_menor_preco = $i;
        }
    }

    $media = $soma_precos/9;

    echo "Total: $soma_precos <br>";
    echo "Média dos Preços: $media <br>";
    echo "Maior Preço: $maior_preco <br>";
    echo "Menor Preço: $menor_preco <br>";
    echo "Índice do menor Preço: $ind_menor_preco <br>";

?>