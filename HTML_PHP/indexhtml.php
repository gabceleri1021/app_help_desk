<?php
    $nome = 'Usuário';
    $formato = 'Y-m-d H:i:s';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro site HTML e PHP</title>

    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1> Bem Vindo <?php echo $nome;?> </h1>
    <h2>Agora são <?php $dataAtual = date($formato);
echo " " . $dataAtual; ?></h2>
    
</body>
</html>