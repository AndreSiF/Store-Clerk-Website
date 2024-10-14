<?php
include "conectarBD.php";

function cadastrarCliente($nome, $cpf, $codU){
    connect();
    query("INSERT INTO cliente (nomcliente, CPF, codusuario) VALUES ('$nome', '$cpf', $codU)");
    close();
}

function mostrarClientes($codigo){
    connect();
    $resultados = query("SELECT * FROM cliente WHERE codusuario=$codigo");
    close();
    return $resultados;
}

function mostrarClienteEdt($codigo){
    connect();
    $resultados = query("SELECT * FROM cliente WHERE codcliente=$codigo");
    close();
    return $resultados;
}

function editarCliente($nome, $cpf, $codigo){
    connect();
    query("UPDATE cliente SET nomcliente = '$nome', CPF = '$cpf' WHERE codcliente=$codigo");
    close();
}

function excluirCliente($codigo){
    connect();
    query("DELETE FROM cliente WHERE codcliente=$codigo");
    close();
}