<?php

$stop = "nee";
$teller = 1;

while ( $stop == "nee") {
    
    echo "Dit is run $teller\n";

    $stop = strtolower(readline ("Wil je stoppen [ja/nee] : "));
    $teller++;
}

?>