<?php
/*
$i = 10;
while ($i > 0) {
    echo $i . "<br>";
    $i--;
}
*/
$arrayCitiesSergipe = [
    "Acarajú", "N. S. do Socorro", "Lagarto", "Itabaiana", "S.Cristovão", "Estância", "Tobias Barreto"
];

$contador = count($arrayCitiesSergipe);
$i = 0;
while ($i < $contador) {
    echo $arrayCitiesSergipe[$i] . "<br>";
    if ($i===2){
        echo"--------FIM-------";
        break;
    }
    $i++;
}
