<?php
include '../model/crudCliente.php';
$opcao = $_POST["opcao"];

switch ($opcao) {
    case 'Cadastrar':
        session_start();
        cadastrarCliente($_POST["nome"], $_POST["cpf"], $_SESSION['codigo']);
        header("Location: ../view/cadastrarCliente.php");
        break;

    case 'Alterar':
        editarCliente($_POST["nome"], $_POST["cpf"], $_POST["codigo"]);
        header("Location: ../view/mostrarClientes.php");
        break;

    case 'Excluir':
        excluirCliente($_POST["codigo"]);
        header("Location: ../view/mostrarClientes.php");
        break;
}
