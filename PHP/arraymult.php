<?php

//Declarei array
$lista = [];

//Declarei array 'frutas' dentro da array 'lista'
$lista ['frutas'] = ['Banana','Maça','Morango','Uva','Pessego'];

//Delcarei array 'pessoas' dentro da array 'lista'
$lista ['pessoas'] = ['João','José','Maria','Larissa',];


echo'<pre>'; //Criei lista visual
print_r($lista); //declarei valores na lista visual no site. (Usado para números).
echo '</pre>'; //Fechei lista visual
echo '<hr>';

//Para murdarmos algum ítem, é:

//Array frutas, Posição 2, será agora 'Abacaxi'
$lista ['frutas'][2] = "Abacaxi";

//Array frutas, Posição 3, será agora 'Uva passa'
$lista ['frutas'][3] = "Uva Passa";

//Array pessoas, Posição 1, será agora 'Gabriel'
$lista['pessoas'][1] = "Gabriel";

//Array pessoas, Posição 0, será agora 'Raul'
$lista['pessoas'][0] = "Raul";

echo'<pre>';
print_r($lista);
echo '</pre>';
echo '<hr>';






?>