<?php

class Livro {

    public $codigo;
    public $valor;
    public $titulo;
    public $autor;

    public function cadastrar() {
        echo "Cadastra $this->titulo no banco de dados.";
    }

    public function mostrar() {
        echo "Código: $this->codigo<br>";
        echo "Título: $this->titulo<br>";
    }

}