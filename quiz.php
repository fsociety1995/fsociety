<?php

$random = rand(1,100);
$gok = 0;
$teller	= 0;

while ( $random != $gok) {
    $gok = readline ("welk getal denk jij dat het is? ");
    
    if ($gok == "stop"){
        echo "ik stop nu \n";
        exit;
    }
    
    if ($gok <1){
        echo "de bedoeling is wel tussen 1 en 100\n";
        exit;
    }
    
    if ($gok >100){
        echo "de bedoeling is wel tussen 1 en 100\n";
        exit;
    }
    
    if ($gok <$random){
        echo "het getal is hoger \n";

    }
    
    if ($gok >$random){
    echo "het getal is lager \n";

    }
    
    $teller++;
    
    
}


if ($gok == $random){
    echo "je hebt het juist geraden nu stoppen want je bouwt een gok verslaving op je hebt het in $teller beurten gedaan \n";

}

?>
