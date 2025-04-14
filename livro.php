<?php
// Defina uma classe chamada aluno
class Livro{
    // criar uma propriedade privada (encapsulamento) chamada $livros;
    // Essa propriedade é um array que armazena dados e livros;
    // Cada livro é representado por um array associativo com titulo, autor e ano de publicação
private $livros = [
    ['titulo' => 'Diário de um Banana', 'autor' => 'Jeff Kinney', 'ano' => 2007],
    ['titulo' => 'o ratinho o morango vermelho maduro e o grande urso esfomeado', 'autor' => 'Audrey Wood', 'ano' => 2002],
    ['titulo' => 'AS AVENTURAS DO CAPITÃO CUECA - EM CORES!', 'autor' => 'Dav Pilkey', 'ano' => 2017],
    ['titulo' => 'AS AVENTURAS DO CAPITÃO CUECA - EM CORES!', 'autor' => 'Dav Pilkey', 'ano' => 2017],
    ['titulo' => 'AS AVENTURAS DO CAPITÃO CUECA - EM CORES!', 'autor' => 'Dav Pilkey', 'ano' => 2017]
    ];

// Define um método púnlico chamado listarAlunos.
// Esse método serve para retornar o conteúdo do array $alunos

public function listarlivros(){
    return $this->livros;
}

}
?>