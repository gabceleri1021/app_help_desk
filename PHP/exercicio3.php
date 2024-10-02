<?php
//Declaração das variáveis.
$estado_cliente = 'Nâo_vip';
$estado_compras = 100;

//Aqui será usado o "or" para simplificar o if else, diminuindo código.
if ($estado_cliente == 'vip' or $estado_compras > 500) {
    echo 'O cliente tem direito ao desconto!';
} else {
    echo 'O cliente não tem direito ao desconto';
}

?>