<?php

$lista_nomes =['Miguel','Arthur','Gael','Théo','Heitor','Ravi','Davi','Bernardo','Noah','Gabriel'];
//Criei lista com os nomes

$pesquisador = "Davi";// Meu pesquisador pesquisará o valor Davi

$indice = in_array($pesquisador, $lista_nomes);//Meu indice procurará o valor do pesquisador

if(array_search($pesquisador, $lista_nomes)) { //Se tiver o Davi lista, mostra ele e sua posição
    echo "O item $pesquisador existe nesta lista, e está na posição " . $indice;
}
else {
    echo "O item $pesquisador não existe nesta lista";// o Davi não está na lista
}





?>