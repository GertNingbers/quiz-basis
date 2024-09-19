<?php

echo "Welkom bij mijn quiz!\n";
echo "\n";

$maximum=1;
$random = rand(1,100);
echo "$random\n";
$invoer = readline ("gok een nummer tussen de 1 en 100: ");
echo "\n";
if ( $random == $invoer ) {
    echo "Gefeliciteerd je hebt goed gegokt.\n"; 
}
if ( $random < $invoer ) {
    echo " Oef je moet wat lager gokken.\n";
}
if ( $random > $invoer ) {
    echo "Ah wat jammer je moet wat hooger gokken.\n";
} 

?>