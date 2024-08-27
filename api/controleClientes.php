<?php
    include_once 'crudClientes.php';
    include_once 'crudGerente.php';
    session_start();

    $opcao = $_POST["opcao"];
    switch ($opcao) {
        case 'Cadastrar':
            cadastrarClientes($_POST["nome"], $_POST["limite"], $_SESSION["codigo"]);
            header("Location: cadastrarClientes.php");
            break;
        case 'Alterar':
            alterarClientes($_POST["codigo"], $_POST["nome"], $_POST["limite"]);
            header("Location: home.php");
            break;
        case 'Excluir':
            excluirClientes($_POST["codigo"]);
            header("Location: home.php");
            break;
    }
