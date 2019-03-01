<?php

print "Qual o seu sálario? ";

$salario_sem_aumento = (int) fgets (STDIN);

print "qual o porcentual do aumento? ";

$porcentual = (int) fgets (STDIN);

$aumento_do_salario = $salario_sem_aumento * $porcentual;

print "o seu salário com aumento é $aumento_do_salario reais."
