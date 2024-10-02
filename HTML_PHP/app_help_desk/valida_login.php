<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <?php
    function mostrarPOST()
    { //Função que mostra o print_r POST e, colinha para a tabela virtual do php
        echo "<pre>";
        print_r($_POST);
        echo "</pre> <hr>";
    }

    echo "<h1> Olá " . $_POST['email'] . ", seja bem vindo!!! <hr>";

    mostrarPOST(); // Chamei a função da lista virtual com POST

    echo "E-mail: ";
    echo $_POST['email'];
    echo '<br>';
    echo "senha: ";
    echo $_POST["senha"];

    ?>

</body>

</html>