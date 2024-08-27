<?php
include_once 'conexaoBD.php';
function cadastrarGerente($nome, $senha)
{
    connect();
    query("INSERT INTO gerente (nome, senha) VALUES ('$nome', '$senha')");
    close();
}
function buscarGerente($nome)
{
    connect();
    $resultados = query("SELECT * FROM gerente WHERE nome='$nome'");
    close();
    return $resultados;
}
