<?php
$conexao;

function connect(){
    global $conexao;
    $server = 'localhost';
    $username = 'root';
    $userPassword = '';
    $base = 'lojaroupas';
    $conexao = mysqli_connect($server, $username, $userPassword, $base) or die(mysqli_connect_error());
}

function query($sql){
    global $conexao;
    mysqli_query($conexao, "SET CHARACTER SET utf8");
    $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    return $query;
}

function close(){
    global $conexao;
    mysqli_close($conexao);
}
