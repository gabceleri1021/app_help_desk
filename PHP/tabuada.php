<?php

function tabuada ($numero, $conta) {
return $numero * $conta; //função para calcular a conta
    
}
 $conta = 2; // Tabuada do 2 
for ($numero = 1; $numero <=10; $numero++) {
    $resultado = tabuada($numero, $conta); // Número de 1 a 10 x 2, que é a tabuada
    echo "$numero x $conta = $resultado <br>"; //Saída: resultado
}



























?>