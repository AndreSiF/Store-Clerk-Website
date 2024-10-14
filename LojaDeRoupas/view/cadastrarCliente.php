<!doctype html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Cadastrar Cliente </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="../css/geral.css" rel="stylesheet">
    </head>

    <body>
        <?php
            session_start();
            if(!isset($_SESSION['nome'])){
                echo "<script> alert('Faça login antes de cadastrar clientes.'); </script>";
                echo "<script> window.location = '../view/fazerLogin.php'; </script>";
            }
        ?>
        <div id="top">
            <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="mostrarClientes.php"> <img src="../img/logo.png" alt="Logo da loja" width="45" height="40"> </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="mostrarClientes.php"> Mostrar Clientes </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#top"> Cadastrar Cliente </a>
                            </li>
                            <?php
                            if(isset( $_SESSION["nome"])){
                                $nome = $_SESSION["nome"];
                                echo "<li class='nav-item dropdown'>
                                <a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                    $nome
                                </a>
                                <ul class='dropdown-menu'>
                                    <form method='POST' action='../control/controleUsuario.php'>
                                        <li><button type='submit' name='opcao' value='Sair' class='dropdown-item'> Sair </button></li>
                                    </form>
                                </ul>
                                </li>";
                            }
                            else{
                                echo "<li class='nav-item'>
                                    <a class='nav-link' href='fazerLogin.php'> Entrar </a>
                                </li>";
                            }
                        ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div id="container">
            <h1 class="titulo"> Cadastrar Cliente </h1>
            <form method="POST" action="../control/controleCliente.php">
                <div class="mb-3">
                    <label for="nome" class="form-label"> Nome do Cliente </label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label"> CPF do cliente </label>
                    <input type="text" class="form-control" id="cpf" name="cpf" maxlength="14" required>
                </div>
                <button type="submit" class="btn btn-primary" name="opcao" value="Cadastrar"> Cadastrar </button>
            </form>
        </div>
        <script src="../js/jquery-3.7.1.min.js" type="text/javascript"> </script>
        <script src="../js/jquery.maskedinputs.js" type="text/javascript"> </script>
        <script src="../js/mascaras.js" type="text/javascript"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>