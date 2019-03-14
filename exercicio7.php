<?php

print "por quantos dias esse carro foi usado? ";

$dias_carro = (int) fgets (STDIN);

$valor_por_dias = $dias_carro * 60;

print "quantos km rodados? ";

$km_rodados = (int)fgets (STDIN);

$valor_km = $km_rodados * 0.15; 

$valor_total_aluguel = $valor_km + $valor_por_dias ;

print "tá devendo $valor_total_aluguel reais por agora mané.";
