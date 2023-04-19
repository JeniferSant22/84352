<?php
// comentário de 1 linha
/*
o(a) estudante Dandara da Silva
n1 = 7
n2 = 9
n3 = 6
a média = (n1 + n2 + n3)/3
se a média >= 7
     aprovada
se a média >= 4
      conselho
senão
     reprovada      
*/
$student = "Dandara da Silva";
$n1 = 7;
$n2 = 9;
$n3 = 6;
$average = ($n1 + $n2 + $n3)/3;
//echo "O(A) aluno(a) $student ficou com média igual a $average";
if($average >=7){
    echo "O(A) aluno(a) $student ficou com média igual a $average e foi aprovada!";
}elseif($average >=4){
    echo "O(A) aluno(a) $student ficou com média igual a $average e foi para o conselho!";
}else{
    echo "O(A) aluno(a) $student ficou com média igual a $average e foi reprovada!";
}
?>