<?php
//Variáveis
$nota1 = 8;
$nota2 = 10;
$nota3 = 6;

$media = ($nota1+$nota2+$nota3) / 3; // Variável da média

echo "A nota da primeira prova foi $nota1 <br>";
echo "A nota da segunda prova foi $nota2<br>";
echo "Para finalizar, a nota da terceira prova foi $nota3<br>";

//Verificar se a média está dentro do mínimo ou não
if ($media >= 7) {
    echo 'Segundo a média...... Parabens, você foi aprovado!';
} else{
    echo 'Segundo a média...... essa não, você foi reprovado...';
}



?>