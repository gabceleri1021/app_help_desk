<?php
//Utilize um laço for para iterar sobre os números de 1 a 10
for ($a = 1; $a <= 10; $a++) { // aqui o número irá se repetir
    echo $a . " ";
    $tipo_do_numero;
    $verificar = ($a % 2 == 0) ? "número é par" : "Numero não é par"; //Aqui verifica se o número é par

    switch ($a) {
        case $a <= 3:
            $tipo_do_numero = 'Baixo';
            break;

        case $a <= 7:
            $tipo_do_numero = 'Médio.'; //Aqui o número terá seu tipo
            break;

        case $a <= 10:
            $tipo_do_numero = 'Tipo de número, alto';
            break;

        default:
            $tipo_do_numero = 'desconhecido';

    }

    echo " Número escolhido é $verificar, e seu tipo é $tipo_do_numero, e por fim, ele é o $a<br/>"; // Saída com o resultado
}
