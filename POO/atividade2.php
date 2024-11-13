<?php

class Livro {
    // Atributos -> Características
    public $titulo = "algo estranho";
    public $autor = "Mr P";
    public $publicacao = "10/10/2010";

    // Método -> Ações
    public function exibir_Detalhes() {
        // Exibe os dados do livro
        return "{$this->titulo} do autor {$this->autor}, publicado em {$this->publicacao}.";
    }

    public function alterar_Data_Publicacao($novaPublicacao) {
        // Altera a data da publicação
        $this->publicacao = $novaPublicacao;
    }
}

// Objeto -> Instância
echo "<hr>";
$ob = new Livro();
echo $ob->exibir_Detalhes();
echo "<hr>";

// Alterando a data de publicação e exibindo novamente
$ob->alterar_Data_Publicacao("10/10/2022");
echo $ob->exibir_Detalhes();
echo "<hr>";

?>
