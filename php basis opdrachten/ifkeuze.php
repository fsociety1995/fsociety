<?php

$naam = readline("Geef jouw naam : ");
$leeftijd = readline("Geef jouw leeftijd : ");
$nummer = 21;

echo "Hallo $naam \n";

if ($leeftijd <$nummer){
    echo "Jij bent jonger dan $nummer. \n";

}
if ($leeftijd >$nummer){
    echo "Jij bent ouder dan $nummer. \n";
}
if ($leeftijd ==$nummer){
    echo "Jij bent precies $nummer jaar. \n";
}
?>