<?php
//Variáveis de chamado (informações)
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];

$texto = $titulo."#". $categoria."#".$descricao. PHP_EOL; // Texto com tudo junto para facilitar

echo $texto;

$arquivo = fopen('../../../app_help_desk/registro.txt','a'); //Abrir arquivo X

fwrite($arquivo, $texto);//Escrever $texto no arquivo X

fclose($arquivo);//Fechar arquivo X

header('location: painel.php');//Ocultará esta página, e direcionar o usuário à página painel após enviar chamado
?>