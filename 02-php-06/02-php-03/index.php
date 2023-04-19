<?php

$sorteio = rand(0,5);
echo "$sorteio <br>";

switch ($sorteio) {
    case 0:
        echo "perdeu a vez!";
        break;
    
    case 1:
        echo "avance 1 casa!";
        break;
    
    case 2:
        echo "avance 2 casas!";
        break;
    
    case 3:
        echo "avance 2 casas e jogue novamente!";
        break;
    
    case 4:
        echo "avance 1 casa e os adversários voltam 2 casas!";
        break;
    
    case 5:
    default:
        echo "volte 5 casas!";
        break;
    
}