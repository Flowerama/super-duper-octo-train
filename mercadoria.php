<?php

print "Qual o preço da sua mercadoria? ";

$mercadoria = (Int) fgets (STDIN);

print "qual o valor do desconto? ";

$desconto_mercadoria = (int) fgets (STDIN);

$valor_descontado = $mercadoria * $desconto_mercadoria;

$valor_total = $mercadoria - $valor_descontado;

print "O valor do seu desconto foi de $valor_descontado reais e ao total ficou $valor_total a pagar."
