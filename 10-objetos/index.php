<?php

$obj = new stdClass();
$obj->valor1 = 'Um valor aqui 1';
$obj->valor2 = 'Um valor aqui 2';
$obj->valor3 = 'Um valor aqui 3';

var_dump($obj);

$arr_obj = (object)[
    'nome' => 'Pedro Lima',
    'endereco' => 'Rua 123, teste',
    'tel' => '11 111111111'];

//$obj2 = (object)$arr_obj;

var_dump($arr_obj);

foreach($arr_obj as $key => $val) {
    echo "$key:  $val<br>";
}

