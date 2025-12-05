<?php
// Versão corrigida do código

$usuarios = [
    ["nome" => "Carlos", "idade" => 30],
    ["nome" => "Fernanda", "idade" => 27],
    ["nome" => "Bruno", "idade" => 22],
];

// Correção: usar a MESMA variável declarada no foreach
foreach ($usuarios as $usuario) {
    echo "Nome: " . $usuario["nome"] . " - Idade: " . $usuario["idade"] . "<br>";
}
