<?php

$cadastro =[];//Lista criada, estando vazia

$cadastro['nome']=['Jamilton','Guilhão','Celeri','Enzão','Felipin'];
//criei lista nome na lista cadastro, com o nome dos usuários
$cadastro['email']=['Jajá@gmail','Gui@gmail','gab@gmail','japa@gmail','felipe@gmail'];
//Criei lista email na lista cadastro, igual a lista nome

echo'<pre>'; //Abri lista digital

print_r($cadastro); //Adicionei os valores na lista virtual 

echo'</pre>';//Fechei a lista virtual

echo '<hr>'; //Linha horizontal

echo $cadastro['nome'] [3]; //Print na posição 2 na lista nome
echo '<br>';
echo $cadastro['email'] [4];//Print na posição 4 na lista email



$cadastro['nome'][2] = 'Senai';//Na lista nome, na 2 posição, será 'Senai' agora

$cadastro['email'][0] = 'Aluno@senai.br';//Na lista nome, na posição 0, será agora  'Aluno@senai.br

echo '<hr>';
echo $cadastro['nome'] [2];// print da segunda posição, na lista nome
echo '<br>';
echo $cadastro['email'] [0];// Print da primeira posição, na lista email

echo '<hr>'; //Linha horizontal

echo'<pre>'; //Abri lista digital

print_r($cadastro); //Adicionei os valores na lista virtual 

echo'</pre>';//Fechei a lista virtual

echo '<hr>'; //Linha horizontal

?>