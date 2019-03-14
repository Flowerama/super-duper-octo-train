
<?php

    print("Qual a distância que vamos percorrer? Em metros: ");
    $dist = (INT) fgets(STDIN);

    print("Qual a velocidade Média que você vai andar? Em Km/h: ");
    $velo = (INT) fgets(STDIN);

    $tempoViagem = $dist / $velo;

    print("O tempo da viagem vai ser de minutos $tempoViagem\n");
