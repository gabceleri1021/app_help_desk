<?php

// Modelo --> Entidade
class Funcionario
{ //Classe dos funcionários

    //Atributos e suas características
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null; //Atributos sem características
    public $cargo = null;
    public $salario = null;

    //Setter overloading
    function __set($atributos, $valor)
    {
        $this->$atributos = $valor;
    }

    //Getter overloading
    function __get($atributos)
    {
        return $this->$atributos;
    }

    function resumirCadFunc()
    {
        return $this->__get('nome') . " possui " . $this->__get('numFiilhos') . " filho(s)";
        //Retorna o nome setado, e retorna o NumFilhos setados tbm
    }
}

$y = new Funcionario();
$y->__set('nome', 'José'); //nomes setados
$y->__set('numFilhos', 0); //Numfilhos setados
echo $y->resumirCadFunc(); //chamei função
