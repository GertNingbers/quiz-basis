<?php

echo "Welkom bij mijn quiz!\n";

$random = rand(1, 100);
echo "$random\n";
$gok = 0;
$beurten=0;
$getal1=1;

while ($random != $gok) {

    $gok = readline("gok een nummer tussen de 1 en 100 of type stop: ");
    
    if ($gok === "stop") {
        exit("uw heeft op stop gedrukt.\n");
    }
    
    if ($gok > 100){
        exit ("gestopt omdat je boven de 100 ging.\n");
    }
     
    if ($gok < 1){
        exit ("gestopt omdat je onder de 1 ging.\n");
    }

    if ($random > $gok) {
        echo "Ah wat jammer je moet wat hooger gokken.\n"; $beurten=$beurten + $getal1;
    }

    if ($random < $gok) {
        echo "Oef je moet wat lager gokken.\n"; $beurten=$beurten + $getal1;
    }
    
    if ($random == $gok) {
        echo "Gefeliciteerd je hebt goed gegokt.\n"; $beurten=$beurten + $getal1;
    }

}
echo "Je hebt het binnen $beurten gegokt";