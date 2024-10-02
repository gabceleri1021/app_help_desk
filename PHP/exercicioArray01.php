<?php
//Exercício 1- Números
$numeros =[0,1,2,3,4,5,6,7,8,9,]; //declarei lista

echo "<pre>"; //Fiz lista visual 
print_r($numeros); //Mandei criar os valores visuais na lista visual
echo "<br>";
echo "<hr>"; //linha Horizontal
echo "<pre>"; //fechei lista visual

echo "<pre>"; //Abri lista visual 2
$numeros[0] = 100;
$numeros[4] = 500; //Aqui mudará os valores nas posições 0,4,9
$numeros[9] = 1000;
print_r($numeros); //Mandei criar os valores visuais na lista visual 2 
echo "<br>";
echo "<hr>";//linha Horizontal
echo "</pre>"; //Fechei lista visual 2

echo "Os valores que mudaram foram o $numeros[0],$numeros[4] e o $numeros[9] "; //Saída das posições 

echo "<br>";
echo "<hr>";//linha Horizontal
?>