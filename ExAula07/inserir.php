<?php

include("conexao.php");

if ($banco) {
    echo ('<br>Conexão OK!');
}

$email = $_POST['email'];
$nome = $_POST['nome'];

$nova_pessoa = array($nome, $email);
    $gravar = $banco->prepare("insert into pessoas (nome, email) values (?,?)");

    if ($gravar->execute($nova_pessoa)){
        echo ("<br> Cadastro Realizado");
    } else {
        echo ("<br> Erro no Cadastro");
    }

?>