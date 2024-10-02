<?php

      // posição 1 posição 2  posição 3  posiçõ 4
$lista = ['valor00','valor01','valor02','valor03'];
    echo $lista[2]; //Mostra o valor01, pois ele está na posição 2 

    echo "<hr>"; //Linha Horizontal


              //Posição1 Posião2 Posição3 Posição4
$lista_frutas = ["banana","Maça","Morango","Uva"];
        echo  $lista_frutas[3]; //Mostra o Uva, pois ele está na terceira posição (Começa no zero)

    echo "<hr>"; //Linha Horizontal


//Aqui vamos alterar um valor na lista
$listinha = ["Peixe","Mexirica","Pessego","limão"]; //Declarei lista
    echo $listinha[0]; //Chamei lista

$listinha[0] = "Laranja"; //Posição 0 agora será "Laranja"

    echo "<hr>"; //Linha Horizontal

echo $listinha[0]; //Printei lista

echo "<hr>";

//Igual ao exemplo anterior, porém é mais bonito visualmente para o front end
$listona = ["Camisa","Calça","Cueca","Boné"]; //declarei a lista

echo "<pre>"; //<pre> mostra a lista visualmente no front end
print_r ($listona); //Print_r mostra os ítens da lista 
echo $listona[0]; // printei a posição 1
echo "<hr>"; //Linha Horizontal
echo "</pre>"; //Fechei a lista visualmente 

echo "<pre>"; // Abri a lista visualmente

//Alterando o valor Camisa para Blusa
$listona[0] = "Blusa"; // A posição um será "Blusa" agora
print_r($listona); //Mostra ítens da lista
echo "</pre>"; //fechei lista visual

echo "<br>";

echo $listona[0]; //Printei lista

?>