<?php
// Array
$cursos = [
    3 => "PHP Intermediário",
    1 => "PHP Básico",
    7 => "PHP Orientado a Objetos",
    4 => "PHP Avançado"
];

// Ordena o array pelas chaves em ordem crescente
ksort($cursos);

// Imprime o Array
var_dump($cursos);

// Define a função
function removerChave(&$array, $item) {
    if (isset($array[$item])) {
        unset($array[$item]);
        return true;
    }

    return false;
}

// Define o array
$carros = [
    "uno" => [
        "ano" => 2015,
        "motor" => 1.0
    ],
    "vectra" => [
        "ano" => 2011,
        "motor" => 1.6
    ],
    "hb20" => [
        "ano" => 2015,
        "motor" => 1.6
    ]
];

if (removerChave($carros, "uno")) {
    var_dump($carros);
} else {
    echo "O valor informado não existe no Array.";
}
?>

<h2>Extrair dados do array</h2>
<?php
// O array dos dados
$dados = [
    'nome' => 'TreinaWeb',
    'email' => 'treinaweb@treinaweb.com.br',
    'telefone' => '99-9999-9999',
    'site' => 'http://www.treinaweb.com.br'
];

foreach ($dados as $chave => $valor) {
    // Cria a variável dinâmica com o nome da respectiva chave do array
    $$chave = $valor;
}

// Acessa as variáveis criadas dinamicamente
echo $nome . "<br>";
echo $email . "<br>";
echo $telefone . "<br>";
echo $site;
?>
<h2>Extrair dados do array (extract)</h2>
<?php
// O array dos dados
$dados = [
    'nome' => 'TreinaWeb',
    'email' => 'treinaweb@treinaweb.com.br',
    'telefone' => '99-9999-9999',
    'site' => 'http://www.treinaweb.com.br'
];

// Extrai os dados do array para variáveis
extract($dados);

// Acessa as variáveis criadas dinamicamente
echo $nome . "<br>";
echo $email . "<br>";
echo $telefone . "<br>";
echo $site;
