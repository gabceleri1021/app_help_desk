<?php
//Exercício 11- Array Multidimensionais
$Cadastro = []; //Declarei lista

$Cadastro ['usuario'] = ['João','Maria','Pedro']; //Declarei sub lista 'usuário' na lista 'cadastro'
$Cadastro['senha'] = ['1234','abcd','5678']; //Declarei sub lista 'senha' na lista 'cadastro'

echo'<pre>'; //Abri lista visual
print_r($Cadastro); //Enviei os valores para lista visual
echo '</pre>'; //Fechei lista visual
echo '<hr>'; //linha Horizontal

$Cadastro ['usuario'][1] = 'Ana'; //Na sub lista 'usuario', na posição 1, trocará de 'Maria' por 'Ana'

$Cadastro ['senha'][1] = 'efgh'; //Na sub lista 'senhas', na posição 1, trocará de 'abcd' por 'efgh'

echo'<pre>'; //Abri lista visual
print_r($Cadastro); //Enviei os valores atuais para lista visual
echo '</pre>'; //Fechei lista visual
echo '<hr>'; //Linha horizonte







?>