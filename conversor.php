
<?php

print "Qual a quantidade em metros a ser convertidos?";

$quantidade_metros = (int)fgets (STDIN);

$quantidade_mm = $quantidade_metros * 1000;

print "A quantidade de $quantidade_metros foi convertida para $quantidade_mm";

