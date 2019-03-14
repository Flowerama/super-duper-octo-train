<?php
print"diga a temperatura em celsius";

$celsius=(int) fgets(STDIN);

$temp_fa= 9* $celsius/5 + 32;

print "sua temperatura em farhneit é $temp_fa";

