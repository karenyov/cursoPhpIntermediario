<?php

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$twitter = strtolower(trim($_POST['twitter']));

if (!preg_match("/^[^0-9]{2,80}$/i", $nome)) {
    exit('Nome em formato errado');
}

$emailregex = <<<REGEXEMAIL
/^[^0-9][a-z0-9_]+([.][a-z0-9_]+)*[@][a-z0-9-_]+([.][a-z0-9]{2,3})*[.][a-z]{2,3}$/        
REGEXEMAIL;

if (!preg_match($emailregex, $email)) {
    exit('Email inválido');
}

if (!preg_match('/^@[a-z_]{1,15}$/', $twitter)) {
    exit('Twitter inválido');
}