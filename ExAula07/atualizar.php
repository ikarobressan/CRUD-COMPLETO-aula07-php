<?php

    include('conexao.php');

    $id = $_POST['id'];

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $editar = $banco->prepare("update pessoas set nome=?,email=? where id=?");

    $editar->execute(array($nome, $email, $id));

    if ($editar) {
        echo ("<br> Atualização feita com sucesso!");
    } else {
        echo ("<br> Erro ao Atualizar!");
    }











?>