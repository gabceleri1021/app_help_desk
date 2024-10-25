<?php

session_start();  

$usuario_autentificado = false; //Usuário para ser verificável
$usuario_cadastrado = [ //Dados
    [
    'email' => 'admin@senai.br',//Email do usuário 1
    'senha' => 12345 //Senha de usuário
    ],
    [
    'email' => 'aluno@senai.br',//Email do usuário 2
    'senha' => 'abcde' //Senha do user 2
    ],
    [
    'email' => 'suporte@senai.br',//Email  do usuário 3
    'senha' => '1a2b3c'// senha do user 3
    ]
];

foreach ($usuario_cadastrado as $user){ //Verificação de email e senha 
    if ($user['email'] == $_POST['email'] and $user['senha'] == $_POST['senha']){
        $usuario_autentificado = true; //Se tiver tudo certo, essa variavel vira true 
    }
}
if ($usuario_autentificado == true){ //Se tudo estiver certo, será direcionado na página painel.php
    $_SESSION['autenticado'] = 'SIM';
    header('Location: painel.php'); //Direciona a localização tal
}
else{
    //echo "Óh não, senha ou usuários estão errados"; // Se não, print isso
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: entrar.php?login=erro');//Caso o user erre algo, será direcionado nesse página
}
?>