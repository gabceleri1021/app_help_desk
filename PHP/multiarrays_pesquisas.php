<?php
//Exemplo de pesquisa de arrays dimensionais
$usuario = [ //criei array com sub arrays dos usuários
    [ "id" => 1,
      "nome" => "João",
      "email" => "Joao@example.com"],
    [ "id" => 2,
      "nome" => "Maria",
      "email" => "maria@example.com"],
    [ "id" => 3,
      "nome" => "Pedro",
      "email" => "Pedro@example.com"]

];

$pesquisador = "Pedro@example.com"; //Meu pesquisador pesquisará este email


echo '<pre>'; //Abri a estrutura da tabela virtual
print_r($usuario);  //Adicionei os valores
echo '</pre>'; //Fechei a estrutura da tabela virtual

$indice = array_search($pesquisador, array_column($usuario, 'email'));//Procurará a posição do valor, cmç do 0

if ($pesquisador <> false) { //verifica o indice e o pesquisador são verdadeiros
    echo "$pesquisador foi encontrada com o ID: " .  $usuario[$indice]['id'];
} else {
    echo "$pesquisador não foi encontrado na listado usuários."; 
}
?>
