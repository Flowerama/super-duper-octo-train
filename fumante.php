<?php

    print "Por quantos anos voce fumou? ";
    
     $anosfumados = (int) fgets(STDIN);
    
    print "Quantos cigarros você fuma por dia?: ";
    
     $cigarrosfumados_dia = (int) fgets(STDIN);

     $cigarros_em_anos = $cigarrosfumados_dia*365*$anosfumados;
    
     $cigarros_em_minutos = $cigarros_em_anos * 10;
     
     $cigarros_horas = $cigarros_em_minutos/60;
    
     $dias_perdidos = round($cigarros_horas/24);

    print "você perdeu $dias_perdidos dias meo\n";
