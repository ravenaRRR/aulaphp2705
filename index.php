<!--estrutura de repetição-while
o propósito da declaração while (enquanto) é simples. Ele dirá ao php para executar as declarações repetidamente; enquanto a expressão do while for avaliada como verdadeira- true:

sintaxe:
while (expressão){
//código
}

while (expressão):
//código
endwhile;
-->

<?php

$contador = 0;


while($contador<=100){
if($contador%2==0){ 
    echo $contador . "</br>"; 
}
$contador++; 
}


?>