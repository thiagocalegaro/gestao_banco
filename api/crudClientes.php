<?php
include_once 'conexaoBD.php';




function cadastrarClientes($nome, $limite, $codger)
{
    connect();
    query("INSERT INTO cliente (nome, limite, codger) VALUES ('$nome', '$limite', $codger)");
    close();
}

function mostrarClientes($codger)
{
    connect();
    $resultados = query("SELECT * FROM cliente WHERE codger=$codger");
    close();
    return $resultados;
}

function alterarClientes($codigo, $nome, $limite)
{
    connect();
    query("UPDATE cliente SET nome='$nome', limite='$limite' WHERE codigo=$codigo");
    close();
}

function excluirClientes($codigo)
{
    connect();
    query("DELETE FROM cliente WHERE codigo=$codigo");
    close();
}

function mostrarClienteAlterar($codigo)
{
    connect();
    $resultados = query("SELECT * FROM cliente WHERE codigo=$codigo");
    close();
    return $resultados;
}
