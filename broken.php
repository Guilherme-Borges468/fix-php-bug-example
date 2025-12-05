<?php
// Exemplo de código com bug para portfólio

$usuarios = [
    ["nome" => "Carlos", "idade" => 30],
    ["nome" => "Fernanda", "idade" => 27],
    ["nome" => "Bruno", "idade" => 22],
];

// BUG: variável $usuario2 não existe, isso gera um Notice/Warning
foreach ($usuarios as $usuario2) {
    echo "Nome: " . $usuario["nome"] . " - Idade: " . $usuario["idade"] . "<br>";
}
