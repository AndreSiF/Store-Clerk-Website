<?php
include '../model/crudUsuario.php';
$opcao = $_POST["opcao"];

switch ($opcao) {
    case 'Cadastrar':
        $cadastrou = cadastrarUsuario($_POST["nome"], sha1($_POST["senha"]));
        if($cadastrou == "sim"){
            header("Location: ../view/mostrarClientes.php");
        }
        else{
            header("Location: ../view/cadastrarUsuario.php");
        }
        break;

    case 'Entrar':
        $nome = $_POST['nome'];
        $senha = sha1($_POST['senha']);
        $resultados = buscarUsuario($nome);
        foreach ($resultados as $banco);
        if($nome === $banco['nomusuario']){
            if($senha === $banco['senha']){
                session_start();
                $codigo = $banco['codusuario'];
                $_SESSION["nome"] = $nome;
                $_SESSION["codigo"] = $codigo;
                header("Location: ../view/mostrarClientes.php");
            }
            else{
                echo "<script> alert('Senha incorreta.'); </script>";
                echo "<script> window.location = '../view/fazerLogin.php'; </script>";
            }
        }
        else{
            echo "<script> alert('Nome de usuário incorreto.'); </script>";
            echo "<script> window.location = '../view/fazerLogin.php'; </script>";
        }
        break;

        case "Sair":
            session_start();
            session_destroy();
            header("Location: ../view/mostrarClientes.php");
            break;
}

