<?php
//Exemplos de array_search (13/09/2024)

$frutas =['maça','banana','uva']; //Declarei lista frutas com esses itens

$pesquisa = "uva";//Meu pesquisador pesquisará o valor uva

$indice = array_search($pesquisa, $frutas);//O indice procurará qual é a posição do valor uva

//Verifica se $indice não é igual a false, mostrando que uva foi identificada no array
if($indice <> false ) {
    echo "$pesquisa foi encontrada na posição " . $indice;//pesquisa mostra o meu item e o indice sua posição
}
else {
    echo "$pesquisa não foi encontrado na lista de frutas.";//Item uva não foi encontrado no array
}

//--> o sinal <> significa diferente, igual !==












?>