<?php
//Declaração de variáveis.

$salario_funcionario = 3000;
$horas_extras = 12;

// Estas variáveis exibiram quanto o funcionário ganhará com os bonus.
$bonus1 = 0.20;     
$bonus2 = 0.10;
$conta1 = ($salario_funcionario * $bonus1);
$conta2 = ($salario_funcionario * $bonus2);

//Aqui usarei "and" para simplificar o código if else.
if ($salario_funcionario < 2000 and $horas_extras > 10){
    echo "Você terá 20% de aumento no seu salário!. Ele será $conta1 a mais!.";
} elseif ($salario_funcionario >= 2000 and $horas_extras > 5 ) {                           
    echo "Você terá 10% de aumento no seu salário!. Ele será $conta2 a mais!.";
} else {
    echo "O seu salario será de $salario_funcionario.";
}

?>