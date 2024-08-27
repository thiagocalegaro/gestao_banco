<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
        <img src="logo2.jpg" alt="" width="100" height="100">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Banco Vórtex</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="cont">

        <h1>Login</h1>
        <form method="post" action="controleGerente.php">

            <div class="mb-3">
                <label for="nome" class="form-label">Gerente: </label>
                <input type="text" name="nome" class="form-control" id="nome">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha">
            </div>
            <button type="submit" name="opcao" value="Entrar" class="btn btn-primary" id="btnlog">Entrar</button>
            <a href="cadastrarGerente.php" class="cad">Não possui uma conta? Cadastre-se</a>
        </form>
    </div>
</body>

</html>