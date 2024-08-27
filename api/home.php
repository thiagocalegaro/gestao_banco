<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Banco Vórtex</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <img src="logo2.jpg" alt="" width="100" height="100">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">Banco Vórtex</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="cadastrarClientes.php">Cadastrar Clientes</a>
                </li>
            </ul>
            <ul class="perfil">
                <form method="post" action="controleGerente.php">
                    <button type="submit" name="opcao" value="Sair" class="btnsair">Sair</button>
                </form>
                <img src="foto.png" alt="" class="foto">
                <div class="nome">
                    <?php
                    session_start();

                    if (isset($_SESSION["nome"])) {
                        echo 'Bem-vindo, ', $_SESSION['nome'];
                    } else {
                        header("Location: paginaLogin.php");
                    }
                    ?>
                </div>
            </ul>
        </div>
    </div>
</nav>




   
    <div class="container">
        <h1>Clientes</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Limite de Crédito</th>
                    <th scope="col">Código do Gerente Responsável</th>
                    <th scope="col">Ação</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include_once 'crudClientes.php';
                $codger = $_SESSION['codigo'];
                $resultados = mostrarClientes($codger);
                foreach ($resultados as $linha) {
                ?>
                    <tr>
                        <td><?php echo $linha['codigo']; ?></td>
                        <td><?php echo $linha['nome']; ?></td>
                        <td>R$ <?php echo ($linha['limite'] ); ?></td>
                        <td><?php echo $linha['codger']; ?></td>
                        <td><a class="btn btn-success" id="textbtn" href="editarClientes.php?codigo=<?php echo $linha['codigo']; ?>">Editar</a></td>
                    </tr>

                <?php
                }
                ?>


            </tbody>
        </table>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </div>
</body>

</html>