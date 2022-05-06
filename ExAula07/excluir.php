<?php 

include('conexao.php');

$id = $_GET['id'];

$deletar = $banco->prepare("delete from pessoas where id=?");
$deletar->execute(array($id));

if ($deletar){
    echo ("<br> Excluido com sucesso!");
}else {
    echo ("<br> Erro ao excluir!");
}

?> 