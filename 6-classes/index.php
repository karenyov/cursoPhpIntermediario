<?php

require 'livro.php';

$livro1 = new Livro();
$livro1->codigo = 8;
$livro1->titulo = 'Senhor dos Anéis';
$livro1->autor = 'JRR Tolkien';
$livro1->valor = 56.50;

$livro1->cadastrar();

$livro1->mostrar();

var_dump($livro1);