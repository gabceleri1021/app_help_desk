<?php

//Isso é um exemplo de if else, mas com o switch.
$corEscholhida = "Vermelho";

switch ($corEscholhida) {
    case "Vermelho":
        echo "Você escolheu a cor vermelha. ";
        break;

    case "Azul":
        echo "Você escolheu a cor azul.";
        break; //Com ele podemos escolher várias opçôes para verificar a variável.

    case "Verde":
        echo "Você escolheu a cor verde";

    default:
        echo "Cor não disponivel";
        break;
    
            

}







?>