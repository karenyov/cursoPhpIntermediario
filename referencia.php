<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = 5;
        $b = 5;
        $c = $a + $b;
        var_dump($c); // 10
        //Segundo passo
        $a = 10;
        $b = 10;
        var_dump($c); // 10
        
        ?>
        
        <h2>Referência</h2>
        <?php
        //Referência

        $a = 5;
        $b = & $a; //$b referencia $a
        // Imprimimos $b
        var_dump($b);

        // Alteramos o valor de $a
        $a = 25;

        // Novamente imprimimos $b
        var_dump($b); // 25
        
        ?>
        
        <h2>Variáveis para funções por referência</h2>
        <?php
        // variáveis para funções por referência:
        
        function foo(&$var) {
            $var++; // Incrementa $var
            var_dump($var); // 10
        }
        
        //Inicializa a vaiável $valor
        $valor = 9;
        
        //Passa a variável $valor para a função foo()
        foo($valor);
        
        // Imprime o valor da variável $valor
        var_dump($valor); // 10
        
        ?>
        
        <h2>Variável indefinida</h2>
        <?php
        
        function sortArray(&$array) {
            // Operações
        }
        
        //Executa a função
        sortArray($cursos);
        
        //Imprime a variável $cursos
        var_dump($cursos);
        
        ?>
        <h2>Remover referência</h2>
        <?php
        
        $a = 20;
        $b =& $a;
        
        unset($b); // Remove a variável referência $b
        
        //Impime o valor de $a
        var_dump($a);
        
        ?>
        
    </body>
</html>
