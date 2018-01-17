<?php

require 'Cliente.php';
require 'ClientePF.php';

$cli = new Cliente;
$cli->nome = 'Richard';
$cli->setEmail('teste@gmail.com');

echo $cli->getEmail();

var_dump($cli);

$pf = new ClientePF;

echo $pf->teste2();