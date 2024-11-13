<?php

// Modelo --> Entidade
class Funcionario { //Classe dos funcionários

    //Atributos e suas características
    public $nome = null;
    public $telefone = null;//Atributos sem características
    public $numFilhos = null;

    //Setters
    function setNome($nome){
        $this->nome = $nome; //setei nome = nome
    }
    function setNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos; //setei numflhos = numfilhos
    }

    //Getters
    function getNome(){
        return $this->nome; //retornará o nome setado
    }
    
    function getNumFilhos(){
        return $this->numFilhos; //retornará p numfilhos setados
    }
    function resumirCadFunc() {
        return "$this->nome possui $this->numFilhos Filhos(s)";//retornará o nome (não escolhido) e a quantidade de filho(s)
    }

}

$y = new Funcionario();//Função para adicionar um novo funcionário
$y->setNome('José');//José setado
$y->setNumFilhos(2);//NumFilhos do José setado
// echo $y->resumirCadFunc(); opção 1
echo $y->getNome().' possui ' .$y->getNumFilhos().' filho(s)'; // Opção 2
//(print) o nome josé setado, possui (print)NumFilhos setado