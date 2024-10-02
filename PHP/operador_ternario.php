<?php 

$idade = 20;
$resultado = ($idade >= 18) ? "Maior de idade" : "Menor de idade"; //Isso é um if else mais rápido
echo "$resultado <br/>"; // Saída: Maior de idade 


$nome = "Ana";
$mensagem = ($nome == "Ana") ? " Olá, Ana" : "Olá, Visitante";  //Esse tipo de if else ocupa muito menos linha.
echo "$mensagem <br/>"; //Saída: Olá, visitante


//Exemplo igual aos anteriores, mas com booleano
$is_logged_in = true;
$mensagem = $is_logged_in ? " Bem-vindo de volta!" : "Por favor, faça loggin";
echo "$mensagem <br/>"; //Saída: Bem-vindo de volta!










?>