<?php

$nome= 'TreinaWeb';

//HEREDOC (atribuição de aspas duplas)
$heredoc = <<<MEUTEXTO
$nome: Meu texto aqui sem conflitar com aspas simples "'" ou aspas duplas
exemplo """
MEUTEXTO;

//NOWDOC (atribuição de aspas simples)
$nowdoc = <<<'OUTROTEXTO'
Aquidentro tem o nowdoc $nome
OUTROTEXTO;

echo $nowdoc;





