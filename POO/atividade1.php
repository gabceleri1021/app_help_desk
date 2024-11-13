<?php
// Modelo --> Entidade
class Aluno {

    // Atributos --> Características
    public $nome = "Gab"; 
    public $idade = 16;
    public $curso = "Dev"; 

    // Método --> Ações
    function ExibirDadosAluno() {
        // Exibe os dados do aluno
        return "$this->nome com a idade $this->idade faz o curso $this->curso"; 
    }

    function alterarCurso($novoCurso) { 
        // Altera o valor do curso
        $this->curso = $novoCurso; 
    }
}

// Objeto --> Instância
$ob = new Aluno();
echo $y->ExibirDadosAluno();
echo "<hr>";

// Alterando o curso e exibindo novamente
$ob->alterarCurso("Marketing");
echo $ob->ExibirDadosAluno();
?>
