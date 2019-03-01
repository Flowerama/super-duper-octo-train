<?php

print "qual a sua quantidade de dias? ";

$quantidade_dias = (int) fgets (STDIN);

print "qual a sua quantidade de horas?  ";

$quantidade_horas = (int) fgets (STDIN);

print "qual a sua quantidade de segundos? ";

$quantidade_segundos = (int) fgets (STDIN);

$quantidade_segundos_dia = $quantidade_dias * 86400;

$quantidade_segundos_horas = $quantidade_horas * 3600;
$quantidade_segundos_dia = $quantidade_dias * 86400;
16
​
17
$quantidade_segundos_horas = $quantidade_horas * 3600;
18
​
19
$quantidade_segundos_total = $quantidade_segundos_dia + $quantidade_segundos_horas + $quantidade_segundos;
20

$quantidade_segundos_total = $quantidade_segundos_dia + $quantidade_segundos_horas + $quantidade_segundos;

print "seu tempo de $quantidade_dias dias, $quantidade_horas horas e $quantidade_segundos foi convertido para $quantidade_segundos_total em segundos.";
