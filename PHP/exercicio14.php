<?php
//Função para exibir a lista no site ( ---------Cola para todos os códigos aqui-----------)
function exibirLista($usuario) {
    echo '<pre>';
    print_r($usuario);
    echo '</pre>';
}

$usuario = [ //criei array com sub arrays dos usuários
    [ "id" => 1,
      "nome" => "João",
      "cidade" => "Torre de Pedras",
      "Estado" => "SP"],

    [ "id" => 2,
      "nome" => "Maria",
      "cidade" => "Rio de Janeiro",
      "Estado" => "RJ"],

    [ "id" => 3,
      "nome" => "Alice",
      "cidade" => "Tiete",
      "Estado" => "SP"],

    [ "id" => 4,
      "nome" => "Matteo",
      "cidade" => "Cerquilho",
      "Estado" => "SP"],

    [ "id" => 5,
      "nome" => "Gabriel",
      "cidade" => "São Paulo",
      "Estado" => "SP"],

];

exibirLista($usuario); //Chamei minha função para aparecer lista
echo '<hr>';

$pesquisador = 'Matteo';// Irei pesquisar o nome 'Matteo'

$indice = array_search($pesquisador, array_column($usuario, 'nome'));//Procurará a posição da variavel, cmç do 0

if ($pesquisador <> false) { //verifica o indice e o pesquisador são verdadeiros
    echo "$pesquisador foi encontrada na lista usuários, na coluna nome : " .  $usuario[$indice]['nome'];
} else {
    echo "$pesquisador não foi encontrado na listado usuários."; 
}
?>
